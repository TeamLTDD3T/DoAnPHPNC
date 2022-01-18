<?php

namespace App\Http\Controllers;

use App\Models\DanhGia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\TaiKhoan;

class DanhGiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lstdg = DanhGia::join('tai_khoans','tai_khoans.id','=','danh_gias.tai_khoan_id')
                           ->join('chi_tiet_san_phams','chi_tiet_san_phams.id','=','danh_gias.chi_tiet_san_pham_id')
                           ->join('san_phams','san_phams.id','=','chi_tiet_san_phams.san_pham_id')
                           ->join('maus','maus.id','=','chi_tiet_san_phams.mau_id')
                           ->join('sizes','sizes.id','=','chi_tiet_san_phams.size_id')
                           ->select('san_phams.ten_san_pham','maus.ten_mau','sizes.ten_size','tai_khoans.email','danh_gias.*')->get();
        return view('pages.review',['lstdg'=>$lstdg]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDanhGiaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DanhGia  $danhGia
     * @return \Illuminate\Http\Response
     */
    public function show(DanhGia $danhGia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DanhGia  $danhGia
     * @return \Illuminate\Http\Response
     */
    public function edit(DanhGia $danhGia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDanhGiaRequest  $request
     * @param  \App\Models\DanhGia  $danhGia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DanhGia $danhGia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DanhGia  $danhGia
     * @return \Illuminate\Http\Response
     */
    public function destroy(DanhGia $danhGia)
    {
        $danhGia->delete();
        return Redirect::route('danhGia.index');
    }
}
