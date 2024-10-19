<?php

namespace Modules\Anthropic\Resources;


class ChatbotDataProcessor
{
    private $data = [];

    private $token = 1024;

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
                'visibility' => true
            ],
            [
                'type' => 'text',
                'label' => 'Provider',
                'name' => 'provider',
                'value' => 'Anthropic',
                'visibility' => true
            ],
            [
                'type' => 'dropdown',
                'label' => 'Models',
                'name' => 'model',
                'value' => [
                    'claude-3-opus-20240229',
                    'claude-3-sonnet-20240229',
                    'claude-3-haiku-20240307',
                    'claude-2.1',
                    'claude-2.0',
                    'claude-instant-1.2'
                ],
                'visibility' => true
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
        return [];
    }

    /**
     * Ask a question with streamed content.
     *
     * @param  mixed  $context
     * @return array|string
     */
    public function askQuestionToContent(): array|string
    {
        $system_template = "
        Use the following pieces of context to answer the user's question. 
        If you don't know the answer, just say that you don't know, don't try to make up an answer.
        ----------------
        {context}
        ";
 
        $system_prompt = str_replace('{context}', $this->data['content'], $system_template);

        return [
            'model' => $this->data['model'] ?? 'claude-3-sonnet-20240229',
            'messages' => [
                ['role' => 'user', 'content' => 'Hello!'],
                ['role' => 'assistant', 'content' => $system_prompt],
                ['role' => 'user', 'content' => $this->data['prompt']],
            ],
            'max_tokens' => $this->maxToken()
        ];
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
            ($this->data['language'] ?? 'English') . " language and in " . (isset($this->data['tone']) ? $this->data['tone'] : 'Normal') . " tone.
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
            'model' => $this->data['model'] ?? 'claude-3-sonnet-20240229',
            'messages' => [
                ['role' => 'user', 'content' => 'Hello!'],
                ['role' => 'assistant', 'content' => $this->askQuestionPrompt()],
                ['role' => 'user', 'content' => $this->data['prompt']],
            ],
            'max_tokens' => $this->maxToken()
        ];
    }

    /**
     * Retrieves the maximum tokens value based on anthropic settings.
     *
     * @return int The maximum tokens value.
     */
    public function maxToken(): int
    {
        $anthropicSettings = json_decode(preference('chatbot_anthropic'), true);
        if($anthropicSettings) {
            foreach ($anthropicSettings as $settings) {
                if ($settings['type'] == 'input' && $settings['name'] == 'max_tokens') {
                    return $settings['value'];
                }
            }
        }
        
        return $this->token;
    }
}
