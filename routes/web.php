<?php

use Illuminate\Support\Facades\Auth;
use UniSharp\LaravelFilemanager\Lfm;
use Illuminate\Support\Facades\Route;

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

Route::get('/table', function () {
    return view('table');
});
Route::get('/data-tables', function () {
    return view('data_tables');
});

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

// Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//     \UniSharp\LaravelFilemanager\Lfm::routes();
Route::group(['middleware' => ['web']], function () {
    Route::get('/master', function () {
        return view('template.master');
    });
    Route::get('/dashboard', 'DashboardController@index');
    Route::resource('cast', 'CastController');
    Route::resource('film', 'FilmController');
    Route::resource('genre', 'GenreController');
    Route::resource('peran', 'PeranController');
    Route::resource('profile', 'ProfileController')->only(['index', 'update', 'show']);


    // Route::get('film/view2', 'FilmController@index2');
    // Route::get('film/show2', 'FilmController@show2');
});