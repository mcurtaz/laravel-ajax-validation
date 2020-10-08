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

Route::get('/', 'PostController@index') -> name('post-index');

Route::get('/api/all', 'PostController@apiAll') -> name('api-all');

Route::get('/api/topten', 'PostController@apiTop') -> name('api-top');

Route::get('/create', 'PostController@create') -> name('post-create');

Route::post('/create', 'PostController@store') -> name('post-store');
