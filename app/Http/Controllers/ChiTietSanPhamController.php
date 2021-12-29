<?php

namespace App\Http\Controllers;

use App\Models\ChiTietSanPham;
use App\Models\Mau;
use App\Models\SanPham;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use SebastianBergmann\Environment\Console;

class ChiTietSanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(SanPham $sanPham)
    {
        $lstsize=Size::all();
        $lstmau=Mau::all();
        return view('add_detail_product',['lstsize'=>$lstsize,'lstmau'=>$lstmau,'sanPham'=>$sanPham]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreChiTietSanPhamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,SanPham $sanPham)
    {
        $chiTietSanPham= new ChiTietSanPham;
        $chiTietSanPham->fill([
            'san_pham_id'=>$request->input('idproduct'),
            'mau_id'=>$request->input('mau'),
            'size_id'=>$request->input('size'),
            'so_luong'=>$request->input('soluong'),
        ]);
        $chiTietSanPham->save();
        return Redirect::route('sanPham.show', ['sanPham' => $sanPham]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChiTietSanPham  $chiTietSanPham
     * @return \Illuminate\Http\Response
     */
    public function show(ChiTietSanPham $chiTietSanPham)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChiTietSanPham  $chiTietSanPham
     * @return \Illuminate\Http\Response
     */
    public function edit(ChiTietSanPham $chiTietSanPham)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChiTietSanPhamRequest  $request
     * @param  \App\Models\ChiTietSanPham  $chiTietSanPham
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChiTietSanPham $chiTietSanPham)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChiTietSanPham  $chiTietSanPham
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChiTietSanPham $chiTietSanPham)
    {
        //
    }
}
