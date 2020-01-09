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

Auth::routes();
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
Route::get('/home', 'HomeController@index')->name('home')->middleware('is_admin');
Route::get('/adminHome', 'HomeController@index')->name('adminhome');
Route::resource('masakans', 'MasakanController');
Route::resource('orders', 'OrderController');
Route::resource('ordersu', 'OrdersuController');
Route::resource('details', 'DetailController');
Route::resource('detailsu', 'DetailsuController');
Route::resource('transaksis', 'TransaksiController');
Route::get('/laporans/cetak_pdf', 'DetailController@cetak_pdf');