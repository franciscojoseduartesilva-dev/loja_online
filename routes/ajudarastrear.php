<?php

declare(strict_types=1);

use App\Controllers\Site\AjudaRastrearController;

return [
    [
        'method' => 'GET',
        'path' => '/rastrear-pedido',
        'action' => [
            AjudaRastrearController::class,
            'index',
        ],
    ],
];
