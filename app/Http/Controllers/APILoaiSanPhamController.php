<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use App\Http\Controllers\Controller;
use App\Models\LoaiSanPham;
use Illuminate\Support\Facades\DB;

class APISanPhamController extends Controller
{
    # Lấy ds loại sản phẩm 
    function layDanhSach()
    {
        $danhSach = LoaiSanPham::
        return response()->json($danhSach,200);
    }
}