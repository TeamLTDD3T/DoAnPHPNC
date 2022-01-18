<?php

namespace App\Http\Controllers;

use App\Models\DonHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\ChiTietDonHang;

class DonHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lstdh = DonHang::join('tai_khoans as khach', 'khach.id', '=', 'don_hangs.tai_khoan_id')
                        ->join('tai_khoans as nv', 'nv.id', '=', 'don_hangs.tai_khoan_nhan_vien_id')
            ->select('khach.email as khachemail','nv.email as nvemail', 'don_hangs.*')->get();
        return view('order', ['lstdh' => $lstdh]);
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
     * @param  \App\Http\Requests\StoreDonHangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DonHang  $donHang
     * @return \Illuminate\Http\Response
     */
    public function show(DonHang $donHang)
    {
        $lstctdh = ChiTietDonHang::join('chi_tiet_san_phams', 'chi_tiet_san_phams.id', '=', 'chi_tiet_don_hangs.chi_tiet_san_pham_id')
                                 ->join('san_phams', 'san_phams.id', '=', 'chi_tiet_san_phams.san_pham_id')
                                 ->join('maus', 'maus.id', '=', 'chi_tiet_san_phams.mau_id')
                                 ->join('sizes', 'sizes.id', '=', 'chi_tiet_san_phams.size_id')
                                 ->select('san_phams.ten_san_pham','maus.ten_mau','sizes.ten_size','chi_tiet_don_hangs.*')
                                 ->where('don_hang_id', '=', $donHang->id)->get();
        return view('detail_order', ['lstctdh' => $lstctdh]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DonHang  $donHang
     * @return \Illuminate\Http\Response
     */
    public function edit(DonHang $donHang)
    {
        return view('edit_order',['dh'=>$donHang]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDonHangRequest  $request
     * @param  \App\Models\DonHang  $donHang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DonHang $donHang)
    {
        $donHang->fill([
            'trang_thai'=>$request->input('trangthai'),
        ]);
        $donHang->save();
        return Redirect::route('donHang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DonHang  $donHang
     * @return \Illuminate\Http\Response
     */
    public function destroy(DonHang $donHang)
    {
        //
    }
}
