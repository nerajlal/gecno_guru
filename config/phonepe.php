<?php
return [
    'merchant_id' => env('PHONEPE_CLIENT_ID'),
    'salt_key' => env('PHONEPE_CLIENT_SECRET'),
    'salt_index' => env('PHONEPE_CLIENT_VERSION'),
    'env' => env('PHONEPE_ENV', 'UAT'), // Default to UAT
];

