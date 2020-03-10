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

Route::get('/', 'ViewEngine@home');
Route::get('/topics', 'ViewEngine@topics');
Route::get('/topics/cat-subcat/{id}', 'ViewEngine@has_subcat');
Route::get('/topics/createquestions', 'ViewEngine@createpage');

Route::get('/login', 'Auth\LoginController@loginpage');
Route::get('/logout', 'Auth\LoginController@logoutpage');
Route::post('/checklogin','Auth\LoginController@checklogin');
Route::get('/register', 'Auth\LoginController@registerpage');
Route::get('/verify/{email}/{hash}','Auth\LoginController@verifydatabase');

Route::post('/registeruser','VerifyEmailController@sendEmail');

Route::get('/topics/loadsubcatpage/{id}','ViewEngine@loadsubcat');
Route::get('/topics/viewsubcatpage/{id}','ViewEngine@viewsubcat');
Route::get('/topics/loadquestion/{id}','ViewEngine@quespage');
Route::get('/dashboard/{token}', 'ViewEngine@mydashboard');

Route::get('/404page/{error}','ViewEngine@errorpage');