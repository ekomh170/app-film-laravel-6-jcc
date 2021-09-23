<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
// Route Tidak Terpakai
// Route::get('/table', function () {
//     return view('table');
// });
// Route::get('/data-tables', function () {
//     return view('data_tables');
// });
// Route::get('/home', 'HomeController@index')->name('home');
// Route Tidak Terpakai

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web']], function () {
    Route::get('/master', function () {
        return view('template.master');
    });
    Route::get('/dashboard', 'DashboardController@index');
    Route::resource('cast', 'CastController');
    Route::resource('film', 'FilmController');
    Route::resource('genre', 'GenreController');
});