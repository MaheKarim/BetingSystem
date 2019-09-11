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


Auth::routes();
//['verify' => true]

Route::get('/home', 'HomeController@index')->name('home');


// team-setup controller

Route::get('/team-setup-main', 'TeamSetupController@index')->name('teamindexpage');
Route::post('/create-team','TeamSetupController@store');
Route::get('/team-setup/{TeamSetup}', 'TeamSetupController@show');
Route::get('/team-setup-main/delete/{id}','TeamSetupController@deletekor')->name('delete_team');

// match-setup controller

Route::get('/match-setup', 'MatchsetupController@index')->name('matchsetupindex');

