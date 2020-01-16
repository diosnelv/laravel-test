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

use App\Http\Controllers\GenreController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ruta-nueva', function () {
    return view('prueba');
});

//Route::get('genres', 'GenreController@index');

Route::resource('genres', 'GenreController')->except([
]);
Route::resource('types', 'TypesController')->except([
]);
