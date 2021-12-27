<?php

namespace App\Http\Controllers;

use App\Models\ThuongHieu;
use App\Http\Requests\StoreThuongHieuRequest;
use App\Http\Requests\UpdateThuongHieuRequest;

class ThuongHieuController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreThuongHieuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreThuongHieuRequest $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateThuongHieuRequest  $request
     * @param  \App\Models\ThuongHieu  $thuongHieu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateThuongHieuRequest $request, ThuongHieu $thuongHieu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ThuongHieu  $thuongHieu
     * @return \Illuminate\Http\Response
     */
    public function destroy(ThuongHieu $thuongHieu)
    {
        //
    }
}
