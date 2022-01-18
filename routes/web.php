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
use App\Http\Controllers\TaiKhoanController;
use App\Http\Controllers\LoaiTaiKhoanController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\YeuThichController;
use App\Http\Controllers\HinhAnhController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\RecoverPasswordController;
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

Route::post('send-mail', [ForgotPasswordController::class,'sendMailRecover'])->name('send-mail');

Route::post('recover-password', [RecoverPasswordController::class,'recoverPassword'])->name('recover-password');

Route::get('/', function () {
    return view('pages.login');
});

Route::get('/recover', function () {
    return view("pages.recoverpassword");
});

Route::get('/recover-success', function () {
    return view("pages.success_recover");
});

Route::get('forgotpassword', function () {
    return view('pages.forgotpassword');
});

Route::get('login',[AuthController::class,'showLogin'])->name('login')->middleware('CheckUser');

Route::get('logout',[AuthController::class,'logout'])->name('logout');

Route::post('login',[AuthController::class,'authenticate'])->name('login');

Route::get('home', function () {
    return view('pages.home');
})->middleware('CheckLogout');


Route::get('/producttype',[LoaiSanPhamController::class,'index']);

Route::resource('sanPham', SanPhamController::class);

Route::resource('loaiSanPham', LoaiSanPhamController::class);

Route::resource('chiTietSanPham',ChiTietSanPhamController::class);

Route::resource('mau', MauController::class);

Route::resource('thuongHieu',ThuongHieuController::class);

Route::resource('danhGia',DanhGiaController::class);

Route::resource('donHang',DonHangController::class);

Route::resource('taiKhoan', TaiKhoanController::class);

Route::get('taiKhoan/restore/one/{id}', [TaiKhoanController::class, 'restore'])->name('taiKhoan.restore');

Route::get('taiKhoan/restore/all/{id}', [TaiKhoanController::class, 'restoreAll'])->name('taiKhoan.restore.all');

Route::resource('loaiTaiKhoan', LoaiTaiKhoanController::class);

Route::resource('size', SizeController::class);

Route::resource('yeuThich', YeuThichController::class);

Route::resource('hinhAnh', HinhAnhController::class);

// Route::get('/adddetailproduct', function () {
//     return view('add_detail_product');
// });
// Route::get('/editdetailproduct', function () {
//     return view('edit_detail_product');
// });



