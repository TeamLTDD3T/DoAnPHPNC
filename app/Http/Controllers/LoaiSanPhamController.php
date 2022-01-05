<?php

namespace App\Http\Controllers;

use App\Models\LoaiSanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoaiSanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lstloaisp=LoaiSanPham::all();
        return view('pages.product_type',['lstloaisp'=>$lstloaisp]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add.add_product_type');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLoaiSanPhamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $loaiSanPham= new LoaiSanPham;
        $loaiSanPham->fill([
            'ten_loai_san_pham'=>$request->input('tenlsp'),
            'hinh_anh_loai_sp'=>'', 
        ]);
        $loaiSanPham->save();
        if ($request->hasFile('file'))
        {
            $loaiSanPham->hinh_anh_loai_sp = $request->file('file')->store('image/'.$loaiSanPham->id, 'public');
        }
        $loaiSanPham->save();
        return Redirect::route('loaiSanPham.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */
    public function show(LoaiSanPham $loaiSanPham)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */
    public function edit(LoaiSanPham $loaiSanPham)
    {
        return view('edit.edit_product_type',['loaiSanPham'=>$loaiSanPham]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLoaiSanPhamRequest  $request
     * @param  \App\Models\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoaiSanPham $loaiSanPham)
    {
        if ($request->hasFile('file'))
        {
            $loaiSanPham->hinh_anh_loai_sp = $request->file('file')->store('image/'.$loaiSanPham->id, 'public');
        }
        $loaiSanPham->fill([
            'ten_loai_san_pham'=>$request->input('tenlsp'),
        ]);
        $loaiSanPham->save();

        // $hinhAnh->save();
        return Redirect::route('loaiSanPham.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoaiSanPham $loaiSanPham)
    {
        $loaiSanPham->delete();
        return Redirect::route('loaiSanPham.index');
    }
}
