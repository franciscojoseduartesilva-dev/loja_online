<?php

declare(strict_types=1);

use App\Controllers\Site\FaleconoscoController;

return [
    [
        'method' => 'GET',
        'path' => '/contato',
        'action' => [
            FaleconoscoController::class,
            'index',
        ],
    ],
];
