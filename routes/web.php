<?php

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

Route::get('/', function () {
    if(Auth::guest()){
    return view('welcome');
    }else{
        return redirect('/home');
    }
});
Auth::routes(['verify'=>true]);
Route::view('/contact', 'contact');
Route::view('/settings', 'settings');
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/guest/{user}', 'OpenController@index');
Route::get('/admin', 'AdminController@index');
Route::get('/madmin/{user}', 'AdminController@madmin');
Route::post('/guest/{user}', 'OpenController@massage');
Route::post('/contact', 'OpenController@contact');
Route::put('/setting/{user}', 'HomeController@settings');
Route::delete('/massage/{id}','HomeController@destroy');