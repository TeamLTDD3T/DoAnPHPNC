<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use App\Http\Controllers\Controller;
use App\Models\LoaiSanPham;
use Illuminate\Support\Facades\DB;

class APILoaiSanPhamController extends Controller
{
    # Lấy ds loại sản phẩm 
    function layDanhSachLoaiSP()
    {
        $danhsach = LoaiSanPham::all();
        if(!empty($danhsach))
            return response($danhsach,200);
        return response($danhsach,404);
    }
}