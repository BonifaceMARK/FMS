<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '1075446469724-m7i67jq8chf7c3aqo7cu5nqmu9ocrjr0.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/auth/google/callback',
    ],

    // 'google' => [
    //     'client_id' => '1075446469724-sqembn4cadr3k550lv04tobh912cv3rd.apps.googleusercontent.com',
    //     'client_secret' => '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',
    //     'redirect' => 'https://fms10-vaims.fguardians-fms.com/auth/google/callback',
    // ],
    

];
