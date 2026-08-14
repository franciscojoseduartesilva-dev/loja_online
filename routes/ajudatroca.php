<?php

declare(strict_types=1);

use App\Controllers\Site\AjudaTrocasController;

return [
    [
        'method' => 'GET',
        'path' => '/trocas-devolucoes',
        'action' => [
            AjudaTrocasController::class,
            'index',
        ],
    ],
];
