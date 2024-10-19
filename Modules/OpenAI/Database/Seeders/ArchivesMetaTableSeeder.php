<?php

namespace Modules\OpenAI\Database\Seeders;

use Illuminate\Database\Seeder;

class ArchivesMetaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('archives_meta')->delete();
        
        \DB::table('archives_meta')->insert(array (
            0 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 16,
                'type' => 'string',
                'key' => 'visitor_id',
                'value' => 'V1728887434421',
            ),
            1 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 16,
                'type' => 'string',
                'key' => 'chat_model',
                'value' => 'gpt-4o-mini',
            ),
            2 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 16,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            3 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 16,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
            4 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 16,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => 'da8014cec628484',
            ),
            5 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 17,
                'type' => 'string',
                'key' => 'visitor_id',
                'value' => 'V1728887434421',
            ),
            6 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 17,
                'type' => 'string',
                'key' => 'visitor_reply',
                'value' => 'is menu builder available on martvill?',
            ),
            7 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 18,
                'type' => 'string',
                'key' => 'visitor_id',
                'value' => 'V1728887434421',
            ),
            8 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 18,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => 'da8014cec628484',
            ),
            9 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 18,
                'type' => 'string',
                'key' => 'chatbot_reply',
                'value' => 'Yes, Martvill includes a powerful Menu Builder feature that allows businesses to create and customize navigation menus for their e-commerce website. This feature offers flexibility in organizing website content, improving navigation, and enhancing the user experience for customers.',
            ),
            10 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 18,
                'type' => 'integer',
                'key' => 'total_words',
                'value' => '38',
            ),
            11 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 18,
                'type' => 'string',
                'key' => 'chat_model',
                'value' => 'gpt-4o-mini',
            ),
            12 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 18,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            13 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 18,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
            14 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 19,
                'type' => 'string',
                'key' => 'visitor_id',
                'value' => 'V1728887434421',
            ),
            15 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 19,
                'type' => 'string',
                'key' => 'visitor_reply',
                'value' => 'what are the product type in martvill?',
            ),
            16 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 20,
                'type' => 'string',
                'key' => 'visitor_id',
                'value' => 'V1728887434421',
            ),
            17 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 20,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => 'da8014cec628484',
            ),
            18 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 20,
                'type' => 'string',
                'key' => 'chatbot_reply',
                'value' => 'Martvill supports a wide range of product types, providing businesses with the flexibility to showcase and sell different types of products within their online store. These include simple physical products, grouped items, virtual goods, downloadable content, external/affiliate products, and products with variations. This versatility caters to diverse business needs.',
            ),
            19 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 20,
                'type' => 'integer',
                'key' => 'total_words',
                'value' => '50',
            ),
            20 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 20,
                'type' => 'string',
                'key' => 'chat_model',
                'value' => 'gpt-4o-mini',
            ),
            21 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 20,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            22 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 20,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
            23 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 21,
                'type' => 'string',
                'key' => 'visitor_id',
                'value' => 'V1728887434421',
            ),
            24 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 21,
                'type' => 'string',
                'key' => 'visitor_reply',
                'value' => 'What is Multiple Shipping Methods?',
            ),
            25 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 22,
                'type' => 'string',
                'key' => 'visitor_id',
                'value' => 'V1728887434421',
            ),
            26 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 22,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => 'da8014cec628484',
            ),
            27 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 22,
                'type' => 'string',
                'key' => 'chatbot_reply',
                'value' => 'Multiple Shipping Methods in Martvill allows businesses to offer various shipping options to customers during the checkout process. This feature includes choices such as flat-rate shipping, free shipping, and local pickup options. By providing multiple shipping methods, businesses can cater to different customer preferences and offer convenient and cost-effective shipping choices, enhancing the overall shopping experience.',
            ),
            28 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 22,
                'type' => 'integer',
                'key' => 'total_words',
                'value' => '56',
            ),
            29 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 22,
                'type' => 'string',
                'key' => 'chat_model',
                'value' => 'gpt-4o-mini',
            ),
            30 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 22,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            31 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 22,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
            32 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 23,
                'type' => 'string',
                'key' => 'visitor_id',
                'value' => 'V1728887434421',
            ),
            33 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 23,
                'type' => 'string',
                'key' => 'chat_model',
                'value' => 'gpt-4o-mini',
            ),
            34 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 23,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            35 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 23,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
            36 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 23,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => 'da8014cec628484',
            ),
            37 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 24,
                'type' => 'string',
                'key' => 'visitor_id',
                'value' => 'V1728887434421',
            ),
            38 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 24,
                'type' => 'string',
                'key' => 'visitor_reply',
                'value' => 'How to controll tax?',
            ),
            39 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 25,
                'type' => 'string',
                'key' => 'visitor_id',
                'value' => 'V1728887434421',
            ),
            40 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 25,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => 'da8014cec628484',
            ),
            41 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 25,
                'type' => 'string',
                'key' => 'chatbot_reply',
                'value' => 'Martvill provides robust tax management capabilities that allow businesses to have control over their taxes and ensure compliance with tax regulations. This feature enables businesses to configure and manage tax settings, apply taxes accurately to products, and generate comprehensive tax reports for financial and compliance purposes. By using these tools, businesses can effectively manage their tax obligations and maintain accurate records.',
            ),
            42 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 25,
                'type' => 'integer',
                'key' => 'total_words',
                'value' => '61',
            ),
            43 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 25,
                'type' => 'string',
                'key' => 'chat_model',
                'value' => 'gpt-4o-mini',
            ),
            44 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 25,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            45 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 25,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
            46 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 26,
                'type' => 'string',
                'key' => 'visitor_id',
                'value' => 'V1728887434421',
            ),
            47 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 26,
                'type' => 'string',
                'key' => 'visitor_reply',
                'value' => 'Coupon system available?',
            ),
            48 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 27,
                'type' => 'string',
                'key' => 'visitor_id',
                'value' => 'V1728887434421',
            ),
            49 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 27,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => 'da8014cec628484',
            ),
            50 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 27,
                'type' => 'string',
                'key' => 'chatbot_reply',
                'value' => 'Yes, Martvill offers a simplified coupon system that allows businesses to easily create and manage coupon codes. This feature helps attract customers, boost sales, and run promotional campaigns effectively.',
            ),
            51 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 27,
                'type' => 'integer',
                'key' => 'total_words',
                'value' => '29',
            ),
            52 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 27,
                'type' => 'string',
                'key' => 'chat_model',
                'value' => 'gpt-4o-mini',
            ),
            53 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 27,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            54 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 27,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
            55 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 28,
                'type' => 'string',
                'key' => 'visitor_id',
                'value' => 'V1728887434421',
            ),
            56 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 28,
                'type' => 'string',
                'key' => 'visitor_reply',
                'value' => 'How refund works?',
            ),
            57 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 29,
                'type' => 'string',
                'key' => 'visitor_id',
                'value' => 'V1728887434421',
            ),
            58 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 29,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => 'da8014cec628484',
            ),
            59 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 29,
                'type' => 'string',
                'key' => 'chatbot_reply',
                'value' => 'Martvill offers a seamless and efficient refund process designed to facilitate customer satisfaction and maintain a positive shopping experience. The refund feature allows businesses to handle refund requests, process returns, and provide timely reimbursements to customers. This ensures a fair and customer-centric approach to managing product returns. If customers have any specific questions regarding the refund policy or process, they should refer to the business’s individual refund policy or contact customer support for assistance.',
            ),
            60 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 29,
                'type' => 'integer',
                'key' => 'total_words',
                'value' => '75',
            ),
            61 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 29,
                'type' => 'string',
                'key' => 'chat_model',
                'value' => 'gpt-4o-mini',
            ),
            62 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 29,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            63 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 29,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
            64 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 46,
                'type' => 'string',
                'key' => 'visitor_id',
                'value' => 'V1728888074883',
            ),
            65 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 46,
                'type' => 'string',
                'key' => 'chat_model',
                'value' => 'gpt-4o-mini',
            ),
            66 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 46,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            67 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 46,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
            68 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 46,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => '0d095a6383a04d9',
            ),
            69 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 47,
                'type' => 'string',
                'key' => 'visitor_id',
                'value' => 'V1728888074883',
            ),
            70 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 47,
                'type' => 'string',
                'key' => 'visitor_reply',
                'value' => 'When i have to contact a hosting provider?',
            ),
            71 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 48,
                'type' => 'string',
                'key' => 'visitor_id',
                'value' => 'V1728888074883',
            ),
            72 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 48,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => '0d095a6383a04d9',
            ),
            73 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 48,
                'type' => 'string',
                'key' => 'chatbot_reply',
                'value' => 'You should contact your hosting provider in several situations, including:

