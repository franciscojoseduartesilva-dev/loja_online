<?php

declare(strict_types=1);

use App\Controllers\Site\InformáticaController;

return [
    [
        'method' => 'GET',
        'path' => '/informática',
        'action' => [
            InformáticaController::class,
            'index',
        ],
    ],
];
