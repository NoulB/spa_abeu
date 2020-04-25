<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where yourlu can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('index');
//});

Route::get('/', function () {
    return view('home/index');
})->name("home");

//Route::get('/', 'HomeController@index')->name('home');



Route::get('pacientes', 'PacientesController@index')->name("listar_pacientes");
Route::post('pacientes', 'PacientesController@index')->name("busca_paciente");
Route::post('pacientes/busca', 'PacientesController@busca')->name("busca_paciente");
Route::get('pacientes/criar', 'PacientesController@create')->name("form_criar_paciente");
Route::post('pacientes/criar', 'PacientesController@store')->name("salva_paciente");
//Route::post('pacientes/show/{id}', 'PacientesController@show')->name("mostrar_paciente");
Route::get('pacientes/show/{id}', 'PacientesController@show')->name("mostrar_paciente");
//Route::get('pacientes/criar/{id}', 'PacientesController@update')->name("form_criar_paciente");
//Route::put('pacientes/criar/{id}', 'PacientesController@update')->name("editar_paciente");
Route::get('pacientes/editar/{id}', 'PacientesController@edit')->name("form_editar_paciente");
Route::post('pacientes/update', 'PacientesController@update');




Route::get('supervisores', 'SupervisoresController@index')->name('listar_supervisores');
Route::post('supervisores/busca', 'SupervisoresController@busca')->name("busca_supervisor");
Route::get('supervisores/criar', 'SupervisoresController@create')->name("form_criar_supervisores");
Route::post('supervisores/criar', 'SupervisoresController@store');
Route::get('supervisores/show/{id}', 'SupervisoresController@show')->name("mostrar_supervisor");
Route::get('supervisores/editar/{id}', 'SupervisoresController@edit')->name("form_editar_supervisor");
Route::post('supervisores/update', 'SupervisoresController@update');



Route::post('alunos/busca', 'AlunosController@busca')->name("busca_aluno");
Route::get('alunos', 'AlunosController@index')->name("listar_alunos");
Route::get('alunos/criar', 'AlunosController@create')->name("form_criar_aluno");
Route::post('alunos/criar', 'AlunosController@store')->name("salva_aluno");
Route::get('alunos/show/{id}', 'AlunosController@show')->name("mostrar_aluno");
Route::get('alunos/editar/{id}', 'AlunosController@edit')->name("form_editar_aluno");
Route::post('alunos/update', 'AlunosController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
