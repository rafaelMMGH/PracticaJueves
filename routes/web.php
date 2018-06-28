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


Route::post('/MMRregistrar', 'MMRregistrarController@guardarTres');


Route::post('/MMRregistrar', 'MMRregistrarController@guardarDos');


Route::post('/MMRregistrar', 'MMRregistrarController@guardarT');
