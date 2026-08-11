<?php

declare(strict_types=1);

use App\Controllers\Site\CriarcontaController;

return [
    [
        'method' => 'GET',
        'path' => '/cliente/cadastro',
        'action' => [
            CriarcontaController::class,
            'index',
        ],
    ],
];
