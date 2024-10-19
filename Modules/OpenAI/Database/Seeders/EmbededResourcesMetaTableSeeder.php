<?php

namespace Modules\OpenAI\Database\Seeders;

use Illuminate\Database\Seeder;

class EmbededResourcesMetaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('embeded_resources_meta')->delete();
        
        \DB::table('embeded_resources_meta')->insert(array (
            0 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 1,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Untrained',
            ),
            1 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 1,
                'type' => 'integer',
                'key' => 'words',
                'value' => '334',
            ),
            2 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 1,
                'type' => 'string',
                'key' => 'last_trained',
                'value' => 'N\\A',
            ),
            3 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 1,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => '0d095a6383a04d9',
            ),
            4 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 2,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Untrained',
            ),
            5 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 2,
                'type' => 'integer',
                'key' => 'words',
                'value' => '99',
            ),
            6 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 2,
                'type' => 'string',
                'key' => 'last_trained',
                'value' => 'N\\A',
            ),
            7 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 2,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => '0d095a6383a04d9',
            ),
            8 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 3,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Trained',
            ),
            9 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 3,
                'type' => 'integer',
                'key' => 'words',
                'value' => '17',
            ),
            10 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 3,
                'type' => 'datetime',
                'key' => 'last_trained',
                'value' => '2024-10-14 05:51:28',
            ),
            11 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 3,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => '0d095a6383a04d9',
            ),
            12 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 4,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Untrained',
            ),
            13 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 4,
                'type' => 'integer',
                'key' => 'words',
                'value' => '187',
            ),
            14 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 4,
                'type' => 'string',
                'key' => 'last_trained',
                'value' => 'N\\A',
            ),
            15 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 4,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => '0d095a6383a04d9',
            ),
            16 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 5,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Trained',
            ),
            17 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 5,
                'type' => 'integer',
                'key' => 'words',
                'value' => '320',
            ),
            18 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 5,
                'type' => 'datetime',
                'key' => 'last_trained',
                'value' => '2024-10-14 05:51:30',
            ),
            19 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 5,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => '0d095a6383a04d9',
            ),
            20 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 6,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Untrained',
            ),
            21 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 6,
                'type' => 'integer',
                'key' => 'words',
                'value' => '213',
            ),
            22 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 6,
                'type' => 'string',
                'key' => 'last_trained',
                'value' => 'N\\A',
            ),
            23 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 6,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => '0d095a6383a04d9',
            ),
            24 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 7,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Trained',
            ),
            25 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 7,
                'type' => 'integer',
                'key' => 'words',
                'value' => '294',
            ),
            26 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 7,
                'type' => 'datetime',
                'key' => 'last_trained',
                'value' => '2024-10-14 05:51:33',
            ),
            27 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 7,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => '0d095a6383a04d9',
            ),
            28 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 8,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Untrained',
            ),
            29 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 8,
                'type' => 'integer',
                'key' => 'words',
                'value' => '383',
            ),
            30 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 8,
                'type' => 'string',
                'key' => 'last_trained',
                'value' => 'N\\A',
            ),
            31 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 8,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => '0d095a6383a04d9',
            ),
            32 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 9,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Untrained',
            ),
            33 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 9,
                'type' => 'integer',
                'key' => 'words',
                'value' => '172',
            ),
            34 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 9,
                'type' => 'string',
                'key' => 'last_trained',
                'value' => 'N\\A',
            ),
            35 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 9,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => '0d095a6383a04d9',
            ),
            36 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 10,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Untrained',
            ),
            37 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 10,
                'type' => 'integer',
                'key' => 'words',
                'value' => '136',
            ),
            38 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 10,
                'type' => 'string',
                'key' => 'last_trained',
                'value' => 'N\\A',
            ),
            39 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 10,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => '0d095a6383a04d9',
            ),
            40 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 11,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Untrained',
            ),
            41 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 11,
                'type' => 'integer',
                'key' => 'words',
                'value' => '223',
            ),
            42 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 11,
                'type' => 'string',
                'key' => 'last_trained',
                'value' => 'N\\A',
            ),
            43 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 11,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => '0d095a6383a04d9',
            ),
            44 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 12,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Untrained',
            ),
            45 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 12,
                'type' => 'integer',
                'key' => 'words',
                'value' => '139',
            ),
            46 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 12,
                'type' => 'string',
                'key' => 'last_trained',
                'value' => 'N\\A',
            ),
            47 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 12,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => '0d095a6383a04d9',
            ),
            48 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 13,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Untrained',
            ),
            49 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 13,
                'type' => 'integer',
                'key' => 'words',
                'value' => '229',
            ),
            50 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 13,
                'type' => 'string',
                'key' => 'last_trained',
                'value' => 'N\\A',
            ),
            51 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 13,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => '0d095a6383a04d9',
            ),
            52 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 14,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Untrained',
            ),
            53 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 14,
                'type' => 'integer',
                'key' => 'words',
                'value' => '644',
            ),
            54 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 14,
                'type' => 'string',
                'key' => 'last_trained',
                'value' => 'N\\A',
            ),
            55 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 14,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => '0d095a6383a04d9',
            ),
            56 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 15,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Untrained',
            ),
            57 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 15,
                'type' => 'integer',
                'key' => 'words',
                'value' => '394',
            ),
            58 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 15,
                'type' => 'string',
                'key' => 'last_trained',
                'value' => 'N\\A',
            ),
            59 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 15,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => '0d095a6383a04d9',
            ),
            60 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 16,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Untrained',
            ),
            61 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 16,
                'type' => 'integer',
                'key' => 'words',
                'value' => '687',
            ),
            62 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 16,
                'type' => 'string',
                'key' => 'last_trained',
                'value' => 'N\\A',
            ),
            63 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 16,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => '0d095a6383a04d9',
            ),
            64 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 17,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Untrained',
            ),
            65 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 17,
                'type' => 'integer',
                'key' => 'words',
                'value' => '982',
            ),
            66 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 17,
                'type' => 'string',
                'key' => 'last_trained',
                'value' => 'N\\A',
            ),
            67 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 17,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => '0d095a6383a04d9',
            ),
            68 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 18,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Untrained',
            ),
            69 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 18,
                'type' => 'integer',
                'key' => 'words',
                'value' => '185',
            ),
            70 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 18,
                'type' => 'string',
                'key' => 'last_trained',
                'value' => 'N\\A',
            ),
            71 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 18,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => '0d095a6383a04d9',
            ),
            72 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 19,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Untrained',
            ),
            73 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 19,
                'type' => 'integer',
                'key' => 'words',
                'value' => '898',
            ),
            74 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 19,
                'type' => 'string',
                'key' => 'last_trained',
                'value' => 'N\\A',
            ),
            75 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 19,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => '0d095a6383a04d9',
            ),
            76 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 20,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Untrained',
            ),
            77 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 20,
                'type' => 'integer',
                'key' => 'words',
                'value' => '298',
            ),
            78 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 20,
                'type' => 'string',
                'key' => 'last_trained',
                'value' => 'N\\A',
            ),
            79 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 20,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => '0d095a6383a04d9',
            ),
            80 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 21,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Untrained',
            ),
            81 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 21,
                'type' => 'integer',
                'key' => 'words',
                'value' => '289',
            ),
            82 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 21,
                'type' => 'string',
                'key' => 'last_trained',
                'value' => 'N\\A',
            ),
            83 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 21,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => '0d095a6383a04d9',
            ),
            84 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 22,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Untrained',
            ),
            85 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 22,
                'type' => 'integer',
                'key' => 'words',
                'value' => '331',
            ),
            86 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 22,
                'type' => 'string',
                'key' => 'last_trained',
                'value' => 'N\\A',
            ),
            87 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 22,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => '0d095a6383a04d9',
            ),
            88 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 23,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Trained',
            ),
            89 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 23,
                'type' => 'integer',
                'key' => 'words',
                'value' => '28',
            ),
            90 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 23,
                'type' => 'datetime',
                'key' => 'last_trained',
                'value' => '2024-10-14 05:53:09',
            ),
            91 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 23,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => '0d095a6383a04d9',
            ),
            92 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 24,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Untrained',
            ),
            93 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 24,
                'type' => 'integer',
                'key' => 'words',
                'value' => '476',
            ),
            94 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 24,
                'type' => 'string',
                'key' => 'last_trained',
                'value' => 'N\\A',
            ),
            95 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 24,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => '0d095a6383a04d9',
            ),
            96 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 25,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Trained',
            ),
            97 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 25,
                'type' => 'integer',
                'key' => 'words',
                'value' => '390',
            ),
            98 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 25,
                'type' => 'datetime',
                'key' => 'last_trained',
                'value' => '2024-10-14 05:53:12',
            ),
            99 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 25,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => '0d095a6383a04d9',
            ),
            100 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 26,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Trained',
            ),
            101 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 26,
                'type' => 'integer',
                'key' => 'words',
                'value' => '622',
            ),
            102 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 26,
                'type' => 'datetime',
                'key' => 'last_trained',
                'value' => '2024-10-14 05:53:16',
            ),
            103 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 26,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => '0d095a6383a04d9',
            ),
            104 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 27,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Trained',
            ),
            105 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 27,
                'type' => 'integer',
                'key' => 'words',
                'value' => '0',
            ),
            106 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 27,
                'type' => 'datetime',
                'key' => 'last_trained',
                'value' => '2024-10-14 05:53:16',
            ),
            107 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 27,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => '0d095a6383a04d9',
            ),
            108 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 3,
                'type' => 'integer',
                'key' => 'usages',
                'value' => '18',
            ),
            109 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 3,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            110 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 3,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
            111 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 5,
                'type' => 'integer',
                'key' => 'usages',
                'value' => '417',
            ),
            112 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 5,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            113 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 5,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
            114 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 7,
                'type' => 'integer',
                'key' => 'usages',
                'value' => '338',
            ),
            115 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 7,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            116 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 7,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
            117 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 23,
                'type' => 'integer',
                'key' => 'usages',
                'value' => '31',
            ),
            118 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 23,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            119 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 23,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
            120 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 25,
                'type' => 'integer',
                'key' => 'usages',
                'value' => '450',
            ),
            121 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 25,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            122 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 25,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
            123 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 26,
                'type' => 'integer',
                'key' => 'usages',
                'value' => '840',
            ),
            124 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 26,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            125 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 26,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
            126 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 27,
                'type' => 'integer',
                'key' => 'usages',
                'value' => '0',
            ),
            127 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 27,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            128 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 27,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
            129 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 39,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Trained',
            ),
            130 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 39,
                'type' => 'integer',
                'key' => 'words',
                'value' => '334',
            ),
            131 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 39,
                'type' => 'datetime',
                'key' => 'last_trained',
                'value' => '2024-10-14 06:11:41',
            ),
            132 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 39,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => 'da8014cec628484',
            ),
            133 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 40,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Trained',
            ),
            134 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 40,
                'type' => 'integer',
                'key' => 'words',
                'value' => '81',
            ),
            135 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 40,
                'type' => 'datetime',
                'key' => 'last_trained',
                'value' => '2024-10-14 06:11:43',
            ),
            136 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 40,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => 'da8014cec628484',
            ),
            137 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 41,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Trained',
            ),
            138 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 41,
                'type' => 'integer',
                'key' => 'words',
                'value' => '185',
            ),
            139 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 41,
                'type' => 'datetime',
                'key' => 'last_trained',
                'value' => '2024-10-14 06:11:44',
            ),
            140 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 41,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => 'da8014cec628484',
            ),
            141 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 42,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Untrained',
            ),
            142 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 42,
                'type' => 'integer',
                'key' => 'words',
                'value' => '1085',
            ),
            143 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 42,
                'type' => 'string',
                'key' => 'last_trained',
                'value' => 'N\\A',
            ),
            144 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 42,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => 'da8014cec628484',
            ),
            145 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 43,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Untrained',
            ),
            146 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 43,
                'type' => 'integer',
                'key' => 'words',
                'value' => '431',
            ),
            147 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 43,
                'type' => 'string',
                'key' => 'last_trained',
                'value' => 'N\\A',
            ),
            148 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 43,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => 'da8014cec628484',
            ),
            149 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 44,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Trained',
            ),
            150 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 44,
                'type' => 'integer',
                'key' => 'words',
                'value' => '385',
            ),
            151 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 44,
                'type' => 'datetime',
                'key' => 'last_trained',
                'value' => '2024-10-14 06:13:06',
            ),
            152 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 44,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => 'da8014cec628484',
            ),
            153 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 45,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Trained',
            ),
            154 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 45,
                'type' => 'integer',
                'key' => 'words',
                'value' => '329',
            ),
            155 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 45,
                'type' => 'datetime',
                'key' => 'last_trained',
                'value' => '2024-10-14 06:13:08',
            ),
            156 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 45,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => 'da8014cec628484',
            ),
            157 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 46,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Untrained',
            ),
            158 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 46,
                'type' => 'integer',
                'key' => 'words',
                'value' => '147',
            ),
            159 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 46,
                'type' => 'string',
                'key' => 'last_trained',
                'value' => 'N\\A',
            ),
            160 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 46,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => 'da8014cec628484',
            ),
            161 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 39,
                'type' => 'integer',
                'key' => 'usages',
                'value' => '453',
            ),
            162 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 39,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            163 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 39,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
            164 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 40,
                'type' => 'integer',
                'key' => 'usages',
                'value' => '109',
            ),
            165 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 40,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            166 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 40,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
            167 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 41,
                'type' => 'integer',
                'key' => 'usages',
                'value' => '203',
            ),
            168 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 41,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            169 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 41,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
            170 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 44,
                'type' => 'integer',
                'key' => 'usages',
                'value' => '431',
            ),
            171 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 44,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            172 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 44,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
            173 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 45,
                'type' => 'integer',
                'key' => 'usages',
                'value' => '371',
            ),
            174 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 45,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            175 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 45,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
            176 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 55,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Trained',
            ),
            177 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 55,
                'type' => 'integer',
                'key' => 'words',
                'value' => '523',
            ),
            178 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 55,
                'type' => 'datetime',
                'key' => 'last_trained',
                'value' => '2024-10-14 06:29:06',
            ),
            179 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 55,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => 'da8014cec628484',
            ),
            180 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 55,
                'type' => 'integer',
                'key' => 'size',
                'value' => '97979',
            ),
            181 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 55,
                'type' => 'string',
                'key' => 'file_name',
                'value' => '20241014\\645b4be3147ae40462a04b48042cb157.pdf',
            ),
            182 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 55,
                'type' => 'string',
                'key' => 'extension',
                'value' => 'pdf',
            ),
            183 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 55,
                'type' => 'integer',
                'key' => 'usages',
                'value' => '4131',
            ),
            184 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 55,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            185 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 55,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
            186 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 57,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Untrained',
            ),
            187 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 57,
                'type' => 'integer',
                'key' => 'words',
                'value' => '92',
            ),
            188 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 57,
                'type' => 'string',
                'key' => 'last_trained',
                'value' => 'N\\A',
            ),
            189 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 57,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => 'da8014cec628484',
            ),
            190 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 58,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Untrained',
            ),
            191 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 58,
                'type' => 'integer',
                'key' => 'words',
                'value' => '81',
            ),
            192 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 58,
                'type' => 'string',
                'key' => 'last_trained',
                'value' => 'N\\A',
            ),
            193 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 58,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => 'da8014cec628484',
            ),
            194 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 59,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Untrained',
            ),
            195 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 59,
                'type' => 'integer',
                'key' => 'words',
                'value' => '185',
            ),
            196 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 59,
                'type' => 'string',
                'key' => 'last_trained',
                'value' => 'N\\A',
            ),
            197 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 59,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => 'da8014cec628484',
            ),
            198 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 60,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Untrained',
            ),
            199 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 60,
                'type' => 'integer',
                'key' => 'words',
                'value' => '1085',
            ),
            200 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 60,
                'type' => 'string',
                'key' => 'last_trained',
                'value' => 'N\\A',
            ),
            201 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 60,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => 'da8014cec628484',
            ),
            202 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 61,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Trained',
            ),
            203 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 61,
                'type' => 'integer',
                'key' => 'words',
                'value' => '96',
            ),
            204 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 61,
                'type' => 'datetime',
                'key' => 'last_trained',
                'value' => '2024-10-14 06:39:52',
            ),
            205 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 61,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => '0d095a6383a04d9',
            ),
            206 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 61,
                'type' => 'integer',
                'key' => 'size',
                'value' => '58817',
            ),
            207 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 61,
                'type' => 'string',
                'key' => 'file_name',
                'value' => '20241014\\cd10d5661f787d313d8649f7336aef9b.pdf',
            ),
            208 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 61,
                'type' => 'string',
                'key' => 'extension',
                'value' => 'pdf',
            ),
            209 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 61,
                'type' => 'integer',
                'key' => 'usages',
                'value' => '759',
            ),
            210 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 61,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            211 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 61,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
            212 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 63,
                'type' => 'string',
                'key' => 'state',
                'value' => 'Trained',
            ),
            213 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 63,
                'type' => 'integer',
                'key' => 'words',
                'value' => '57',
            ),
            214 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 63,
                'type' => 'datetime',
                'key' => 'last_trained',
                'value' => '2024-10-14 06:45:41',
            ),
            215 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 63,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => '0d095a6383a04d9',
            ),
            216 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 63,
                'type' => 'integer',
                'key' => 'size',
                'value' => '61924',
            ),
            217 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 63,
                'type' => 'string',
                'key' => 'file_name',
                'value' => '20241014\\9365d474f03e1f3d092188a9ee48caf9.pdf',
            ),
            218 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 63,
                'type' => 'string',
                'key' => 'extension',
                'value' => 'pdf',
            ),
            219 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 63,
                'type' => 'integer',
                'key' => 'usages',
                'value' => '361',
            ),
            220 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 63,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            221 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\EmbededResource',
                'owner_id' => 63,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
        ));
        
        
    }
}
