<?php
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\MauController;
use App\Http\Controllers\ThuongHieuController;
use App\Http\Controllers\DanhGiaController;
use App\Http\Controllers\DonHangController;
use App\Http\Controllers\ChiTietSanPhamController;
use App\Http\Controllers\LoaiSanPhamController;
use App\Models\ChiTietSanPham;
use App\Models\ThuongHieu;
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

// Route::get('/account', function () {
//     return view('account');
// });

Route::get('/producttype',[LoaiSanPhamController::class,'index']);

Route::resource('sanPham', SanPhamController::class);

Route::resource('chiTietSanPham',ChiTietSanPhamController::class);

Route::resource('mau', MauController::class);

Route::resource('thuongHieu',ThuongHieuController::class);

Route::resource('danhGia',DanhGiaController::class);

Route::resource('donHang',DonHangController::class);




