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
Route::get('/accounttype', function () {
    return view('account_type');
});
Route::get('/addaccounttype', function () {
    return view('add_account_type');
});
Route::get('/editaccounttype', function () {
    return view('edit_account_type');
});
Route::get('/size', function () {
    return view('size');
});
Route::get('/addsize', function () {
    return view('add_size');
});
Route::get('/editsize', function () {
    return view('edit_size');
});
Route::get('/wishlist', function () {
    return view('wishlist');
});
Route::get('/picture', function () {
    return view('picture');
});
Route::get('/addpicture', function () {
    return view('add_picture');
});
Route::get('/editpicture', function () {
    return view('edit_picture');
});