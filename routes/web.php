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


Route::get('/games/pub', 'GameController@pub')->name('games.pub');               // Display user games at /games/pub
Route::put('/games/index/{game}', 'GameController@borrow')->name('games.borrow');// It allows us to borrow games
Route::put('/games/pub/{game}', 'GameController@back')->name('games.back');      // -||- to give the game back

Route::resource('games', 'GameController'); //basic crud functionality routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


