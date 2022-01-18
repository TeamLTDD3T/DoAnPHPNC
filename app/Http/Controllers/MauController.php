<?php

namespace App\Http\Controllers;

use App\Models\Mau;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lstm = Mau::all();
        return view('color', ['lstm' => $lstm]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_color');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMauRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mau= new Mau;
        $mau->fill([
            'ten_mau'=>$request->input('tenmau'),
        ]);
        $mau->save();
        return Redirect::route('mau.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mau  $mau
     * @return \Illuminate\Http\Response
     */
    public function show(Mau $mau)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mau  $mau
     * @return \Illuminate\Http\Response
     */
    public function edit(Mau $mau)
    {
        return view('edit_color',['mau'=>$mau]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMauRequest  $request
     * @param  \App\Models\Mau  $mau
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mau $mau)
    {
        $mau->fill([
            'ten_mau'=>$request->input('tenmau'),
        ]);
        $mau->save();
        return Redirect::route('mau.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mau  $mau
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mau $mau)
    {
        $mau->delete();
        return Redirect::route('mau.index');
    }
}
