<?php

declare(strict_types=1);

use App\Controllers\Site\ItensnoCarrinhoController;

return [
    [
        'method' => 'GET',
        'path' => '/carrinho',
        'action' => [
            ItensnoCarrinhoController::class,
            'index',
        ],
    ],
];
