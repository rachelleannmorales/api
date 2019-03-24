<?php
/**
 * Created by PhpStorm.
 * User: rachelleannmorales
 * Date: 3/23/19
 * Time: 8:48 PM
 */
return [
    'name' => env('APP_NAME', 'lumen'),
    'debug' => env('APP_DEBUG', true),
    'env' => env('APP_ENV', 'production'),
    'timezone' => env('TZ', 'UTC') ?: 'UTC',
    'release' => env('APP_RELEASE', 'latest'),
    'providers' => [
        App\Providers\AppServiceProvider::class,
        App\Providers\RoutesServiceProvider::class,
        \Barryvdh\Cors\ServiceProvider::class
    ]
];