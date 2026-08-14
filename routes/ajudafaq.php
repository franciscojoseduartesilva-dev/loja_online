<?php

declare(strict_types=1);

use App\Controllers\Site\AjudaFaqController;

return [
    [
        'method' => 'GET',
        'path' => '/faq',
        'action' => [
            AjudaFaqController::class,
            'index',
        ],
    ],
];
