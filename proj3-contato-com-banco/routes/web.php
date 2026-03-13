<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contatoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/olamundo', function () {
    return "ola mundo";
});

Route::get('/faleconosco/{id?}', function ($id = null) {
    return "recebi o valor = $id";
});

Route::post('/contato', [contatoController::class, 'index']);

Route::get('/contatos', [contatoController::class, 'index']);