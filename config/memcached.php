<?php

return [
    'servers' => [
        'primary' => [
            'host' => env('MEMCACHED_PRIMARY_HOST', '127.0.0.1'),
            'port' => env('MEMCACHED_PRIMARY_PORT', 11211),
            'weight' => 100
        ],
        'backup' => [
            'host' => env('MEMCACHED_BACKUP_HOST', '127.0.0.2'),
            'port' => env('MEMCACHED_BACKUP_PORT', 11211),
            'weight' => 100
        ],
    ],
    'ttl' => 300
];