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
    return view('welcome');
});

Auth::routes();

Route::prefix('admin/user')->group(function(){
    Route::get('register', function(){
        return view('admin.register');
    })->name('adminregform');

    //actural registration
    Route::post('user/registration', 'UserController@registerUser')->name('adminreg');

});

Route::get('/seedtables', 'seeders\SeederController@seedTables')->name('seed');

Route::get('/home', 'HomeController@index')->name('home');
