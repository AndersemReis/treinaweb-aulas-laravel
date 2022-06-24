<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\SiteController@index');
Route::get('/servicos', 'App\Http\Controllers\SiteController@servicos');
Route::get('/servico/{id}', 'App\Http\Controllers\SiteController@servico');
Route::get('/sobre', 'App\Http\Controllers\SiteController@sobre');
route::get('/saudacao/{nome?}', 'App\Http\Controllers\SiteController@saudacao');
