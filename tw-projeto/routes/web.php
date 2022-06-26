<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Saudacao;

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

Route::get('/', [SiteController::class, 'index']);
Route::get('/servicos', [SiteController::class, 'servico']);
Route::get('/servico/{id}', [SiteController::class, 'servicos']);
Route::get('/sobre', [SiteController::class, 'sobre']);
route::get('/saudacao/{nome?}', Saudacao::class);
