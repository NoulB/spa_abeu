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
})->name("home")->middleware('auth');

//Route::get('/', 'HomeController@index')->name('home');



Route::get('pacientes', 'PacientesController@index')->name("listar_pacientes");
Route::post('pacientes', 'PacientesController@index')->name("busca_paciente");
Route::get('pacientes/busca', 'PacientesController@busca')->name("busca_paciente");
Route::get('pacientes/criar', 'PacientesController@create')->name("form_criar_paciente");
Route::post('pacientes/criar', 'PacientesController@store')->name("salva_paciente");
Route::get('pacientes/show/{id}', 'PacientesController@show')->name("mostrar_paciente");
Route::get('pacientes/editar/{id}', 'PacientesController@edit')->name("form_editar_paciente");
Route::delete('pacientes/remover/{id}', 'PacientesController@destroy')->name("remove_paciente");
Route::get('pacientes/remover/{id}', 'PacientesController@destroy')->name("remove_paciente");
Route::post('pacientes/update', 'PacientesController@update');




Route::get('supervisores', 'SupervisoresController@index')->name('listar_supervisores');
Route::get('supervisores/busca', 'SupervisoresController@busca')->name("busca_supervisor");
Route::get('supervisores/criar', 'SupervisoresController@create')->name("form_criar_supervisores");
Route::post('supervisores/criar', 'SupervisoresController@store');
Route::get('supervisores/show/{id}', 'SupervisoresController@show')->name("mostrar_supervisor");
Route::get('supervisores/editar/{id}', 'SupervisoresController@edit')->name("form_editar_supervisor");
Route::post('supervisores/update', 'SupervisoresController@update');



Route::get('alunos/busca', 'AlunosController@busca')->name("busca_aluno");
Route::get('alunos', 'AlunosController@index')->name("listar_alunos");
Route::get('alunos/criar', 'AlunosController@create')->name("form_criar_aluno");
Route::post('alunos/criar', 'AlunosController@store')->name("salva_aluno");
Route::get('alunos/show/{id}', 'AlunosController@show')->name("mostrar_aluno");
Route::get('alunos/editar/{id}', 'AlunosController@edit')->name("form_editar_aluno");
Route::post('alunos/update', 'AlunosController@update');


Route::get('consultas', 'ConsultasController@index')->name("listar_consultas");
Route::get('consultas/criar', 'ConsultasController@create')->name("form_agenda_consulta");
Route::post('consultas/criar', 'ConsultasController@store')->name("salva_consulta");
Route::get('consultas/show/{id}', 'ConsultasController@show')->name("mostrar_consulta");
Route::get('consultas/retornop/{busca}','ConsultasController@retornop')->name("retornar_paciente");
Route::get('consultas/retornoa/{busca}','ConsultasController@retornoa')->name("retornar_aluno");
Route::get('consultas/retornos/{busca}','ConsultasController@retornos')->name("retornar_supervisor");
Route::delete('consultas/cancelar/{id}', 'ConsultasController@destroy')->name("cancela_consulta");
Route::post('consultas/confirmar/{id}', 'ConsultasController@confirmaConsulta')->name("confirma_consulta");
Route::post('consultas/buscar/{id}', 'ConsultasController@buscaConsultaPorPaciente')->name("busca_consulta_por_paciente");



Route::get('projetos', 'ProjetosController@index')->name("listar_projetos");
Route::get('projetos/criar', 'ProjetosController@create')->name("form_cadastra_projeto");
Route::post('projetos/criar', 'ProjetosController@store')->name("salva_projeto");
Route::get('projetos/busca', 'ProjetosController@busca')->name("busca_projeto");



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
