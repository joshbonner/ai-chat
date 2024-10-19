<?php

namespace Modules\OpenAI\Database\Seeders;

use Illuminate\Database\Seeder;

class ChatBotsMetaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chat_bots_meta')->delete();
        
        \DB::table('chat_bots_meta')->insert(array (
            0 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\ChatBot',
                'owner_id' => 2,
                'type' => 'string',
                'key' => 'description',
                'value' => 'What brings you here today? Feel free to ask anything about Artifism.',
            ),
            1 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\ChatBot',
                'owner_id' => 2,
                'type' => 'string',
                'key' => 'theme_color',
                'value' => '#5707cf',
            ),
            2 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\ChatBot',
                'owner_id' => 2,
                'type' => 'string',
                'key' => 'language',
                'value' => 'English',
            ),
            3 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\ChatBot',
                'owner_id' => 2,
                'type' => 'boolean',
                'key' => 'brand',
                'value' => '1',
            ),
            4 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\ChatBot',
                'owner_id' => 2,
                'type' => 'string',
                'key' => 'provider',
                'value' => 'openai',
            ),
            5 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\ChatBot',
                'owner_id' => 2,
                'type' => 'string',
                'key' => 'model',
                'value' => 'gpt-4o-mini',
            ),
            6 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\ChatBot',
                'owner_id' => 2,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            7 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\ChatBot',
                'owner_id' => 2,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
            8 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\ChatBot',
                'owner_id' => 2,
                'type' => 'array',
                'key' => 'image',
                'value' => '{"url":"public\\\\uploads\\\\20241014\\\\e1a9ac611e42ead83df762febf64fbc9.png","is_delete":true}',
            ),
            9 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\ChatBot',
                'owner_id' => 2,
                'type' => 'string',
                'key' => 'script_code',
                'value' => '<script src="' . url('Modules/Chatbot/Resources/assets/js/chatbot-widget.min.js') . '" data-iframe-src="' . url('chatbot/embed/chatbot_code=0d095a6383a04d9/welcome') . '" data-iframe-height="532" data-iframe-width="400"></script>',

            ),
            10 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\ChatBot',
                'owner_id' => 3,
                'type' => 'string',
                'key' => 'description',
                'value' => 'A simple and powerful chatbot platform for automating customer queries and providing updates on MartVill.',
            ),
            11 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\ChatBot',
                'owner_id' => 3,
                'type' => 'string',
                'key' => 'theme_color',
                'value' => '#e22861',
            ),
            12 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\ChatBot',
                'owner_id' => 3,
                'type' => 'string',
                'key' => 'language',
                'value' => 'English',
            ),
            13 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\ChatBot',
                'owner_id' => 3,
                'type' => 'boolean',
                'key' => 'brand',
                'value' => '1',
            ),
            14 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\ChatBot',
                'owner_id' => 3,
                'type' => 'string',
                'key' => 'provider',
                'value' => 'openai',
            ),
            15 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\ChatBot',
                'owner_id' => 3,
                'type' => 'string',
                'key' => 'model',
                'value' => 'gpt-4o-mini',
            ),
            16 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\ChatBot',
                'owner_id' => 3,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            17 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\ChatBot',
                'owner_id' => 3,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
            18 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\ChatBot',
                'owner_id' => 3,
                'type' => 'array',
                'key' => 'image',
                'value' => '{"url":"public\\\\uploads\\\\20241014\\\\6f8ea9cf49b6df615933870b735e186d.png","is_delete":true}',
            ),
            19 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\ChatBot',
                'owner_id' => 3,
                'type' => 'string',
                'key' => 'script_code',
                'value' => '<script src="' . url('Modules/Chatbot/Resources/assets/js/chatbot-widget.min.js') . '" data-iframe-src="' . url('chatbot/embed/chatbot_code=da8014cec628484/welcome') . '" data-iframe-height="532" data-iframe-width="400"></script>',
            ),
            20 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\ChatBot',
                'owner_id' => 4,
                'type' => 'string',
                'key' => 'description',
                'value' => 'Helps businesses manage customer conversations, track orders, and handle inquiries seamlessly via chatbot.',
            ),
            21 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\ChatBot',
                'owner_id' => 4,
                'type' => 'string',
                'key' => 'theme_color',
                'value' => '#9163dd',
            ),
            22 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\ChatBot',
                'owner_id' => 4,
                'type' => 'string',
                'key' => 'language',
                'value' => 'English',
            ),
            23 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\ChatBot',
                'owner_id' => 4,
                'type' => 'boolean',
                'key' => 'brand',
                'value' => '1',
            ),
            24 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\ChatBot',
                'owner_id' => 4,
                'type' => 'string',
                'key' => 'provider',
                'value' => 'openai',
            ),
            25 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\ChatBot',
                'owner_id' => 4,
                'type' => 'string',
                'key' => 'model',
                'value' => 'gpt-4o-mini',
            ),
            26 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\ChatBot',
                'owner_id' => 4,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            27 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\ChatBot',
                'owner_id' => 4,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
            28 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\ChatBot',
                'owner_id' => 4,
                'type' => 'array',
                'key' => 'image',
                'value' => '{"url":"public\\\\uploads\\\\20241014\\\\b57d02feea49eb001776a08d78ca274a.png","is_delete":true}',
            ),
            29 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\ChatBot',
                'owner_id' => 4,
                'type' => 'string',
                'key' => 'script_code',
                'value' => '<script src=\'http://localhost/ai-backup/Modules/Chatbot/Resources/assets/js/chatbot-widget.min.js\'  data-iframe-src="http://localhost/ai-backup/chatbot/embed/chatbot_code=10177852e966425/welcome" data-iframe-height="532" data-iframe-width="400"></script>',
            ),
        ));
        
        
    }
}
