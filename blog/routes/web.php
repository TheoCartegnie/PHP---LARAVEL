<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\HomePage;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

Route::get('/',[HomePage::class,'show']);

$router->get('/test', function () use ($router) {
    return $router->app->version();
});
