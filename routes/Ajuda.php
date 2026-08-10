<?php

declare(strict_types=1);

use App\Controllers\Site\ajudaController;

return [
    [
        'method' => 'GET',
        'path' => '/ajuda',
        'action' => [
            ajudaController::class,
            'index',
        ],
    ],
];
