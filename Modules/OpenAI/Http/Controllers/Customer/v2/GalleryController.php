<?php

namespace Modules\OpenAI\Http\Controllers\Customer\v2;

use Modules\OpenAI\Transformers\Api\v2\Image\SingleImageResources;
use Modules\OpenAI\Entities\Archive;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\OpenAI\Services\v2\ImageService;

class GalleryController extends Controller
{

    public function gallery(Request $request)
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

        $data['currentImage'] = [];
        $data['relatedImages'] = [];
        $data['variants'] = [];

        if ($request->ajax()) {
            $imageItems = (new ImageService())->prepareImageData($data['images'], $data['userFavoriteImages'],  'medium');

            return response()->json([
                'items' =>  $imageItems,
                'nextPageUrl' => $data['images']->nextPageUrl()
            ]);
        }

        return view('openai::blades.v2.images.gallery.gallery', $data);
    }

}