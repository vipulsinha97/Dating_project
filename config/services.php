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

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    'facebook' => [
        'client_id' => '970832964906200',
        'client_secret' => '395d93bc0b6d424f96c660138f95f3f4',
        'redirect' => 'https://notjustswipe.com/facebook/callback',
    ],

    'linkedin-openid' => [
        'client_id' => '86glcfhj82vd0z',
        'client_secret' => 'WPL_AP1.yKzUQfdwlWRWMN6Q.PQQwZA==',
        'redirect' => 'https://notjustswipe.com/linkedin/callback',
    ],

    'insta' => [
        'client_id' => '589059930152184',
        'client_secret' => '1c05e4f6c8ec41a8b699729f4fb27816',
        'redirect' => 'https://notjustswipe.com/insta/callback',
    ],
];
