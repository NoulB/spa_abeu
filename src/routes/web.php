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
Route::post('pacientes', 'PacientesController@index')->name("busca_paciente");
Route::post('pacientes/busca', 'PacientesController@busca')->name("busca_paciente");
Route::get('pacientes/criar', 'PacientesController@create')->name("form_criar_paciente");
Route::post('pacientes/criar', 'PacientesController@store')->name("salva_paciente");
Route::get('pacientes/criar/{id}', 'PacientesController@update')->name("form_criar_paciente");
Route::put('pacientes/criar/{id}', 'PacientesController@update')->name("editar_paciente");




Route::get('supervisores', 'SupervisoresController@index')->name('listar_supervisores');
Route::post('supervisores/busca', 'SupervisoresController@busca')->name("busca_supervisor");
Route::get('supervisores/criar', 'SupervisoresController@create')->name("form_criar_supervisores");
Route::post('supervisores/criar', 'SupervisoresController@store');


Route::get('alunos', 'AlunosController@index')->name("listar_alunos");
Route::get('alunos/criar', 'AlunosController@create')->name("form_criar_aluno");
Route::post('alunos/criar', 'AlunosController@store')->name("salva_aluno");
