<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Animal;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/CrearAnimal', function() {
    Animal::create(['nombre'=>'tom','f_nacimiento'=>'2021-12-22']);
});

Route::get('/hola', function() {
    return "mundo!";
});

Route::get('/info', function() {
    phpinfo();
});



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
