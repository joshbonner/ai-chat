<?php

namespace Modules\OpenAI\Http\Controllers\Api\v2\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Exception, DB;
use Modules\OpenAI\Entities\Archive;
use Modules\OpenAI\Http\Requests\v2\ImageStoreRequest;
use Modules\OpenAI\Services\v2\ImageService;
use Modules\OpenAI\Transformers\Api\v2\Image\ImageReplyResources;

class ImageController extends Controller
{
    /**
     * @var $imageService The instance of the chat service.
     */
    protected $imageService;

    public function __construct()
    {
        $this->imageService = new ImageService();
    }

    /**
     * Store a newly created image in the storage.
     *
     * @param  \App\Http\Requests\ImageStoreRequest  $request
     * @return \Illuminate\Http\JsonResponse
     *
     * @throws \Exception if storing the image fails
     */
    public function store(ImageStoreRequest $request)
    {
        $validatedRequest = $request->validated();
        $optionRequest['options'] = $request->except(['_token', 'prompt', 'provider']);
        $request = array_merge($validatedRequest, $optionRequest);
        $request['options']['file'] = request('file') ?? null;
        $cleanedString = preg_replace('/[^A-Za-z0-9\s]/', '', $request['prompt']);
        $request['prompt'] = filteringBadWords($cleanedString);
        $request['parent_id'] = Archive::where(['id' => request('parent_id'), 'type' => 'image'])->first() ? request('parent_id')  : null;

        try {
            $images = new ImageReplyResources($this->imageService->store($request));
            return response()->json(['data' => $images], Response::HTTP_CREATED);
        } catch (Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], $e->getCode() ?: Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }

    /**
     * Remove the specified image from storage.
     *
     * @param  int  $imageId  The ID of the image to be deleted.
     * @return \Illuminate\Http\JsonResponse
     *
     * @throws \Exception if deletion fails.
     */
    public function destroy($imageId)
    {
        if (! is_numeric($imageId)) {
            return response()->json(['error' => __('Invalid Request.')], Response::HTTP_FORBIDDEN);
        }

        DB::beginTransaction();

        try {

            $this->imageService->delete(['id' => $imageId]);
            DB::commit();
            return response()->json(['message' => __('The :x has been successfully deleted.', ['x' => __('Image')])] , Response::HTTP_OK);

        } catch (Exception $e) {

            DB::rollBack();
            return response()->json([
                'error' => $e->getMessage()
            ], $e->getCode() ?: Response::HTTP_INTERNAL_SERVER_ERROR);
            
        }
    }
}
