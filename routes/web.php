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

Route::get('/pdf', function () {
    $html = "<h1>Je suis ici blabla</h1>";
    $pdf = PDF::loadView('pdf.tutorial');
    // return $pdf->download("hello.pdf");
    return $pdf->stream("hello.pdf");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {

    Route::resource('users', 'UserController');

});


