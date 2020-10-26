<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('inicio');
Route::resource('Clientes','ClientesController');
Route::resource('Cursos','CursosController');
Route::resource('Multimedia','MultimediaController');
Route::resource('Usuarios','UsuariosController');






