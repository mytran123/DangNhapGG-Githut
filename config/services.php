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

        'client_id' => '53734942646-8de0g210ckqf9vgd7i8det2sc7ba9f0s.apps.googleusercontent.com',

        'client_secret' => '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',

        'redirect' => 'http://127.0.0.1:8000/callback/google',

    ],

    'github' => [

        'client_id' => '723bcc404c3dd6a305c9',

        'client_secret' => '8d01635682483e656181873a4ebad61c018a8ddb',

        'redirect' => 'http://127.0.0.1:8000/callback/github',

    ],

];
