<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
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

Route::get('/', [EventController::class, 'index']);
Route::get('/events/cadastro', [EventController::class, 'cadastro']);
Route::get('/events/login', [EventController::class, 'login']);

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/produtos', function () {

  $busca = request('search');

  return view('produtos', ['busca' => $busca ]);
});
Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('products', ['id'=> $id]);
});

