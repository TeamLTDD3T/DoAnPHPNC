<?php

namespace App\Http\Controllers;

use App\Models\LoaiTaiKhoan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoaiTaiKhoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lstltk=LoaiTaiKhoan::all();
        return view('account_type',['lstltk'=>$lstltk]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_account_type');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLoaiTaiKhoanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $loaiTaiKhoan= new LoaiTaiKhoan;
        $loaiTaiKhoan->fill([
            'ten_loai_tai_khoan'=>$request->input('tenltk'),
        ]);
        $loaiTaiKhoan->save();
        return Redirect::route('loaiTaiKhoan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LoaiTaiKhoan  $loaiTaiKhoan
     * @return \Illuminate\Http\Response
     */
    public function show(LoaiTaiKhoan $loaiTaiKhoan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LoaiTaiKhoan  $loaiTaiKhoan
     * @return \Illuminate\Http\Response
     */
    public function edit(LoaiTaiKhoan $loaiTaiKhoan)
    {
        return view('edit_account_type',['loaiTaiKhoan'=>$loaiTaiKhoan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLoaiTaiKhoanRequest  $request
     * @param  \App\Models\LoaiTaiKhoan  $loaiTaiKhoan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoaiTaiKhoan $loaiTaiKhoan)
    {
        $loaiTaiKhoan->fill([
            'ten_loai_tai_khoan'=>$request->input('tenltk'),
        ]);
        $loaiTaiKhoan->save();
        return Redirect::route('loaiTaiKhoan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LoaiTaiKhoan  $loaiTaiKhoan
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoaiTaiKhoan $loaiTaiKhoan)
    {
        $loaiTaiKhoan->delete();
        return Redirect::route('loaiTaiKhoan.index');
    }
}
