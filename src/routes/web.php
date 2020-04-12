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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/series', 'SeriesController@index')->name("listar_series");
Route::get('/series/criar', 'SeriesController@create')->name("form_criar_serie");
Route::post('/series/criar', 'SeriesController@store');
Route::delete('/series/{id}', 'SeriesController@destroy');

Route::get('pacientes', 'PacientesController@index')->name("listar_pacientes");
Route::get('pacientes/show'. 'PacientesController@show')->name("encontra_paciente");
Route::get('pacientes/criar', 'PacientesController@create')->name("form_criar_paciente");
Route::post('pacientes/criar', 'PacientesController@store')->name("salva_paciente");
Route::put('pacientes/editar', 'PacientesController@update')->name("editar_paciente");

Route::get('supervisores/criar', 'SupervisoresController@create')->name("form_criar_supervisores");



Route::get('alunos/criar', 'AlunosController@create')->name("form_criar_alunos");
Route::post('supervisores/criar', 'SupervisoresController@store');

