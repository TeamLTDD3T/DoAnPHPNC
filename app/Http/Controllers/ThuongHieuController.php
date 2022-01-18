<?php

namespace App\Http\Controllers;

use App\Models\ThuongHieu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ThuongHieuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lstth=ThuongHieu::all();
        return view('pages.brand',['lstth'=>$lstth]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add.add_brand');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreThuongHieuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $thuongHieu= new ThuongHieu;
        $thuongHieu->fill([
            'ten_thuong_hieu'=>$request->input('tenthuonghieu'),
        ]);
        $thuongHieu->save();
        return Redirect::route('thuongHieu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ThuongHieu  $thuongHieu
     * @return \Illuminate\Http\Response
     */
    public function show(ThuongHieu $thuongHieu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ThuongHieu  $thuongHieu
     * @return \Illuminate\Http\Response
     */
    public function edit(ThuongHieu $thuongHieu)
    {
        return view('edit.edit_brand',['thuongHieu'=>$thuongHieu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateThuongHieuRequest  $request
     * @param  \App\Models\ThuongHieu  $thuongHieu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ThuongHieu $thuongHieu)
    {
        $thuongHieu->fill([
            'ten_thuong_hieu'=>$request->input('tenthuonghieu'),
        ]);
        $thuongHieu->save();
        return Redirect::route('thuongHieu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ThuongHieu  $thuongHieu
     * @return \Illuminate\Http\Response
     */
    public function destroy(ThuongHieu $thuongHieu)
    {
        $thuongHieu->delete();
        return Redirect::route('thuongHieu.index');
    }
}