1. **Website Downtime**: If your website is not accessible or experiencing outages.
2. **Technical Issues**: If you\'re facing problems with your website\'s performance, such as slow loading times or error messages.
3. **Billing Questions**: If you have inquiries or issues related to your billing or account status.
4. **Domain Issues**: If you\'re having trouble with domain registration, transfers, or DNS settings.
5. **Security Concerns**: If you suspect your website has been hacked or compromised.
6. **Upgrades or Changes**: If you need to upgrade your hosting plan or change your server settings.
7. **Email Problems**: If you\'re experiencing issues with your email hosting services.

It\'s always best to reach out to your hosting provider whenever you have questions or concerns regarding your website or hosting services.',
            ),
            74 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 48,
                'type' => 'integer',
                'key' => 'total_words',
                'value' => '128',
            ),
            75 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 48,
                'type' => 'string',
                'key' => 'chat_model',
                'value' => 'gpt-4o-mini',
            ),
            76 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 48,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            77 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 48,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
            78 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 49,
                'type' => 'string',
                'key' => 'visitor_id',
                'value' => 'V1728889105549',
            ),
            79 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 49,
                'type' => 'string',
                'key' => 'chat_model',
                'value' => 'gpt-4o-mini',
            ),
            80 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 49,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            81 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 49,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
            82 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 49,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => 'da8014cec628484',
            ),
            83 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 50,
                'type' => 'string',
                'key' => 'visitor_id',
                'value' => 'V1728889105549',
            ),
            84 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 50,
                'type' => 'string',
                'key' => 'visitor_reply',
                'value' => 'Is inventory management available?',
            ),
            85 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 51,
                'type' => 'string',
                'key' => 'visitor_id',
                'value' => 'V1728889105549',
            ),
            86 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 51,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => 'da8014cec628484',
            ),
            87 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 51,
                'type' => 'string',
                'key' => 'chatbot_reply',
                'value' => 'Yes, Martvill provides robust inventory management capabilities, allowing businesses to efficiently track, monitor, and manage their product inventory within the e-commerce platform. This feature helps maintain accurate stock levels, streamline fulfillment processes, and avoid stock-outs or overselling, ensuring a seamless shopping experience for customers.',
            ),
            88 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 51,
                'type' => 'integer',
                'key' => 'total_words',
                'value' => '44',
            ),
            89 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 51,
                'type' => 'string',
                'key' => 'chat_model',
                'value' => 'gpt-4o-mini',
            ),
            90 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 51,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            91 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 51,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
            92 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 52,
                'type' => 'string',
                'key' => 'visitor_id',
                'value' => 'V1728889105549',
            ),
            93 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 52,
                'type' => 'string',
                'key' => 'visitor_reply',
                'value' => 'Is shipping destinations is flexible there?',
            ),
            94 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 53,
                'type' => 'string',
                'key' => 'visitor_id',
                'value' => 'V1728889105549',
            ),
            95 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 53,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => 'da8014cec628484',
            ),
            96 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 53,
                'type' => 'string',
                'key' => 'chatbot_reply',
                'value' => 'Yes, Martvill offers businesses the flexibility to set up and manage shipping destinations. This allows them to define and customize shipping options for various regions and countries, catering to a diverse customer base.',
            ),
            97 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 53,
                'type' => 'integer',
                'key' => 'total_words',
                'value' => '33',
            ),
            98 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 53,
                'type' => 'string',
                'key' => 'chat_model',
                'value' => 'gpt-4o-mini',
            ),
            99 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 53,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            100 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 53,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
            101 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 54,
                'type' => 'string',
                'key' => 'visitor_id',
                'value' => 'V1728889105549',
            ),
            102 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 54,
                'type' => 'string',
                'key' => 'visitor_reply',
                'value' => 'Which Shipping Methods available?',
            ),
            103 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 55,
                'type' => 'string',
                'key' => 'visitor_id',
                'value' => 'V1728889105549',
            ),
            104 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 55,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => 'da8014cec628484',
            ),
            105 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 55,
                'type' => 'string',
                'key' => 'chatbot_reply',
                'value' => 'Martvill offers multiple shipping methods to cater to different customer preferences, including flat-rate shipping, free shipping, and local pickup options. This flexibility allows businesses to provide convenient and cost-effective shipping choices during the checkout process.',
            ),
            106 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 55,
                'type' => 'integer',
                'key' => 'total_words',
                'value' => '35',
            ),
            107 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 55,
                'type' => 'string',
                'key' => 'chat_model',
                'value' => 'gpt-4o-mini',
            ),
            108 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 55,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            109 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 55,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
            110 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 56,
                'type' => 'string',
                'key' => 'visitor_id',
                'value' => 'V1728889105549',
            ),
            111 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 56,
                'type' => 'string',
                'key' => 'visitor_reply',
                'value' => 'What if Shipping Zones is multiples?',
            ),
            112 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 57,
                'type' => 'string',
                'key' => 'visitor_id',
                'value' => 'V1728889105549',
            ),
            113 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 57,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => 'da8014cec628484',
            ),
            114 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 57,
                'type' => 'string',
                'key' => 'chatbot_reply',
                'value' => 'If shipping zones are multiple, Martvill allows businesses to create and manage these distinct shipping options and rates based on geographical regions. This feature enables businesses to customize shipping methods, prices, and delivery options for different zones, optimizing the shipping experience for customers according to their specific locations. By defining multiple shipping zones, businesses can cater to a diverse customer base and ensure accurate shipping costs are applied.',
            ),
            115 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 57,
                'type' => 'integer',
                'key' => 'total_words',
                'value' => '68',
            ),
            116 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 57,
                'type' => 'string',
                'key' => 'chat_model',
                'value' => 'gpt-4o-mini',
            ),
            117 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 57,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            118 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 57,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
            119 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 58,
                'type' => 'string',
                'key' => 'visitor_id',
                'value' => 'V1728889105549',
            ),
            120 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 58,
                'type' => 'string',
                'key' => 'visitor_reply',
                'value' => 'Is this SEO optimized?',
            ),
            121 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 59,
                'type' => 'string',
                'key' => 'visitor_id',
                'value' => 'V1728889105549',
            ),
            122 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 59,
                'type' => 'string',
                'key' => 'chatbot_code',
                'value' => 'da8014cec628484',
            ),
            123 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 59,
                'type' => 'string',
                'key' => 'chatbot_reply',
            'value' => 'Yes, Martvill is equipped with powerful search engine optimization (SEO) features designed to help businesses improve their website\'s visibility and attract organic traffic from search engines. This includes optimizing product pages, content, and overall website structure to rank higher in search engine results.',
            ),
            124 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 59,
                'type' => 'integer',
                'key' => 'total_words',
                'value' => '43',
            ),
            125 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 59,
                'type' => 'string',
                'key' => 'chat_model',
                'value' => 'gpt-4o-mini',
            ),
            126 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 59,
                'type' => 'string',
                'key' => 'embedding_provider',
                'value' => 'openai',
            ),
            127 => 
            array (
                'owner_type' => 'Modules\\OpenAI\\Entities\\Archive',
                'owner_id' => 59,
                'type' => 'string',
                'key' => 'embedding_model',
                'value' => 'text-embedding-ada-002',
            ),
        ));
        
        
    }
}
