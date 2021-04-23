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

Route::get('/', 'Front@main');

Route::get('/introduction/greeting', 'Front@introduction');
Route::get('/introduction/history', 'Front@introduction');
Route::get('/introduction/organization', 'Front@introduction');
Route::get('/introduction/location', 'Front@introduction');

Route::get('/product/tomoe/rebber', 'Front@product');
Route::get('/product/tomoe/high', 'Front@product');
Route::get('/product/tomoe/terlon', 'Front@product');
Route::get('/product/tomoe/rotary', 'Front@product');
Route::get('/product/tomoe/check', 'Front@product');

Route::get('/product/koso/glode', 'Front@product');

Route::get('/data_room/data_room', 'Front@data_room');

Route::get('/customer/customer', 'Front@customer');

Route::get('/contact_us/contact_us', 'Front@contact_us');



?>