<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::delete('/profile', 'App\Http\Controllers\profile@index');

Route::get('/me', 'App\Http\Controllers\AuthController@me');

// Route::resource('/books', BookController::class);
Route::get('/books' ,'App\Http\Controllers\BookController@index');
Route::post('/books' ,'App\Http\Controllers\BookController@store');
Route::get('/books/{id}' ,'App\Http\Controllers\BookController@show');
Route::put('/books/{id}' ,'App\Http\Controllers\BookController@update');
Route::delete('/books/{id}' ,'App\Http\Controllers\BookController@destroy');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
//Route::post('/me', [AuthController::class, 'me']);
Route::post('/me', [AuthController::class, 'me'])->middleware('auth:sanctum');

//Route::post('/register', 'App\Http\Controllers\AuthController@register');