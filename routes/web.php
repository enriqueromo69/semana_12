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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//no existira ruta add ni edit
//Route::resource('mesa', 'MesaController');

Route::resource('consulta', 'ConsultaController')->middleware('auth');

Route::resource('cliente-vue', 'ClienteController')->middleware('auth');
Route::resource('usuario-vue', 'UsuarioController')->middleware('auth');


Route::get('paciente-vue/registro', 'PacienteController@registro');
Route::get('paciente-vue/lista', 'PacienteController@lista');
Route::post('paciente-vue/registra', 'PacienteController@store');
Route::resource('paciente-vue', 'PacienteController')->middleware('auth');

Route::resource('cita-vue', 'CitaController')->middleware('auth');
Route::resource('doctor-vue', 'DoctorController')->middleware('auth');
Route::resource('citadetalle-vue', 'CitadetalleController')->middleware('auth');
