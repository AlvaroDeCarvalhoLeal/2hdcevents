<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// esta importando o EventController que foi criado por mim
use App\Http\Controllers\EventController;
Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
//resgata as informaçoes do banco de dados para imprimir na tela
Route::get('/events/{id}', [EventController::class, 'show']);
//salva os arquivos no banco de dados
Route::post('/events',[EventController::class,'store']);


Route::get('/contact', function () {
    $busca = request('search');
    return view('contact',['busca' => $busca]);
});

