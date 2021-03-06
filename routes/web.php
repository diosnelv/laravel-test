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
use App\Models\Genre;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('generos', function () {
//    $query = Genre::select('id','name')->get();
//
//    return view('generos',[
//        'generos' => $query
//    ]);
//});

//Route::get('genres', 'GenreController@index');

Route::resource('generos', 'GenreController')->except([
//    'index'
]);

Route::resource('producers', 'ProducerController')->except([
//    'index'
]);
Route::resource('types', 'TypesController')->except([
]);
