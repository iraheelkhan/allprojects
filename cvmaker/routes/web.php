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

Route::get("test", function(){
	return view('testmaster');
});

Auth::routes();
Route::get('logout', function(){
	Auth::logout();
	return redirect('login');
});
Route::get('/home', 'HomeController@index')->name('home');



//after registration first personal routes goes here

Route::get('register/step2', 'PersonalController@first')->name('FirstPersonalShow');
Route::get('register/store', 'EducationController@create')->name('FirstPersonalStore');
Route::get('register/step3', 'PersonalController@first')->name('FirstEducationShow');