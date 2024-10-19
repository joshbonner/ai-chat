<?php

namespace Modules\OpenAI\Http\Controllers\Customer\v2;

use Modules\OpenAI\Transformers\Api\v2\Image\{
    SingleImageResources,
    ImageReplyResources
};
use Modules\OpenAI\Http\Requests\ToggleFavoriteImageRequest;
use Modules\OpenAI\Http\Requests\v2\ImageStoreRequest;
use Modules\OpenAI\Services\v2\ArchiveService;
use Modules\OpenAI\Services\v2\ImageService;
use Modules\OpenAI\Services\ContentService;
use Exception, DB, AiProviderManager;
use Modules\OpenAI\Entities\Archive;
use App\Http\Controllers\Controller;
use Illuminate\Http\{
    Response,
    Request
};

class ImageController extends Controller
{
    private $imageService;

    public function __construct()
    {
        $this->imageService = new ImageService;
    }

    public function index()
    {
        $data['images'] = SingleImageResources::collection(
            Archive::with('metas')
                ->where('type', 'image_variant')
                ->where(function ($query) {
                    $query->whereHas('metas', function ($q) {
                        $q->where('key', 'image_creator_id')->where('value', auth()->id());
                    });
                })
                ->latest()
                ->paginate(preference('row_per_page'))
        );

        $data['userFavoriteImages'] = auth()->user()->image_favorites ?? [];

        return view('openai::blades.v2.images.gallery.index', $data);
    }

    public function create()
    {
        $userId = (new ContentService())->getCurrentMemberUserId(null, 'session');
        $data['userId'] = $userId; 
        $data['userSubscription'] = subscription('getUserSubscription',$userId);
        $data['featureLimit'] = subscription('getActiveFeature', $data['userSubscription']?->id ?? 1);
        $data['aiProviders'] = AiProviderManager::databaseOptions('imagemaker'); 

        if (request('id') || request('prompt')) {
            $imageId = Archive::where(['id' => request('id'), 'type' => 'image_variant'])->first(['id', 'parent_id'])->parent_id;
            if ($imageId) {
                $data['parentId'] = Archive::where(['id' => $imageId, 'type' => 'image_chat'])->first(['id', 'parent_id'])->parent_id;
                $data['prompt'] = request('prompt');
            }
        }
        $data['rules'] = AiProviderManager::rules('imagemaker');

        return view('openai::blades.v2.images.create', $data);
    }

    public function store(ImageStoreRequest $request)
    {
        $request = $request->validated();
        $request['options'] = request(request('provider'));
        $request['options']['file'] = request('file') ?? null;
        $cleanedString = preg_replace('/[^A-Za-z0-9\s]/', '', $request['prompt']);
        $request['prompt'] = filteringBadWords($cleanedString);
        $request['parent_id'] = request('parent_id') ?? null;
        $model = $request['options']['model'] ?? null;

        $request['options'] = array_map(function($option) use ($model) {
            if (is_array($option)) {
                if (isset($option[$model])) {
                    return $option[$model];
                } else {
                    return null;
                }
            } else {
                return $option;
            }
        }, $request['options']);

        try {
            $images = new ImageReplyResources($this->imageService->store($request));
            return response()->json(['data' => $images], Response::HTTP_CREATED);
        } catch (Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], $e->getCode() ?: Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }

    public function show($slug)
    {
        $data['userFavoriteImages'] = auth()->user()->image_favorites ?? [];

        // Current Image
        $data['currentImage'] = Archive::whereHas('metas', function($q) use ($slug) {
                $q->where('key', 'slug')
                  ->where('value', $slug);
            })
            ->where('type', 'image_variant')
            ->first();
        // Image Variants
        $data['variants'] = $this->imageService->getImageVariants($data['currentImage']);
        $data['variants']->prepend($data['currentImage']);

        // Related Images
        $data['relatedImages'] = $this->imageService->getRelatedImages($data['currentImage']);

        $html = view('openai::blades.v2.images.gallery.variant', $data)->render();

        $data['variants'] = $this->imageService->prepareImageData($data['variants'], $data['userFavoriteImages'], 'small');
        $data['relatedImages'] = $this->imageService->prepareImageData($data['relatedImages'], $data['userFavoriteImages'], 'medium');

        return response()->json([
            'data' => $data,
            'html' => $html
        ]);
    }

    public function destory(Request $request)
    {
        DB::beginTransaction();

        try {

            $this->imageService->delete($request->except('_token'));
            DB::commit();
            return response()->json(__('The :x has been successfully deleted.', ['x' => __('Image')]), Response::HTTP_OK);

        } catch (Exception $e) {

            DB::rollBack();
            return response()->json([
                'error' => $e->getMessage()
            ], $e->getCode() ?: Response::HTTP_INTERNAL_SERVER_ERROR);
            
        }
    }

    public function toggleFavoriteImage(ToggleFavoriteImageRequest $request): mixed
    {
        try {
            $message = $this->imageService->favourite($request->except('_token'));
            return response()->json($message, Response::HTTP_OK);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), $e->getCode() ?: Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function imageShare($slug)
    {
        $data['currentImage'] = Archive::with('imageCreator')->whereHas('metas', function($q) use ($slug) {
            $q->where('key', 'slug')->where('value', $slug);
        })->where('type', 'image_variant')->first();

        $data['variants'] = Archive::with('metas')->where('parent_id', $data['currentImage']->parent_id)->where('type', 'image_variant')->get();

        return view('openai::blades.v2.images.gallery.image_view_weblink', $data);
    }
}