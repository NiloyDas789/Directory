<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get( '/', 'App\Http\Controllers\FrontController@home' )->name( 'home' );
Route::get( '/blood', 'App\Http\Controllers\FrontController@blood' )->name( 'blood' );
Route::get( '/emergency', 'App\Http\Controllers\FrontController@emergency' )->name( 'emergency' );
Route::get( '/library', 'App\Http\Controllers\FrontController@library' )->name( 'library' );


Route::get( '/search', 'App\Http\Controllers\DirectoryController@search' )->name( 'search' );






Route::get('/adm', function () {
    return view('admin.create');
});

Route::get('/master', function () {
    return view('layout.master_view');
});

Route::get('/adm_blood', function () {
    return view('admin.create_blood');
});

Route::get('/adm_dashboard', function () {
    return view('dashboard');
});

Route::get('/alldirectory', function () {
    return view('directory.alldirectory');
});

Route::prefix('main')->group(function () {
    // Route::get('/users', function () {

    // });


    Route::resource('directory', 'App\Http\Controllers\DirectoryController');

    Route::resource('blood', 'App\Http\Controllers\BloodController');

    Route::resource('emergency', 'App\Http\Controllers\EmergencyController');

    Route::resource('library', 'App\Http\Controllers\LibraryController');



});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
