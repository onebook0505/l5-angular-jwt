<?php

return [
    'defaults' => [
        'supportsCredentials' => false,
        'allowedOrigins' => [],
        'allowedHeaders' => [],
        'allowedMethods' => [],
        'exposedHeaders' => [],
        'maxAge' => 0,
        'hosts' => [],
    ],

    'paths' => [
        'v1/*' => [
            'allowedOrigins' => ['http://jwt.dev'],
            'allowedHeaders' => ['*'],
            'allowedMethods' => ['*'],
            'maxAge' => 3600,
        ],
    ],
];
