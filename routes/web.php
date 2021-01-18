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

Route::get('/lagu', 'LaguController@index');

Route::post('/lagu/create', 'LaguController@create');

Route::get('/lagu/{id}/edit', 'LaguController@edit');

Route::post('/lagu/{id}/update', 'LaguController@update');

Route::get('/lagu/{id}/delete', 'LaguController@delete');


Route::get('/about', function () {
    return view('about');
});
