<?php

namespace Modules\OpenAI\AiProviders\OpenAi\Resources;

use Str;

class ChatbotDataProcessor
{
    private $data = [];

    public function __construct(array $aiOptions = [])
    {
        $this->data = $aiOptions;
    }

    public function chatbotOptions(): array
    {
        return [
            [
                'type' => 'checkbox',
                'label' => 'Provider State',
                'name' => 'status',
                'value' => '',
            ],
            [
                'type' => 'text',
                'label' => 'Provider',
                'name' => 'provider',
                'value' => 'OpenAi'
            ],
            [
                'type' => 'dropdown',
                'label' => 'Models',
                'name' => 'model',
                'value' => [
                    'gpt-4o-mini',
                    'gpt-4o',
                    'gpt-4',
                    'gpt-3.5-turbo',
                ]
            ],
            
        ];
    }
    
    /**
     * Retrieve the validation rules for the current data processor.
     * 
     * @return array An array of validation rules.
     */
    public function validationRules()
    {
        return [];
    }
    /**
     * Returns a prompt for asking a question, filtering out bad words.
     *
     * @return string The prompt for asking a question with bad words filtered out.
     */
    public function askQuestionPrompt(): string
    {
        return filteringBadWords(
            "Utilize the provided context to respond to the user's query." . " " . $this->data['content'] . ". Generate response based on " . 
            (data_get($this->data, 'language', 'English') ) . " language and in " . (data_get($this->data, 'tone',  'Normal')) . " tone.
            Don't answer anything that is not relevant to the context. Instead, provide an answer you don't know anything rather than that context"
        );
    }
    /**
     * Returns an array of options for asking a question.
     *
     * @return array
     */
    public function askQuestionDataOptions(): array
    {
        return [
            'model' => $this->data['model'] ?? 'gpt-4',
            'messages' => [
                ['role' => 'system', 'content' => $this->askQuestionPrompt()],
                ['role' => 'user', 'content' => $this->data['prompt']],
            ],
            'temperature' => isset($this->data['temperature']) && $this->data['temperature'] ? (float) $this->data['temperature'] : 0.7,
            'max_tokens' => (int) maxToken('chatbot_openai')
        ];
    }
}
