<?php

declare(strict_types=1);

use App\Controllers\Site\InformaticaController;

return [
    [
        'method' => 'GET',
        'path' => '/informatica',
        'action' => [
            InformaticaController::class,
            'index',
        ],
    ],
];
