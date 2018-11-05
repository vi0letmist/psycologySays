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
Route::get('home', function () {
    return view('home');
});
Route::get('consultation', function () {
    return view('consultation');
});
/* Route::get('motive', function () {
    return view('motive');
}); */
Route::get('shareW', function () {
    return view('shareW');
});
Route::get('login', function () {
    return view('login');
});
Route::get('register', function () {
    return view('register');
});

// Route::resource('shareW','ShareController');
// Route::resource('consultation','ConsulController');
Route::resource('motive','MotiveController');

/* Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); */
