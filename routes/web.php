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

Route::get('/', function () {
    return view('auth.login');
});

//Route::get('/Registros', function () {
  //  return view('alumnos');
//});

Route::get('/Administrador','userController@index');
Route::get('/Administrador/{id}/mostrar','userController@show');

Route::get('/questions/create', 'questionController@create');


Route::resource('/users','userController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
