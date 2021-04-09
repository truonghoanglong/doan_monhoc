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
//FE
Route::get('/','HomeController@index');
Route::get('/trang-chu', 'HomeController@index');

//BE
Route::get('/khachhang', 'KhachhangController@login');

Route::get('/dangbai', 'KhachhangController@khachhang');

Route::POST('/bangdangbai', 'KhachhangController@bangdangbai');

Route::POST('/hienthidangbai', 'KhachhangController@hienthidangbai');

//MV
Route::GET('/list-bai-dang', 'KhachhangController@listUserNews')->name("listNews");

Route::get('/donvicuuhol', 'DonvicuuhoController@donvicuuhol');

Route::get('/dsbaidang', 'KhachhangController@listUserNews')->name("listNews");