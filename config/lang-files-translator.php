<?php

return [
    /*
    |--------------------------------------------------------------------------
    | OpenAI Configuration
    |--------------------------------------------------------------------------
    |
    | Configure OpenAI API settings for translation when using OpenAI provider
    |
    */
    'chatgpt' => [
        'api_key' => env('OPENAI_API_KEY'),
        'temperature' => 0.3, // Controls translation creativity (0.0 = precise, 1.0 = creative)
    ],
];
