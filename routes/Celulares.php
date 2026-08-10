<?php

declare(strict_types=1);

use App\Controllers\Site\CelularesController;

return [
    [
        'method' => 'GET',
        'path' => '/celulares',
        'action' => [
            CelularesController::class,
            'index',
        ],
    ],
];
