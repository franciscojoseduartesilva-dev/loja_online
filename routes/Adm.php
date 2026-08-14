<?php

declare(strict_types=1);

use App\Controllers\Site\AdminController;



return [
    [
        'method' => 'GET',
        'path' => '/Adm',
        'action' => [
            AdminController::class,
            'index',
        ],
    ],
    
];
