<?php

/*
|-----------------------------------
| Web Routes
|-----------------------------------
|
*/

Route::get('/', function () {
    return view('welcome');  });
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');


// change password

Route::get('/changePassword','HomeController@showChangePasswordForm')->name('passChange');
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');


// team-setup controller

Route::get('/team-setup-main', 'TeamSetupController@index')->name('teamindexpage');
Route::post('/create-team','TeamSetupController@store');
Route::get('/team-setup/{TeamSetup}', 'TeamSetupController@show');
Route::get('/team-setup-main/delete/{id}','TeamSetupController@deletekor')->name('delete_team');


// match-setup controller

Route::get('/match-format-setup', 'MatchsetupController@index')->name('matchsetupindex');
Route::post('/create-matchFormat','MatchsetupController@store');
Route::get('/match-format-show/{id}','MatchsetupController@show');
Route::get('/match-setup/delete/{id}','MatchsetupController@delete')->name('delete_match_format');


// contact page for front-end
Route::get('/contact-us', 'ContactController@index')->name('contactFrontEnd');
Route::post('/contact-message', 'ContactController@store')->name('contactmessageform');

// Got Error Here
Route::get('/see-contact', 'ContactController@contactlist')->name('contactbackend'); //admin see only
Route::get('/seecontact/{Contact}', 'ContactController@show')->name('showmessage');
Route::get('/delete/contact-message/{id}','ContactController@deleteContact')->name('delete_contact');


// full match setup
Route::resource('fullmatchsetup','FullMatchSetupController')->middleware('admin');


// logout
Route::get('logout','\App\Http\Controllers\Auth\LoginController@logout')->name('logout');


// user profile settings

Route::get('user-profile', 'UserController@index')->name('userprofile');
Route::get('editprofile','UserController@edit')->name('userprofileyour');
//Route::post('/update-profile',' UserController@update')->name('updateProfile');


// Deposit Fund

Route::get('/deposit/fund','FundController@index')->name('depositsent');
//Route::get('','FundController@show');


// Payment Module
Route::get('/agent/add/paymentInfo','AgentPaymentController@index')->name('paymentMethodDeclare');
Route::post('/paymentSaveReq','AgentPaymentController@store');
Route::get('/agent/payment/{id}','AgentPaymentController@show');
Route::get('delete/payment/{id}','AgentPaymentController@delete')->name('delete_payment');

// Join Match 

Route::get('/show/MatchList','JoinMatchController@index');