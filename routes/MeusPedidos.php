<?php

declare(strict_types=1);

use App\Controllers\Site\MeusPedidosController;

return [
    [
        'method' => 'GET',
        'path' => '/cliente/pedidos',
        'action' => [
            MeusPedidosController::class,
            'index',
        ],
    ],
];
