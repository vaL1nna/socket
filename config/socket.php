<?php

return
[
    'default' => env('SOCKET_CONNECTION', 'default'),

    'connections' => [
        'default' => [
            'app_id' => env('SOCKET_APP_ID'),
            'app_secret' => env('SOCKET_APP_SECRET'),
            'host' => env('SOCKET_HOST')
        ],
    ]
];
