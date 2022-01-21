<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; #4 importa a classe clicando com o botão direito no HomeController > import class

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

Route::get('/', function () {return view('templates');}); #2 cria a rota principal
Route::get('/act', [HomeController::class, 'act']); #3 cria as rotas alternativas

#1 - php artisan make:controller HomeController e depois liga o servidor com php artisan serve
