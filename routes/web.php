<?php
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\ChiTietSanPhamController;
use App\Http\Controllers\LoaiSanPhamController;
use App\Http\Controllers\LoaiTaiKhoanController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\YeuThichController;
use App\Http\Controllers\HinhAnhController;
use App\Http\Controllers\AuthController;
use App\Models\ChiTietSanPham;
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
    return view('pages.login');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::post('login', [AuthController::class, 'Login'])->name('login');

Route::get('/producttype',[LoaiSanPhamController::class,'index']);

Route::resource('sanPham', SanPhamController::class);

Route::resource('chiTietSanPham',ChiTietSanPhamController::class);

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



// Route::get('/accounttype', function () {
//     return view('account_type');
// });
// Route::get('/addaccounttype', function () {
//     return view('add_account_type');
// });
// Route::get('/editaccounttype', function () {
//     return view('edit_account_type');
// });
// Route::get('/size', function () {
//     return view('size');
// });
// Route::get('/addsize', function () {
//     return view('add_size');
// });
// Route::get('/editsize', function () {
//     return view('edit_size');
// });
// Route::get('/wishlist', function () {
//     return view('wishlist');
// });
// Route::get('/picture', function () {
//     return view('picture');
// });
// Route::get('/addpicture', function () {
//     return view('add_picture');
// });
// Route::get('/editpicture', function () {
//     return view('edit_picture');
// });
