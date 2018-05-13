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
    return view('landing-page');
});

Route::get('/', 'LandingPageController@index')->name('landing-page');
Route::get('/hotels/{welcome}', 'LandingPageController@show')->name('show');
Route::get('/search','LandingPageController@search')->name('search');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/aide', function () {
    return view('aide');
})->name('aide');

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );
Route::get('/Accueil', 'HomeController@index')->name('home');

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

