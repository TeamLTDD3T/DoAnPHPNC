<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APISanPhamController;
use App\Http\Controllers\APILoaiSanPhamController;
use App\Http\Controllers\APITaiKhoanController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('san-pham/danh-sach', [APISanPhamController::class, 'layDanhSach']);

Route::get('san-pham/danh-sach-recom', [APISanPhamController::class, 'layDanhSachSanPhamRecom']);

Route::get('san-pham/danh-sach-fea', [APISanPhamController::class, 'layDanhSachSanPhamFea']);

Route::get('san-pham/danh-sach-new', [APISanPhamController::class, 'layDanhSachSanPhamNew']);

Route::post('tai-khoan/dang-nhap',[APITaiKhoanController::class, 'dangNhap']);

Route::post('tai-khoan/dang-ky',[APITaiKhoanController::class, 'dangKy']);

Route::get('san-pham/danh-sach-theo-loai/{loaiSanPham}', [APISanPhamController::class, 'layDanhSachTheoLoai']);

Route::get('loai-san-pham/danh-sach-loai-sp', [APILoaiSanPhamController::class, 'layDanhSachLoaiSP']);