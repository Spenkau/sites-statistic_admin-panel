<?php

return [
    'preprod' => [
        'email' => env('API_PREPROD_EMAIL'),
        'password' => env('API_PREPROD_PASSWORD')
    ],
    'processing' => [
        'email' => env('API_PROCESSING_EMAIL'),
        'password' => env('API_PROCESSING_PASSWORD'),
    ]
];

//return [
//    'login' => [
//        'method' => 'GET',
//        'parameters' => ['email', 'password'],
//        'response' => [
//            'success' => [
//                'token_type' => 'Bearer',
//                'token' => null,
//                'error' => false,
//                'code' => 0
//            ],
//            'error' => [
//                "error" => true,
//                "code" => 1
//            ],
//        ],
//    ]
//];
