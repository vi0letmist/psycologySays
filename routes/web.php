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
    return view('home');
});
Route::get('home', function () {
    return view('home');
});

Route::get('admin', function () {
    return view('admin');
});
Route::get('login1', function () {
    return view('auth/login1');
});
Route::get('register1', function () {
    return view('auth/register1');
});
Route::get('admin', 'DashboardController@index');
/* Route::get('login', function () {
    return view('login');
});
Route::get('register', function () {
    return view('register');
}); */

Route::resource('share','ShareController');
Route::resource('consultation','ConsulController');
Route::resource('motive','MotiveController');
Route::resource('dashboard','DashboardController');

Auth::routes();

// Route::get('home', 'HomeController@index')->name('home');
// Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
