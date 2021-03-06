<?php
/**
 * Created by PhpStorm.
 * User: rachelleannmorales
 * Date: 3/23/19
 * Time: 9:18 PM
 */

namespace App\Providers;


use App\Middlewares\Cors;
use Barryvdh\Cors\HandleCors;
use Carbon\Laravel\ServiceProvider;

class RoutesServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->router->group([
            'namespace' => 'App\Controllers',
            'middleware' => HandleCors::class
        ], function ($router) {
            $router->get('/', function () use ($router) {
                return $router->app->version();
            });

            $router->post('poi',  ['uses' => 'PointOfInterestController@save']);
            $router->get('pois',  ['uses' => 'PointOfInterestController@getAll']);
        });
    }
}