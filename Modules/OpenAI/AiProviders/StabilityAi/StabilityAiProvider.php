<?php

namespace Modules\OpenAI\AiProviders\StabilityAi;

use App\Lib\AiProvider;
use Modules\OpenAI\AiProviders\StabilityAi\Resources\ImageDataProcessor;
use Modules\OpenAI\AiProviders\StabilityAi\Responses\ImageResponse;
use Modules\OpenAI\AiProviders\StabilityAi\Traits\StabilityAiApiTrait;
use Modules\OpenAI\Contracts\Resources\ImageMakerContract;
use Modules\OpenAI\Contracts\Responses\ImageResponseContract;

class StabilityAiProvider extends AiProvider implements ImageMakerContract
{
    use StabilityAiApiTrait;

    protected $processedData;

    /**
     * Return the description of the AI provider.
     *
     * @return array An array containing the title, description, and image of the AI provider.
     */
    public function description(): array
    {
        return [
            'title' => 'Stability AI',
            'description' => __('Stability AI provides a suite of generative AI models, including Text to image and Image to image. These models are designed to be accessible and easy to use, with a focus on quality and realism. Stability AI also offers a platform for developers to build and deploy their own generative AI applications.'),
            'image' => 'Modules/OpenAI/Resources/assets/image/stability.png',
        ];
    }

    /**
     * Return the options for the image maker.
     *
     * @return array Options for the image maker.
     */
    public function imageMakerOptions(): array
    {
        return (new ImageDataProcessor())->imageOptions();
    }

    /**
     * Retrieve the validation rules for the current data processor.
     *
     * @return array An array of validation rules.
     */
    public function imageMakerRules(): array
    {
        return (new ImageDataProcessor)->rules();
    }

    /**
     * Generate an image using AI options.
     *
     * @param array $aiOptions An associative array of AI options to be used for image generation.
     * @return ImageResponseContract The generated image response.
     */
    public function generateImage(array $aiOptions): ImageResponseContract
    {
        $this->processedData = (new ImageDataProcessor($aiOptions))->imageData();
        return new ImageResponse($this->images());
    }

    /**
     * Get the validation rules for a specific processor.
     * 
     * @param string $processor The name of the data processor class.
     * 
     * @return array Validation rules for the processor.
     */
    public function getValidationRules(string $processor): array
    {
        $processorClass = "Modules\\OpenAI\\AiProviders\\StabilityAi\\Resources" . $processor;

        if (class_exists($processorClass)) {
            return (new $processorClass())->validationRules();
        }

        return [];
    }
}