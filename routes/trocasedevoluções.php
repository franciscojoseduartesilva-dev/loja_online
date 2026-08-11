<?php

declare(strict_types=1);

use App\Controllers\Site\TrocasedevoluçõesController;

return [
    [
        'method' => 'GET',
        'path' => '/trocas-devolucoes',
        'action' => [
            TrocasedevoluçõesController::class,
            'index',
        ],
    ],
];
