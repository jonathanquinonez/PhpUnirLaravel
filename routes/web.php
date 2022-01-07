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

// Route::get('/', function () {
//     //return view('welcome');
//     Route::get('/','ControllerSmartPet@index');
// });

Route::get('/', 'ControllerSmartPet@index')->name('index');
Route::get('editarView/{id}', 'ControllerSmartPet@editarView')->name('editarView');
Route::post('editarAction', 'ControllerSmartPet@editarAction')->name('editarAction');
Route::get('nuevoView', 'ControllerSmartPet@nuevoView')->name('nuevoView');
Route::post('nuevoAction', 'ControllerSmartPet@nuevoAction')->name('nuevoAction');
Route::get('eliminarAction/{id}', 'ControllerSmartPet@eliminarAction')->name('eliminarAction');