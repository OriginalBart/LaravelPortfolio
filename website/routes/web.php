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
    return view('pages/index');
});

 Route::get('/gamen', function () {
   return view('pages/gamen');
});
Route::get('/opdrachten', function () {
   return view('pages/opdrachten');
});
Route::get('/school', function () {
   return view('pages/school');
});
Route::get('/vissen', function () {
   return view('pages/vissen');
});
Route::get('/voetbal', function () {
   return view('pages/voetbal');
});
Route::get('/werk', function () {
   return view('pages/werk');
});


 /*contact */



 


Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
