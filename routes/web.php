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
  return view('accueil');
});


Route::get('/accueil', 'AccueilController@index');

// Routes in relation to shirt element
Route::get('/shirts', 'ShirtsController@index');
Route::get('/add/shirt', 'ShirtsController@addShirt');
Route::post('/insert/shirt', 'ShirtsController@insertShirt');
Route::post('/delete/shirt', 'ShirtsController@deleteShirt');
Route::post('/update/shirt', 'ShirtsController@updateShirt');
Route::post('/update/shirt/action', 'ShirtsController@updateShirtAction');

// Routes in relation to marque element
Route::get('/add/marque', 'TaillesController@addMarque');
Route::post('/insert/marque', 'TaillesController@insertMarque');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
