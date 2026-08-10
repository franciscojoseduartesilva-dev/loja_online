<?php

declare(strict_types=1);

use App\Controllers\Site\ofertasController;

return [
    [
        'method' => 'GET',
        'path' => '/ofertas',
        'action' => [
            ofertasController::class,
            'index',
        ],
    ],
];
