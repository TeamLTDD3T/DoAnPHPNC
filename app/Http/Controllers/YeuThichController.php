<?php

namespace App\Http\Controllers;

use App\Models\YeuThich;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class YeuThichController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lstyeuThich = YeuThich::join('tai_khoans', 'tai_khoans.id', '=', 'yeu_thiches.tai_khoan_id')
                ->join('chi_tiet_san_phams', 'chi_tiet_san_phams.id', '=', 'yeu_thiches.chi_tiet_san_pham_id')
                ->join('san_phams', 'san_phams.id', '=', 'chi_tiet_san_phams.san_pham_id')
                ->join('maus', 'maus.id', '=', 'chi_tiet_san_phams.mau_id')
                ->join('sizes', 'sizes.id', '=', 'chi_tiet_san_phams.size_id')
                ->select('yeu_thiches.id', 'tai_khoans.email', 'san_phams.ten_san_pham', 'maus.ten_mau', 'sizes.ten_size','yeu_thiches.created_at', 'yeu_thiches.updated_at' )
                ->get();
        return view('pages.wishlist',['lstyeuThich'=>$lstyeuThich]);
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
     * @param  \App\Http\Requests\StoreYeuThichRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\YeuThich  $yeuThich
     * @return \Illuminate\Http\Response
     */
    public function show(YeuThich $yeuThich)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\YeuThich  $yeuThich
     * @return \Illuminate\Http\Response
     */
    public function edit(YeuThich $yeuThich)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateYeuThichRequest  $request
     * @param  \App\Models\YeuThich  $yeuThich
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, YeuThich $yeuThich)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\YeuThich  $yeuThich
     * @return \Illuminate\Http\Response
     */
    public function destroy(YeuThich $yeuThich)
    {
        //
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $wishlist = YeuThich::join('tai_khoans', 'tai_khoans.id', '=', 'yeu_thiches.tai_khoan_id')
            ->join('chi_tiet_san_phams', 'chi_tiet_san_phams.id', '=', 'yeu_thiches.chi_tiet_san_pham_id')
            ->join('san_phams', 'san_phams.id', '=', 'chi_tiet_san_phams.san_pham_id')
            ->join('maus', 'maus.id', '=', 'chi_tiet_san_phams.mau_id')
            ->join('sizes', 'sizes.id', '=', 'chi_tiet_san_phams.size_id')
            ->select('yeu_thiches.id', 'tai_khoans.email', 'san_phams.ten_san_pham', 'maus.ten_mau', 'sizes.ten_size','yeu_thiches.created_at', 'yeu_thiches.updated_at' )
            ->where('email', 'LIKE', '%' . $request->search . '%')
            ->get();
            if ($wishlist) {
                foreach ($wishlist as $key => $yt) {
                    $output .= '<tr>
                    <td>' . $yt->id . '</td>
                    <td>' . $yt->email . '</td>
                    <td>' . $yt->ten_san_pham . '</td>
                    <td>' . $yt->ten_mau . '</td>
                    <td>' . $yt->ten_size . '</td>
                    <td>' . $yt->created_at . '</td>
                    <td>' . $yt->updated_at . '</td>
                    </tr>';
                }
            }

            return Response($output);
        }
    }
}
