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

Route::get('/', function () {
    // return view('welcome');
    //! memberi role
    // auth()->user()->assignRole('user');
    //! cek role
    // if (auth()->user()->hasRole('user')) {
    //     return 'hai admin';
    // }else{
    //     return 'hai user';
    // }
});

//? auth()->user()->assignRole('admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//! admin
Route::group(['middleware' => ['role:admin']], function () {
    Route::get('admin','AdminController@index')->name('admin.index');

});

//! user
Route::group(['middleware' => ['role:user']], function () {
    Route::get('user','UserController@index')->name('user.index');

});
