<?php
return [
    'client_id' => env('PHONEPE_CLIENT_ID'),
    'client_secret' => env('PHONEPE_CLIENT_SECRET'),
    'client_version' => env('PHONEPE_CLIENT_VERSION', 1),
    'env' => env('PHONEPE_ENV', 'UAT'), // Default to UAT
];
