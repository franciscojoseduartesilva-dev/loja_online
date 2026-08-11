<?php

declare(strict_types=1);

use App\Controllers\Site\EntrarController;

return [
    [
        'method' => 'GET',
        'path' => '/cliente/login',
        'action' => [
            EntrarController::class,
            'index',
        ],
    ],
];
