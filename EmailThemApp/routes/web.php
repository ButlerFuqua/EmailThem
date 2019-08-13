<?php

use App\Http\Controllers\EmailController;

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
    return redirect('/signups/create');
});

Route::get('/login', function () {
    return view('welcome');
});

Route::post('/emails/{id}/sendemail', 'EmailController@sendEmail');

Route::get('/emails/archived', 'EmailController@archived');

Route::resource('emails', 'EmailController');
Route::resource('signups', 'SignupController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
