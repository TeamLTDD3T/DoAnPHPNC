<?php

namespace App\Http\Controllers;

use App\Models\ChiTietSanPham;
use App\Models\HinhAnh;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class HinhAnhController extends Controller
{

    protected function fixImage(HinhAnh $hinhAnh)
    {
        if (Storage::disk('public')->exists($hinhAnh->hinh_anh))
        {
            $hinhAnh->hinh_anh = Storage::url($hinhAnh->hinh_anh);
        }
        else 
        {
            $hinhAnh->hinh_anh = '/img/default-150x150.png';
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lsthinhAnh=HinhAnh::all();
        return view('picture',['lsthinhAnh'=>$lsthinhAnh]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lstctsp=ChiTietSanPham::all();
        return view('add_picture',['lstctsp'=>$lstctsp]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHinhAnhRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hinhAnh= new HinhAnh;
        $hinhAnh->fill([
            'hinh_dai_dien'=>$request->input('avatar'),
            'hinh_anh'=>'',
            'chi_tiet_san_pham_id'=>$request->input('ctsanpham'),        
        ]);
        $hinhAnh->save();
        if ($request->hasFile('file')) 
        {
            $hinhAnh->hinh_anh = $request->file('file')->store('image/'.$hinhAnh->id, 'public');
        }
        $hinhAnh->save();
        return Redirect::route('hinhAnh.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HinhAnh  $hinhAnh
     * @return \Illuminate\Http\Response
     */
    public function show(HinhAnh $hinhAnh)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HinhAnh  $hinhAnh
     * @return \Illuminate\Http\Response
     */
    public function edit(HinhAnh $hinhAnh)
    {
        $lstctsp=ChiTietSanPham::all();
        return view('edit_picture',['hinhAnh'=>$hinhAnh,'lstctsp'=>$lstctsp]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHinhAnhRequest  $request
     * @param  \App\Models\HinhAnh  $hinhAnh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HinhAnh $hinhAnh)
    {
        if ($request->hasFile('file')) 
        {
            $hinhAnh->hinh_anh = $request->file('file')->store('image/'.$hinhAnh->id, 'public');
        }
        $hinhAnh->fill([
            'hinh_dai_dien'=>$request->input('avatar'),
            'chi_tiet_san_pham_id'=>$request->input('ctsanpham'),
        ]);
        $hinhAnh->save();
        
        // $hinhAnh->save();
        return Redirect::route('hinhAnh.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HinhAnh  $hinhAnh
     * @return \Illuminate\Http\Response
     */
    public function destroy(HinhAnh $hinhAnh)
    {
        $hinhAnh->delete();
        return Redirect::route('hinhAnh.index');
    }
}
