<?php

namespace App\Http\Controllers;

use App\Models\TaiKhoan;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class APITaiKhoanController extends Controller
{
    # Lấy ds  sản phẩm 
    function dangNhap(Request $request)
    {
        $taiKhoan = TaiKhoan::where('email', $request['email'])->Where('matkhau', $request['matKhau'])->first();
        if (!empty($taiKhoan))
            return response()->json($taiKhoan, 200);
        //nguoc lai du lieu rong~ thi tra ve status 404
        return response()->json($taiKhoan, 404);
    }

    function dangKy(Request $request)
    {
        $tonTai = TaiKhoan::where('email', $request['email'])->first();
        if (empty($tonTai)) {
            $taiKhoan = TaiKhoan::insert([
                'email' => $request['email'],
                'hoten' => $request['hoTen'],
                'password' => $request['matKhau'],
                'ngaysinh' => Carbon::now('Asia/Ho_Chi_Minh'),
                'diachi' => '',
                'sdt' => '',
                'loai_tai_khoan_id' => 2
            ]);
            if ($taiKhoan != null) {
                return response()->json($taiKhoan, 200);
            }
        }
        return response()->json('', 404);
    }
}
