<?php
/**
 * Created by PhpStorm.
 * User: rachelleannmorales
 * Date: 3/23/19
 * Time: 11:14 PM
 */

namespace App\Middlewares;

use Closure;

class Cors {
    public function handle($request, Closure $next)
    {
        return $next($request)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    }
}