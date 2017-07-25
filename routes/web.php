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

//RESTFUL
Route::get('/', 'TodosController@index')->name('home');

Route::get('/todos/create', 'TodosController@create');

Route::get('/todos', 'TodosController@index');

Route::get('/todos/{todo}', 'TodosController@show');

Route::post('/todos', 'TodosController@store');

Route::post('/todos/{todo}/edit', 'TodosController@edit');

Route::put('/todos/{todo}', 'TodosController@update');

Route::delete('/todos/{todo}', 'TodosController@destroy');


//
Route::post('/todos/{todo}/comments', 'CommentsController@store');

Route::post('/todo/completed', 'TodosController@completed');



Route::get('/todos/filter/{priority}', 'FilterController@filter');



Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create')->name('login');

Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');