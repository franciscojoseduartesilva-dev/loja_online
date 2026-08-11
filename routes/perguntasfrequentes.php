<?php

declare(strict_types=1);

use App\Controllers\Site\PerguntasFrequentesController;

return [
    [
        'method' => 'GET',
        'path' => '/faq',
        'action' => [
            PerguntasFrequentesController::class,
            'index',
        ],
    ],
];
