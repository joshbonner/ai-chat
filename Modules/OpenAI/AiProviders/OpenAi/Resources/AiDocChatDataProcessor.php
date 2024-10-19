<?php

namespace Modules\OpenAI\AiProviders\OpenAi\Resources;

use Str;

class AiDocChatDataProcessor
{
    private $data = [];

    /**
     * Constructor for the AiDocChatDataProcessor class.
     * Initializes the data property with the provided AI options.
     *
     * @param array $aiOptions The AI options to initialize the data property.
     */
    public function __construct(array $aiOptions = [])
    {
        $this->data = $aiOptions;
    }

    /**
     * Returns an array of options for OpenAI Provider.
     *
     * @return array The array of AI document chat options.
     */
    public function aiDocChatOptions(): array
    {
        return [
            [
                'type' => 'checkbox',
                'label' => 'Provider State',
                'name' => 'status',
                'value' => 'on',
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
                    'gpt-4-1106-preview',
                    'gpt-4-0125-preview',
                    'gpt-4',
                    'gpt-3.5-turbo',
                    'gpt-3.5-turbo-16k',
                    'gpt-3.5-turbo-1106',
                    'gpt-3.5-turbo-0125',
                ],
                'required' => true
            ],
            [
                'type' => 'dropdown',
                'label' => 'Temperature',
                'name' => 'temperature',
                'value' => [
                    0, 0.5, 1, 1.5, 2
                ],
                'default_value' => 1,
            ],
            [
                'type' => 'number',
                'label' => 'Max Tokens',
                'name' => 'max_tokens',
                'min' => 1,
                'max' => 4096,
                'value' => 2048,
                'visibility' => true,
                'required' => true
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
        return [
            'max_tokens' => 'required|integer|min:1|max:4096',
        ];
    }

    /**
     * Returns an array of AI doc chat data options.
     *
     * @return array The array containing the model and input data options.
     */
    public  function aiDocChatDataOptions(): array
    {
        return [
            'model' => data_get($this->data, 'embedding_model', 'text-embedding-ada-002'),
            'input' => $this->data['text']
        ];
    }

    /**
     * Returns a prompt for asking a question, filtering out bad words.
     *
     * @return string The prompt for asking a question with bad words filtered out.
     */
    public function askQuestionPrompt(): string
    {
        $context = data_get($this->data, 'context', '');
        $language = data_get($this->data, 'language', null);
        $tone = data_get($this->data, 'tone', null);
        $commonText = 'Generate response based on';
        $string = ' ';
        if ($language && $tone) {
            $string .= "{$commonText} {$language} language and in {$tone} tone.";
        } elseif ($language) {
            $string .= "{$commonText} {$language} language.";
        } elseif ($tone) {
            $string .= "{$commonText} {$tone} tone.";
        }
        $prompt = "Based on the provided context, respond to the user's query within the scope of '{$context}' and the appended string. If the context doesn't contain enough information to answer, respond with 'I’m sorry, but I don't have this information.' and avoid generating unrelated content. `{$string}`";
        return filteringBadWords($prompt);
    }

    /**
     * Returns an array of options for asking a question.
     *
     * @return array
     */
    public function askQuestionDataOptions(): array
    {
        return [
            'model' => data_get($this->data, 'chat_model','gpt-4'),
            'messages' => [
                ['role' => 'system', 'content' => $this->askQuestionPrompt()],
                ['role' => 'user', 'content' => $this->data['prompt']],
            ],
            "temperature" => isset($this->data['temperature']) ? (int) $this->data['temperature'] : 1,
            "max_tokens" => maxToken('aidocchat_openai'), // Note: will be dynamic

        ];
    }

    /**
     * Returns the options for asking a question by delegating to the askQuestionDataOptions method.
     *
     * @return array The options for asking a question.
     */
    public function askQuestionOptions(): array
    {
        return $this->askQuestionDataOptions();
    }

}