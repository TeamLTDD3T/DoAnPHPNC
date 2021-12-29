<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use App\Models\LoaiSanPham;
use App\Models\ThuongHieu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lstsp=SanPham::all();
        return view('product',['lstsp'=>$lstsp]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lstloai=LoaiSanPham::all();
        $lstthuonghieu=ThuongHieu::all();
        return view('add_product',['lstloai'=>$lstloai,'lstthuonghieu'=>$lstthuonghieu]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sanPham= new SanPham;
        $sanPham->fill([
            'ten_san_pham'=>$request->input('tensp'),
            'mo_ta'=>$request->input('mota'),
            'gia'=>$request->input('gia'),
            'loai_san_pham_id'=>$request->input('loaisp'),
            'thuong_hieu_id'=>$request->input('thuonghieu'),
        ]);
        $sanPham->save();
        return Redirect::route('sanPham.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function show(SanPham $sanPham)
    {
        return view('detail_product',['lstCTSanPham'=>$sanPham->chiTietSanPhams,'sanPham'=>$sanPham]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function edit(SanPham $sanPham)
    {
        $lstloai=LoaiSanPham::all();
        $lstthuonghieu=ThuongHieu::all();
        return view('edit_product',['sanPham'=>$sanPham,'lstloai'=>$lstloai,'lstthuonghieu'=>$lstthuonghieu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSanPhamRequest  $request
     * @param  \App\Models\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SanPham $sanPham)
    {
        $sanPham->fill([
            'ten_san_pham'=>$request->input('tensp'),
            'mo_ta'=>$request->input('mota'),
            'gia'=>$request->input('gia'),
            'loai_san_pham_id'=>$request->input('loaisp'),
            'thuong_hieu_id'=>$request->input('thuonghieu'),
        ]);
        $sanPham->save();
        return Redirect::route('sanPham.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function destroy(SanPham $sanPham)
    {
        $sanPham->delete();
        return Redirect::route('sanPham.index');
    }
}
