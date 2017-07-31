<?php

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
//login
Route::get('/','ControllerLogin@index');
Route::post('/deslogar','ControllerLogin@deslogar');
Route::post('/logar','ControllerLogin@logar');

//home
Route::get('/home','HomeController@index');

//aluno
Route::get('/aluno','ControllerAluno@create');
Route::post('/aluno/cadastrar', 'ControllerAluno@store');
Route::post('/aluno/remover', 'ControllerAluno@remover');

//curso
