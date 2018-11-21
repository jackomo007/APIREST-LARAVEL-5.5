<?php

use App\Noticia;
use Illuminate\Http\Request;

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

Route::post('register', 'Auth\RegisterController@register');
Route::get('register/{user}', 'Auth\RegisterController@show');
Route::delete('register/{user}', 'Auth\RegisterController@delete');
Route::put('register/{user}', 'Auth\RegisterController@update');

Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');

Route::get('noticias/{noticia}', 'NoticiaController@show');
Route::get('noticias', 'NoticiaController@index');

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('noticias', 'NoticiaController@store');
    Route::put('noticias/{noticia}', 'NoticiaController@update');
    Route::delete('noticias/{noticia}', 'NoticiaController@delete');
});
