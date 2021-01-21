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
    return view('UserSignIn');
});
Route::get('/userLogin', function () {
    return view('UsersLogin');
});
Route::get('/admin', function () {
    return view('stockdetail');
});
Route::get('/stockList', function () {
    return view('StockDetailsList');
});

Route::post('/stockDataSave', 'StockDataController@storeStockData');

Route::post('/userLogin', 'StockDataController@userLogin');

Route::post('/userSignin', 'StockDataController@userSignin');

Route::get('/stockList/action', 'StockDataController@viewStockData')->name('stockList.action');
