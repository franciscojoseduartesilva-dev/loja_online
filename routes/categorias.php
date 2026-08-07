<?php

declare(strict_types=1);

use App\Controllers\Site\categoriasController;

return [
    [
        'method' => 'GET',
        'path' => '/categorias',
        'action' => [
            categoriasController::class,
            'index',
        ],
    ],
];
