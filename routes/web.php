<?php
// use Illuminate\Routing\Route
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

//use Illuminate\Routing\Route;

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');


Route::group(['middleware'=>'auth'], function(){

    Route::resource('qrcodes', 'QrcodeController');

    Route::resource('roles', 'roleController');
    
    Route::resource('transactions', 'transactionController');
    
    Route::resource('users', 'UserController');
});

