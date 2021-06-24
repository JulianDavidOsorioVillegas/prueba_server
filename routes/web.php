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
    return view('inicio');
});
Route::get('productos', function () {
    return view('productos');
});
Route::get('materiales', function () {
    return view('materiales');
});
Route::get('institucion', function () {
    return view('institucion');
});
Route::get('inicio', function () {
    return view('inicio');
});

Route::resource('productos','ProductosController');

Route::resource('materiales','MaterialesController');

Route::resource('institucion','InstitucionController');


