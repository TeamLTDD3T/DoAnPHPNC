<?php

namespace App\Http\Controllers;

use App\Models\ChiTietSanPham;
use App\Models\DonHang;
use App\Models\TaiKhoan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $donhangmoi = DonHang::where('trang_thai', '0')->count();
        $taikhoankhachhang = TaiKhoan::where('loai_tai_khoan_id', '2')->count();
        $soluong = DonHang::join('chi_tiet_don_hangs', 'chi_tiet_don_hangs.don_hang_id', '=', 'don_hangs.id')
            ->join('chi_tiet_san_phams', 'chi_tiet_san_phams.id', '=', 'chi_tiet_don_hangs.chi_tiet_san_pham_id')
            ->join('san_phams', 'san_phams.id', '=', 'chi_tiet_san_phams.san_pham_id')
            ->where('don_hangs.trang_thai', '=', 3)
            ->select('chi_tiet_don_hangs.so_luong')
            ->get();
        $gia = DonHang::join('chi_tiet_don_hangs', 'chi_tiet_don_hangs.don_hang_id', '=', 'don_hangs.id')
            ->join('chi_tiet_san_phams', 'chi_tiet_san_phams.id', '=', 'chi_tiet_don_hangs.chi_tiet_san_pham_id')
            ->join('san_phams', 'san_phams.id', '=', 'chi_tiet_san_phams.san_pham_id')
            ->where('don_hangs.trang_thai', '=', 3)
            ->select('san_phams.gia')
            ->get();
        $tongdoanhthu = 0;
        for ($i = 0; $i < count($gia); $i++) {
            $tongdoanhthu = $tongdoanhthu + $gia[$i]->gia * $soluong[$i]->so_luong;
        }
        $sanphamtonkho = ChiTietSanPham::sum('so_luong');
        return view('pages.home', ['donhangmoi' => $donhangmoi, 'taikhoankhachhang' => $taikhoankhachhang, 'tongdoanhthu' => $tongdoanhthu, 'sanphamtonkho' => $sanphamtonkho]);
    }
}
