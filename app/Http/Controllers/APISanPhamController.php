<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class APISanPhamController extends Controller
{
    # Lấy ds  sản phẩm 
    function layDanhSach()
    {
        $danhSach = SanPham::join('chi_tiet_san_phams', 'chi_tiet_san_phams.san_pham_id', '=', 'san_phams.id')
                            ->join('hinh_anhs', 'hinh_anhs.chi_tiet_san_pham_id', '=', 'chi_tiet_san_phams.id')
                            ->join('thuong_hieus', 'thuong_hieus.id', '=', 'san_phams.thuong_hieu_id')
                            ->select('san_phams.*', 'thuong_hieus.ten_thuong_hieu','hinh_anhs.hinh_anh')
                            ->where('hinh_anhs.hinh_dai_dien', '=', 1)
                            ->get();
        return response()->json($danhSach,200);
    }
    function layDanhSachSanPhamRecom()
    {
        $danhSach =  SanPham::join('chi_tiet_san_phams', 'chi_tiet_san_phams.san_pham_id', '=', 'san_phams.id')
                            ->join('hinh_anhs', 'hinh_anhs.chi_tiet_san_pham_id', '=', 'chi_tiet_san_phams.id')
                            ->join('thuong_hieus', 'thuong_hieus.id', '=', 'san_phams.thuong_hieu_id')
                            ->select('san_phams.*', 'thuong_hieus.ten_thuong_hieu','hinh_anhs.hinh_anh')
                            ->where('chi_tiet_san_phams.so_luong','>=',50)
                            ->where('hinh_anhs.hinh_dai_dien', '=', 1)
                            ->get();
        return response()->json($danhSach,200);
    }
    function layDanhSachSanPhamFea()
    {
        $danhSach =  SanPham::join('chi_tiet_san_phams', 'chi_tiet_san_phams.san_pham_id', '=', 'san_phams.id')
                            ->join('hinh_anhs', 'hinh_anhs.chi_tiet_san_pham_id', '=', 'chi_tiet_san_phams.id')
                            ->join('thuong_hieus', 'thuong_hieus.id', '=', 'san_phams.thuong_hieu_id')
                            ->select('san_phams.*', 'thuong_hieus.ten_thuong_hieu','hinh_anhs.hinh_anh')
                            ->where('san_phams.loai_san_pham_id','=', 4)
                            ->where('hinh_anhs.hinh_dai_dien', '=', 1)
                            ->get();
        return response()->json($danhSach,200);
    }
    function layDanhSachSanPhamNew()
    {
        $danhSach =  SanPham::join('chi_tiet_san_phams', 'chi_tiet_san_phams.san_pham_id', '=', 'san_phams.id')
                            ->join('hinh_anhs', 'hinh_anhs.chi_tiet_san_pham_id', '=', 'chi_tiet_san_phams.id')
                            ->join('thuong_hieus', 'thuong_hieus.id', '=', 'san_phams.thuong_hieu_id')
                            ->select('san_phams.*', 'thuong_hieus.ten_thuong_hieu','hinh_anhs.hinh_anh')
                            ->where('hinh_anhs.hinh_dai_dien', '=', 1)
                            ->orderBy('created_at', 'desc')
                            ->limit(5)
                            ->get();
        return response()->json($danhSach,200);
    }
}
