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

Route::get('/', 'miembroController@inicio');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home2', 'HomeController2@index')->name('home2');
Route::get('/salirProfesor', 'HomeController2@salir')->name('salirProfesor');
Route::get('/salirAdmin', 'HomeController2@salirAdmin')->name('salirAdmin');
Route::resource('/semilleros', 'SemillerosController');
Route::resource('/profesor', 'registrarprofesorController');
Route::resource('/evento', 'eventoController');
Route::resource('/miembro', 'miembroController');
Route::resource('/noticia', 'noticiaController');
Route::resource('/proyecto', 'proyectoController');
/*************************************************************/


Route::post('/ingresar', 'profesorController@ingresar')->name('ingresar');

//Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
// Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
//Route::get('/admin', 'AdministradorController@index')->name('admin.dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
