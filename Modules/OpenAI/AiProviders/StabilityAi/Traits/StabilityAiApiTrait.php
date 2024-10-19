<?php

namespace Modules\OpenAI\AiProviders\StabilityAi\Traits;

trait StabilityAiApiTrait
{
    private $baseUrl = 'https://api.stability.ai';
    private $version = 'v1';

    public function aiKey()
    {
        return apiKey('stablediffusion');
    }

    public function url(string $service): string
    {
        return $this->baseUrl . '/' . $this->version . '/generation/' . $this->processedData['model'] . '/' . $service; 
    }

    public function images()
    {
        $postField = $this->getPostField();

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->url($this->processedData['service']),
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 60,
            CURLOPT_SSL_VERIFYHOST => config('openAI.ssl_verify_host'),
            CURLOPT_SSL_VERIFYPEER => config('openAI.ssl_verify_peer'),
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            
            CURLOPT_POSTFIELDS => $postField,
            CURLOPT_HTTPHEADER => array(
                "Content-Type: " . ($this->processedData['service'] == 'text-to-image' ? "application/json" : "multipart/form-data"),
                "Authorization: Bearer " . $this->aiKey()
            ),
        ));
        
        $image = curl_exec($curl);
        $curlStatusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
        return [
            'code' => $curlStatusCode,
            'body' => $image, 
        ];

    }

    public function getPostField(): array|string
    {
        if ($this->processedData['service'] === 'text-to-image') {
            $jsonBody = [
                'text_prompts' => [
                    [
                        'text' => sprintf(
                            'Create an image based on this idea %s. The image should have a %s tone, with a %s art style and %s effects.',
                            $this->processedData['prompt'],
                            $this->processedData['tone'],
                            $this->processedData['art_style'],
                            $this->processedData['light_effect']
                        )
                    ]
                ],
                'cfg_scale' => 7,
                'clip_guidance_preset' => 'FAST_BLUE',
                'height' => (int) $this->processedData['height'],
                'width' => (int) $this->processedData['width'],
                'samples' => (int) $this->processedData['samples'], // Ensure samples is an integer
                'steps' => 30,
            ];
        
            return json_encode($jsonBody);
        } else {
            return [
                'text_prompts[0][text]' => sprintf(
                    '%s. The image should have a "%s" tone, with a "%s" art style and "%s" effects.',
                    $this->processedData['prompt'],
                    $this->processedData['tone'],
                    $this->processedData['art_style'],
                    $this->processedData['light_effect']
                ),
                'text_prompts[0][weight]' => 0.7,
                'init_image_mode' => 'IMAGE_STRENGTH',
                'image_strength' => 0.8,
                'cfg_scale' => 7,
                'clip_guidance_preset' => 'FAST_BLUE',
                'samples' => (int) $this->processedData['samples'], // Ensure samples is an integer
                'steps' => 30,
                'init_image' => $this->processedData['image_file'],
            ];
        }        
    }
}
