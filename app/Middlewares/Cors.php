<?php
/**
 * Created by PhpStorm.
 * User: rachelleannmorales
 * Date: 3/23/19
 * Time: 11:14 PM
 */

namespace App\Middlewares;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Closure;

class Cors {

    public function handle(Request $request, Closure $next)
    {
        if ($request->isMethod('OPTIONS')){
            $response = Response::make();
        } else {
            $response = $next($request);
        }
        return $response
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PATCH, PUT, DELETE, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Origin, Content-Type, Accept, Authorization, X-Requested-With, Application')
            ->header('X-Requested-With', 'XMLHttpRequest');

    }
}
