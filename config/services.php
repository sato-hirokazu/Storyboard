<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
        ],
    ],

    /**
     * socialite Settings
    */
    'github' => [
        'client_id' => env('GITHUB_CLIENT_ID'),         // GitHubのClient ID
        'client_secret' => env('GITHUB_CLIENT_SECRET'), // GitHubのClient Secret
        'redirect' => 'http://localhost:8088/login/github',
    ],
    'twitter' => [
      'client_id'     => env('TWITTER_API_KEY'),
      'client_secret' => env('TWITTER_API_SECRET'),
      'redirect'      => env('TWITTER_CALLBACKURL'),
    ],

    'facebook' => [
      'client_id'     => env('FACEBOOK_API_ID'),
      'client_secret' => env('FACEBOOK_API_SECRET'),
      'redirect'      => env('FACEBOOK_CALLBACKURL'),
    ],

    'google' => [
      'client_id'     => env('GOOGLEPLUS_API_ID'),
      'client_secret' => env('GOOGLEPLUS_API_SECRET'),
      'redirect'      => env('GOOGLEPLUS_CALLBACKURL'),
    ],

];
