<?php

namespace App\Http\Controllers;

use App\Models\TaiKhoan;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class APITaiKhoanController extends Controller
{
    # Lấy ds  sản phẩm 
    function dangNhap(Request $request)
    {
        $taiKhoan = []; 
        if(Auth::attempt(['email' => $request['email'], 'password' => $request['matKhau']]))
        {
            $taiKhoan = TaiKhoan::where('email', $request['email'])->first();
            return response()->json($taiKhoan, 200);
        }
            
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
                'password' => bcrypt($request['matKhau']),
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
