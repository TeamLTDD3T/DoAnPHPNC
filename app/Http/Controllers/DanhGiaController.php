<?php

namespace App\Http\Controllers;

use App\Models\DanhGia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\TaiKhoan;

class DanhGiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $lstdg = DanhGia::join('tai_khoans', 'tai_khoans.id', '=', 'danh_gias.tai_khoan_id')
            ->join('chi_tiet_san_phams', 'chi_tiet_san_phams.id', '=', 'danh_gias.chi_tiet_san_pham_id')
            ->join('san_phams', 'san_phams.id', '=', 'chi_tiet_san_phams.san_pham_id')
            ->join('maus', 'maus.id', '=', 'chi_tiet_san_phams.mau_id')
            ->join('sizes', 'sizes.id', '=', 'chi_tiet_san_phams.size_id')
            ->select('san_phams.ten_san_pham', 'maus.ten_mau', 'sizes.ten_size', 'tai_khoans.email', 'danh_gias.*')->get();
        if ($request->has('view_deleted')) {
            $lstdg = DanhGia::join('tai_khoans', 'tai_khoans.id', '=', 'danh_gias.tai_khoan_id')
                ->join('chi_tiet_san_phams', 'chi_tiet_san_phams.id', '=', 'danh_gias.chi_tiet_san_pham_id')
                ->join('san_phams', 'san_phams.id', '=', 'chi_tiet_san_phams.san_pham_id')
                ->join('maus', 'maus.id', '=', 'chi_tiet_san_phams.mau_id')
                ->join('sizes', 'sizes.id', '=', 'chi_tiet_san_phams.size_id')
                ->select('san_phams.ten_san_pham', 'maus.ten_mau', 'sizes.ten_size', 'tai_khoans.email', 'danh_gias.*')->onlyTrashed()->get();
        }
        return view('pages.review', ['lstdg' => $lstdg]);
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
     * @param  \App\Http\Requests\StoreDanhGiaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DanhGia  $danhGia
     * @return \Illuminate\Http\Response
     */
    public function show(DanhGia $danhGia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DanhGia  $danhGia
     * @return \Illuminate\Http\Response
     */
    public function edit(DanhGia $danhGia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDanhGiaRequest  $request
     * @param  \App\Models\DanhGia  $danhGia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DanhGia $danhGia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DanhGia  $danhGia
     * @return \Illuminate\Http\Response
     */
    public function destroy(DanhGia $danhGium)
    {
        $danhGium->delete();
        return Redirect::route('danhGia.index');
    }

    public function restore($id)
    {
        DanhGia::withTrashed()->find($id)->restore();

        return back();
    }

    public function restoreAll()
    {
        DanhGia::onlyTrashed()->restore();

        return back();
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $reviews = DanhGia::join('tai_khoans', 'tai_khoans.id', '=', 'danh_gias.tai_khoan_id')
                ->join('chi_tiet_san_phams', 'chi_tiet_san_phams.id', '=', 'danh_gias.chi_tiet_san_pham_id')
                ->join('san_phams', 'san_phams.id', '=', 'chi_tiet_san_phams.san_pham_id')
                ->join('maus', 'maus.id', '=', 'chi_tiet_san_phams.mau_id')
                ->join('sizes', 'sizes.id', '=', 'chi_tiet_san_phams.size_id')
                ->select('san_phams.ten_san_pham', 'maus.ten_mau', 'sizes.ten_size', 'tai_khoans.email', 'danh_gias.*')
                ->where('tai_khoans.email', 'LIKE', '%' . $request->search . '%')
                ->get();
            if ($reviews) {
                foreach ($reviews as $key => $dg) {
                    $output .= '<tr>
                    <td>' . $dg->id . '</td>
                    <td>' . $dg->noi_dung . '</td>
                    <td>' . $dg->so_sao . '</td>
                    <td>' . $dg->email . '</td>
                    <td>' . $dg->ten_san_pham . '</td>
                    <td>' . $dg->ten_mau . '</td>
                    <td>' . $dg->ten_size . '</td>
                    <td>' . $dg->created_at . '</td>
                    <td>' . $dg->updated_at . '</td>
                    <td style="width: 20px;">
                     <form method="post" action="' . route('danhGia.destroy', ['danhGium' => $dg]) . '">
                     ' . @csrf_field() . '
                     ' . @method_field("DELETE") . '
                     <button type="submit" class="btn btn-default btn-sm checkbox-toggle"><i class="fas fa-trash"></i></button>
                     </form>
                    </td>
                    </tr>';
                }
            }

            return Response($output);
        }
    }

    public function searchDanhGiaXoa(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $reviews = DanhGia::join('tai_khoans', 'tai_khoans.id', '=', 'danh_gias.tai_khoan_id')
                ->join('chi_tiet_san_phams', 'chi_tiet_san_phams.id', '=', 'danh_gias.chi_tiet_san_pham_id')
                ->join('san_phams', 'san_phams.id', '=', 'chi_tiet_san_phams.san_pham_id')
                ->join('maus', 'maus.id', '=', 'chi_tiet_san_phams.mau_id')
                ->join('sizes', 'sizes.id', '=', 'chi_tiet_san_phams.size_id')
                ->select('san_phams.ten_san_pham', 'maus.ten_mau', 'sizes.ten_size', 'tai_khoans.email', 'danh_gias.*')
                ->where('tai_khoans.email', 'LIKE', '%' . $request->search . '%')
                ->onlyTrashed()
                ->get();
            if ($reviews) {
                foreach ($reviews as $key => $dg) {
                    $output .= '<tr>
                    <td>' . $dg->id . '</td>
                    <td>' . $dg->noi_dung . '</td>
                    <td>' . $dg->so_sao . '</td>
                    <td>' . $dg->email . '</td>
                    <td>' . $dg->ten_san_pham . '</td>
                    <td>' . $dg->ten_mau . '</td>
                    <td>' . $dg->ten_size . '</td>
                    <td>' . $dg->created_at . '</td>
                    <td>' . $dg->updated_at . '</td>
                    <td>' . $dg->deleted_at . '</td>
                    <td style=";width: 20px;">
                     <a href="' . route('danhGia.restore', $dg->id) . '">
                     <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fas fa-redo"></i></button>
                     </a>
                     </td>
                    </tr>';
                }
            }

            return Response($output);
        }
    }
}
