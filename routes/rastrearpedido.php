<?php

declare(strict_types=1);

use App\Controllers\Site\RastrearPedidoController;

return [
    [
        'method' => 'GET',
        'path' => '/rastrearpedido',
        'action' => [
            RastrearPedidoController::class,
            'index',
        ],
    ],
];
