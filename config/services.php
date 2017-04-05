<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
 
    'facebook' => [
        'client_id'        => '839141396187343',
        'client_secret'    => '64dd63cb0144aad0571c62ec35865fff',
        'redirect'      => 'http://ican.zercomsystems.com/social/facebook/callback',
        ],
		
	'linkedin' => [
        'client_id' => '78h4mmmxaajld1',
        'client_secret' => 'OaFU9ccLwwj3DrA4',
        'redirect' => 'http://ican.zercomsystems.com/auth/linkedin/callback'
    ],

];
