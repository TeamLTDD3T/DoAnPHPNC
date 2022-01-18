<?php

namespace App\Http\Controllers;

use App\Models\TaiKhoan;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Mail\MyMail;
use Illuminate\Support\Facades\Mail;

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
                'loai_tai_khoan_id' => 2,
                'token'=>Str::random(60),
                'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at'=>null,
            ]);
            if ($taiKhoan != null) {
                return response()->json($taiKhoan, 200);
            }
        }
        return response()->json('', 404);
    } 

    function layLaiMatKhau(Request $request)
    {
        $kiemtra = TaiKhoan::where('email',$request->input('email'))->first();
        if(!empty($kiemtra))
        {
            $details = [
                'title' => 'Password Recovery Mail from 3TFashion',
                'body' => 'Click link to recover password: http://127.0.0.1:8001/recover?token='.$kiemtra->token,
            ];
            Mail::to($request->input('email'))->send(new MyMail($details));
            return response()->json($kiemtra, 200);
        }      
        return response()->json($kiemtra, 404);
    }

    function layIDTaiKhoan(Request $request){
        $taiKhoan = TaiKhoan::where('email',$request['email'])->first();
        if ($taiKhoan != null) {
            return response()->json($taiKhoan, 200);
        }
        return response()->json('',404);
    }

    function layThongTinTaiKhoan(Request $request){
        $taiKhoan = TaiKhoan::where('id',$request['id'])->first();
        if ($taiKhoan != null) {
            return response()->json($taiKhoan, 200);
        }
        return response()->json('',404);
    }
}
