<?php
/**
 * @package ImageController
 * @author TechVillage <support@techvill.org>
 * @contributor Kabir Ahmed <[kabir.techvill@gmail.com]>
 * @created 06-03-2023
 */
namespace Modules\OpenAI\Http\Controllers\Admin\v2;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Modules\OpenAI\DataTables\v2\ImageDataTable;
use Modules\OpenAI\Entities\Archive;
use Modules\OpenAI\Exports\v2\ImageExport;
use Modules\OpenAI\Services\ContentService;
use Modules\OpenAI\Services\v2\ImageService;

class ImageController extends Controller
{

    /**
     * Image Service
     *
     * @var object
     */
    protected $imageService;

    /**
     * @param ImageService $imageService
     */
    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    /**
     * Store Image via service
     * @param Request $request
     *
     * @return [type]
     */
    public function saveImage($imageUrls)
    {
        return $this->imageService->save($imageUrls);
    }

    /**
     * Image list
     *
     * @param ImageDataTable $imageDataTable
     * @return mixed
     */
    public function index(ImageDataTable $imageDataTable, ContentService $contentService)
    {
        $images = Archive::with('metas')->where('type', 'image_variant')->get()->toArray();
        $data['sizes'] = array_unique(array_map(function($image) {
            return $image['meta_data']['generation_options']['size'];
        }, $images));
        $data['users'] = User::get();

        return $imageDataTable->render('openai::admin.v2.image.index', $data);
    }

    /**
     * Delete image
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destory(Request $request)
    {

        $image = Archive::where('id', $request->id)->where('type', 'image_variant')->first();

        if ($image) {
            try {
                DB::beginTransaction();
                if (isExistFile('public/uploads/aiImages/' . $image->original_name)) {
                    Storage::disk()->delete('public/uploads/aiImages/' . $image->original_name);
                }
    
                $image->unsetMeta(['url', 'original_name', 'slug', 'image_creator_id', 'generation_options']);
                $image->save();
                $image->delete();

                DB::commit();
                return redirect()->back()->withSuccess(__('The :x has been successfully deleted.', ['x' => __('Image')]));
            } catch (Exception $e) {
                DB::rollback();
                return redirect()->back()->withFail($e->getMessage());
            }
        }

        return redirect()->back()->withFail(__('Image does not exist.'));
    }

    /**
     * View image
     *
     * @param mixed $slug
     * @return \Illuminate\Contracts\View\View
     */
    public function view($slug)
    {
        $data['images'] = $this->imageService->imageBySlug($slug);
        return view('openai::blades.imageView', $data);
    }

    /**
     * Image list pdf
     *
     * @return mixed
     */
    public function pdf()
    {
        $data['images'] = Archive::with('metas', 'imageCreator')->where('type', 'image_variant')->get();


        return printPDF($data, 'image_list_' . time() . '.pdf', 'openai::admin.v2.image.image_list_pdf', view('openai::admin.v2.image.image_list_pdf', $data), 'pdf');
    }

    /**
     * Image list csv
     *
     * @return mixed
     */
    public function csv()
    {
        return Excel::download(new ImageExport(), 'image_list_' . time() . '.csv');
    }
}


