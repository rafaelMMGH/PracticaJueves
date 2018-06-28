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
    return view('welcome');
});

Route::get('/registro', function(){
	return view('sections.registro');
});


//ruta par ir al controllador guardar 
//Route::post('/fsrregistrar','fsrregistrarController@guardar');


//activar solo si se va usar la función guardarDos del fsrregistrarController
//Route::post('/fsrregistrar','fsrregistrarController@guardarDos');

Route::post('/fsrregistrar','fsrregistrarController@guardarTres');