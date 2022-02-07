<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Support\Facades\DB;

class APIBannerController extends Controller
{
    function layDanhSachBanner()
    {
        $danhsach = Banner::all();
        if(!empty($danhsach))
            return response($danhsach,200);
        return response($danhsach,404);
    }
}