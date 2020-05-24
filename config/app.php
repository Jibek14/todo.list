<?php

use App\Startup\DatabaseProvider;
use App\Startup\ErrorHandlerProvider;
use App\Startup\RouterProvider;
use App\Startup\ViewProviders;

return [
    'name' => 'ToDO List',
    'debug' => true,
    'providers' => [
        ErrorHandlerProvider::class,
        DatabaseProvider::class,
        ViewProviders::class,
        RouterProvider::class
    ]
];