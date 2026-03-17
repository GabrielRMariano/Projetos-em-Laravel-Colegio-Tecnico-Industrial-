<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [
    'as' => 'login',
    'uses' => 'App\Http\Controllers\loginController@index'
]);

Route::get('/login', [
    'as' => 'login',
    'uses' => 'App\Http\Controllers\loginController@index'
]);

Route::post('/login/entrar', [
    'as' => 'login.entrar',
    'uses' => 'App\Http\Controllers\loginController@entrar'
]);

Route::get('/login/sair', [
    'as' => 'login.sair',
    'uses' => 'App\Http\Controllers\loginController@sair'
]);


Route::middleware('auth')->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('welcome');

    Route::get('/welcome', function () {
    return view('welcome');
    })->name('welcome');

    Route::get('/admin/cursos', [
        'as' => 'admin.cursos',
        'uses' => 'App\Http\Controllers\Admin\cursosController@index'
    ]);

    Route::get('/admin/cursos/adicionar', [
        'as' => 'admin.cursos.adicionar',
        'uses' => 'App\Http\Controllers\Admin\cursosController@adicionar'
    ]);

    Route::post('/admin/cursos/salvar', [
        'as' => 'admin.cursos.salvar',
        'uses' => 'App\Http\Controllers\Admin\cursosController@salvar'
    ]);

    Route::get('/admin/cursos/editar/{id}', [
        'as' => 'admin.cursos.editar',
        'uses' => 'App\Http\Controllers\Admin\cursosController@editar'
    ]);

    Route::put('/admin/cursos/atualizar/{id}', [
        'as' => 'admin.cursos.atualizar',
        'uses' => 'App\Http\Controllers\Admin\cursosController@atualizar'
    ]);

    Route::get('/admin/cursos/excluir/{id}', [
        'as' => 'admin.cursos.excluir',
        'uses' => 'App\Http\Controllers\Admin\cursosController@excluir'
    ]);

    // ALUNOS
    Route::get('/admin/alunos', [
        'as' => 'admin.alunos',
        'uses' => 'App\Http\Controllers\Admin\alunosController@index'
    ]);

    Route::get('/admin/alunos/adicionar', [
        'as' => 'admin.alunos.adicionar',
        'uses' => 'App\Http\Controllers\Admin\alunosController@adicionar'
    ]);

    Route::post('/admin/alunos/salvar', [
        'as' => 'admin.alunos.salvar',
        'uses' => 'App\Http\Controllers\Admin\alunosController@salvar'
    ]);

    Route::get('/admin/alunos/editar/{id}', [
        'as' => 'admin.alunos.editar',
        'uses' => 'App\Http\Controllers\Admin\alunosController@editar'
    ]);

    Route::put('/admin/alunos/atualizar/{id}', [
        'as' => 'admin.alunos.atualizar',
        'uses' => 'App\Http\Controllers\Admin\alunosController@atualizar'
    ]);

    Route::get('/admin/alunos/excluir/{id}', [
        'as' => 'admin.alunos.excluir',
        'uses' => 'App\Http\Controllers\Admin\alunosController@excluir'
    ]);

});