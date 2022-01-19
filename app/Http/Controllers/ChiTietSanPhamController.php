<?php

namespace App\Http\Controllers;

use App\Models\ChiTietSanPham;
use App\Models\Mau;
use App\Models\SanPham;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;



class ChiTietSanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $lstct = ChiTietSanPham::join('san_phams','san_phams.id','=','chi_tiet_san_phams.san_pham_id')
        ->join('maus','maus.id','=','chi_tiet_san_phams.mau_id')
        ->join('sizes','sizes.id','=','chi_tiet_san_phams.size_id')
        ->where('san_phams.id','=',$request->get('sanPham'))
        ->select('chi_tiet_san_phams.id','chi_tiet_san_phams.san_pham_id','maus.ten_mau','sizes.ten_size','chi_tiet_san_phams.so_luong','chi_tiet_san_phams.created_at','chi_tiet_san_phams.updated_at')
        ->get();
        if ($request->has('view_deleted')) {
            $lstct = ChiTietSanPham::onlyTrashed()->join('san_phams','san_phams.id','=','chi_tiet_san_phams.san_pham_id')
            ->join('maus','maus.id','=','chi_tiet_san_phams.mau_id')
            ->join('sizes','sizes.id','=','chi_tiet_san_phams.size_id')
            ->select('chi_tiet_san_phams.id','chi_tiet_san_phams.san_pham_id','maus.ten_mau','sizes.ten_size','chi_tiet_san_phams.so_luong','chi_tiet_san_phams.created_at','chi_tiet_san_phams.updated_at','chi_tiet_san_phams.deleted_at')
            ->get();
        }
        $sanPham =SanPham::where('id','=',$request->get('sanPham'))->first();
        return view('pages.detail_product',['lstCTSanPham'=>$lstct,'sanPham'=>$sanPham]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // var_dump($sanPham);
        $lstsize=Size::all();
        $lstmau=Mau::all();
        return view('add.add_detail_product',['lstsize'=>$lstsize,'lstmau'=>$lstmau,'sanPham'=>$request->get('sanPham')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreChiTietSanPhamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sanPham =SanPham::where('id','=',$request->input('idproduct'))->first();
        $chiTietSanPham= new ChiTietSanPham;
        $chiTietSanPham->fill([
            'san_pham_id'=>$request->input('idproduct'),
            'mau_id'=>$request->input('mau'),
            'size_id'=>$request->input('size'),
            'so_luong'=>$request->input('soluong'),
        ]);
        $chiTietSanPham->save();
        $lstct = ChiTietSanPham::join('san_phams','san_phams.id','=','chi_tiet_san_phams.san_pham_id')
        ->join('maus','maus.id','=','chi_tiet_san_phams.mau_id')
        ->join('sizes','sizes.id','=','chi_tiet_san_phams.size_id')
        ->where('san_phams.id','=',$request->input('idproduct'))
        ->select('chi_tiet_san_phams.id','chi_tiet_san_phams.san_pham_id','maus.ten_mau','sizes.ten_size','chi_tiet_san_phams.so_luong','chi_tiet_san_phams.created_at','chi_tiet_san_phams.updated_at')
        ->get();
        return view('pages.detail_product',['lstCTSanPham'=>$lstct,'sanPham'=>$sanPham]);
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
        $lstsize=Size::all();
        $lstmau=Mau::all();
        return view('edit.edit_detail_product',['lstsize'=>$lstsize,'lstmau'=>$lstmau,'chiTietSanPham'=>$chiTietSanPham]);
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
        $sanPham =SanPham::where('id','=',$request->input('idproduct'))->first();
        $chiTietSanPham->fill([
            'san_pham_id'=>$request->input('idproduct'),
            'mau_id'=>$request->input('mau'),
            'size_id'=>$request->input('size'),
            'so_luong'=>$request->input('soluong'),
        ]);
        $chiTietSanPham->save();
        $lstct = ChiTietSanPham::join('san_phams','san_phams.id','=','chi_tiet_san_phams.san_pham_id')
        ->join('maus','maus.id','=','chi_tiet_san_phams.mau_id')
        ->join('sizes','sizes.id','=','chi_tiet_san_phams.size_id')
        ->where('san_phams.id','=',$request->input('idproduct'))
        ->select('chi_tiet_san_phams.id','chi_tiet_san_phams.san_pham_id','maus.ten_mau','sizes.ten_size','chi_tiet_san_phams.so_luong','chi_tiet_san_phams.created_at','chi_tiet_san_phams.updated_at')
        ->get();
        return view('pages.detail_product',['lstCTSanPham'=>$lstct,'sanPham'=>$sanPham]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChiTietSanPham  $chiTietSanPham
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,ChiTietSanPham $chiTietSanPham)
    {
        $idsp=$request->get('sanPham');
        $chiTietSanPham->delete();
        return Redirect::route('chiTietSanPham.index',['sanPham'=>$idsp]);
    }

    public function restore($id)
    {
        ChiTietSanPham::withTrashed()->find($id)->restore();

        return back();
    }

    public function restoreAll()
    {
        ChiTietSanPham::onlyTrashed()->restore();

        return back();
    }
}
