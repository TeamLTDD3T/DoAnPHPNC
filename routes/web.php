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
    return view('login');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/account', function () {
    return view('account');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/addproduct', function () {
    return view('add_product');
});
Route::get('/editproduct', function () {
    return view('edit_product');
});
Route::get('/detailproduct', function () {
    return view('detail_product');
});
Route::get('/adddetailproduct', function () {
    return view('add_detail_product');
});
Route::get('/editdetailproduct', function () {
    return view('edit_detail_product');
});
Route::get('/brand', function () {
    return view('brand');
});
Route::get('/addbrand', function () {
    return view('add_brand');
});
Route::get('/editbrand', function () {
    return view('edit_brand');
});
Route::get('/color', function () {
    return view('color');
});
Route::get('/addcolor', function () {
    return view('add_color');
});
Route::get('/editcolor', function () {
    return view('edit_color');
});