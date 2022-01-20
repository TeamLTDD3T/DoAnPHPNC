<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $lstsize=Size::all();
        if ($request->has('view_deleted')) {
            $lstsize = Size::onlyTrashed()->get();
        }  
        return view('pages.size',['lstsize'=>$lstsize]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add.add_size');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSizeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $size= new Size;
        $size->fill([
            'ten_size'=>$request->input('tensize'),
        ]);
        $size->save();
        return Redirect::route('size.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function show(Size $size)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function edit(Size $size)
    {
        return view('edit.edit_size',['size'=>$size]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSizeRequest  $request
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Size $size)
    {
        $size->fill([
            'ten_size'=>$request->input('tensize'),
        ]);
        $size->save();
        return Redirect::route('size.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function destroy(Size $size)
    {
        $size->delete();
        return Redirect::route('size.index');
    }

    public function restore($id)
    {
        Size::withTrashed()->find($id)->restore();
  
        return back();
    }  
  
    public function restoreAll()
    {
        Size::onlyTrashed()->restore();
  
        return back();
    }
}
