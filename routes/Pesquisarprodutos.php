<?php

declare(strict_types=1);

use App\Controllers\Site\PesquisarProdutosController;

return [
    [
        'method' => 'GET',
        'path' => '/pesquisarprodutos',
        'action' => [
            PesquisarProdutosController::class,
            'index',
        ],
    ],
];
