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
Route::get('/dangkykhachhang', 'KhachhangController@dangky');
Route::get('/dangbaiviet', 'KhachhangController@dangbai');


Route::GET('/hienthidangbai', 'KhachhangController@hienthidangbai');
Route::get('/hoanthanhhoadon', 'KhachhangController@hoanthanhhoadon');
Route::get('/dsbaidang', 'KhachhangController@listUserNews')->name("listNews");

//MV
// Route::GET('/list-bai-dang', 'KhachhangController@listUserNews')->name("listNews");

Route::get('/dangkycuuho', 'DonvicuuhoController@dangky');
Route::get('/donvicuuhol', 'DonvicuuhoController@login');
Route::get('/danhsachcancuuho', 'DonvicuuhoController@donvicuuhol');
Route::get('/dangxuat', 'HomeController@logout');
Route::get('/donhang', 'DonhangController@donhang');
Route::get('/xacnhan', 'DonhangController@xacnhan'); // xác nhận đon hàng// status = 1
Route::get('/danhsachdachon','DonhangController@danhsachdachon');
Route::get('/hoanthanhcuuho', 'DonhangController@hoanthanh'); // khi cuu ho chọn hoàn thành // status = 2
