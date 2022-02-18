<?php

namespace App\Http\Controllers;

use App\Models\ChiTietSanPham;
use App\Models\SanPham;
use App\Models\LoaiSanPham;
use App\Models\ThuongHieu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use SebastianBergmann\Environment\Console;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $lstsp=SanPham::join('loai_san_phams','loai_san_phams.id','=','san_phams.loai_san_pham_id')
        ->join('thuong_hieus','thuong_hieus.id','=','san_phams.thuong_hieu_id')
        ->select('san_phams.id','san_phams.ten_san_pham','san_phams.mo_ta','san_phams.gia','loai_san_phams.ten_loai_san_pham','thuong_hieus.ten_thuong_hieu','san_phams.created_at','san_phams.updated_at')
        ->get();
        if ($request->has('view_deleted')) {
            $lstsp = SanPham::join('loai_san_phams','loai_san_phams.id','=','san_phams.loai_san_pham_id')
            ->join('thuong_hieus','thuong_hieus.id','=','san_phams.thuong_hieu_id')
            ->select('san_phams.id','san_phams.ten_san_pham','san_phams.mo_ta','san_phams.gia','loai_san_phams.ten_loai_san_pham','thuong_hieus.ten_thuong_hieu','san_phams.created_at','san_phams.updated_at','san_phams.deleted_at')
            ->onlyTrashed()
            ->get();
        }
        return view('pages.product',['lstsp'=>$lstsp]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lstloai=LoaiSanPham::all();
        $lstthuonghieu=ThuongHieu::all();
        return view('add.add_product',['lstloai'=>$lstloai,'lstthuonghieu'=>$lstthuonghieu]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $sanPham= new SanPham;
        // $sanPham->fill([
        //     'ten_san_pham'=>$request->input('tensp'),
        //     'mo_ta'=>$request->input('mota'),
        //     'gia'=>$request->input('gia'),
        //     'loai_san_pham_id'=>$request->input('loaisp'),
        //     'thuong_hieu_id'=>$request->input('thuonghieu'),
        // ]);
        // $sanPham->save();
        // return Redirect::route('sanPham.index');

        $sanphamformat=trim( $request->input('tensp')); 
        $tontai=SanPham::where('ten_san_pham','like', $sanphamformat)->first(); 
        if(empty($tontai)){
            $kt_sanpham=str_replace(' ', '', $sanphamformat);
            $tontai=SanPham::where('ten_san_pham','like',$kt_sanpham)->first();
            if(empty($tontai))
            {
                $sanPham = new SanPham;
                $sanPham->fill([
                    'ten_san_pham'=>$sanphamformat,
                    'mo_ta'=>$request->input('mota'),
                    'gia'=>$request->input('gia'),
                    'loai_san_pham_id'=>$request->input('loaisp'),
                    'thuong_hieu_id'=>$request->input('thuonghieu'),
                ]);
                $sanPham->save();
                return Redirect::route('sanPham.index');
            }
        }
        $alert = 'Product name already in use';
        return redirect()->back()->with('alert', $alert);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function show(SanPham $sanPham)
    {
        //var_dump($sanPham);
        $lstct = ChiTietSanPham::join('san_phams','san_phams.id','=','chi_tiet_san_phams.san_pham_id')
        ->join('maus','maus.id','=','chi_tiet_san_phams.mau_id')
        ->join('sizes','sizes.id','=','chi_tiet_san_phams.size_id')
        ->where('san_phams.id',$sanPham->id)
        ->select('chi_tiet_san_phams.id','san_phams.ten_san_pham','maus.ten_mau','sizes.ten_size','chi_tiet_san_phams.so_luong','chi_tiet_san_phams.created_at','chi_tiet_san_phams.updated_at')
        ->get();
        return view('pages.detail_product',['lstCTSanPham'=>$lstct,'sanPham'=>$sanPham]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function edit(SanPham $sanPham)
    {
        $lstloai=LoaiSanPham::all();
        $lstthuonghieu=ThuongHieu::all();
        return view('edit.edit_product',['sanPham'=>$sanPham,'lstloai'=>$lstloai,'lstthuonghieu'=>$lstthuonghieu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSanPhamRequest  $request
     * @param  \App\Models\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SanPham $sanPham)
    {
        $sanphamformat=trim( $request->input('tensp')); 
        $tontai=SanPham::where('ten_san_pham','like', $sanphamformat)->first(); 
        if(empty($tontai)){
            $kt_sanpham=str_replace(' ', '', $sanphamformat);
            $tontai=SanPham::where('ten_san_pham','like',$kt_sanpham)->first();
            if(empty($tontai))
            {
                $sanPham->fill([
                    'ten_san_pham'=>$sanphamformat,
                    'mo_ta'=>$request->input('mota'),
                    'gia'=>$request->input('gia'),
                    'loai_san_pham_id'=>$request->input('loaisp'),
                    'thuong_hieu_id'=>$request->input('thuonghieu'),
                ]);
                $sanPham->save();
                return Redirect::route('sanPham.index');
            }
        }
        $alert = 'Product name already in use';
        return redirect()->back()->with('alert', $alert);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function destroy(SanPham $sanPham)
    {
        $sanPham->delete();
        return Redirect::route('sanPham.index');
    }

    public function restore($id)
    {
        SanPham::withTrashed()->find($id)->restore();

        return back();
    }

    public function restoreAll()
    {
        SanPham::onlyTrashed()->restore();

        return back();
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $products = SanPham::join('loai_san_phams','loai_san_phams.id','=','san_phams.loai_san_pham_id')
            ->join('thuong_hieus','thuong_hieus.id','=','san_phams.thuong_hieu_id')
            ->select('san_phams.id','san_phams.ten_san_pham','san_phams.mo_ta','san_phams.gia','loai_san_phams.ten_loai_san_pham','thuong_hieus.ten_thuong_hieu','san_phams.created_at','san_phams.updated_at')
            ->where('ten_san_pham', 'LIKE', '%' . $request->search . '%')
            ->get();
            if ($products) {
                foreach ($products as $key => $p) {
                    $output .= '<tr>
                    <td>' . $p->id . '</td>
                    <td>' . $p->ten_san_pham . '</td>
                    <td>' . $p->mo_ta . '</td>
                    <td>' . $p->gia . '</td>
                    <td>' . $p->ten_loai_san_pham . '</td>
                    <td>' . $p->ten_thuong_hieu . '</td>
                    <td>' . $p->created_at . '</td>
                    <td>' . $p->updated_at . '</td>
                    <td style=";width: 20px;">
                     <a href="'.route('sanPham.show', ['sanPham' => $p]).'">
                     <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fas fa-edit"></i></button>
                     </a>
                     </td>
                    <td style=";width: 20px;">
                     <a href="'.route('sanPham.edit', ['sanPham' => $p]).'">
                     <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fas fa-edit"></i></button>
                     </a>
                     </td>
                     <td style="width: 20px;">
                     <form method="post" action="'.route('sanPham.destroy', ['sanPham' => $p]).'">
                     '.@csrf_field().'
                     '.@method_field("DELETE").'
                     <button type="submit" class="btn btn-default btn-sm checkbox-toggle"><i class="fas fa-trash"></i></button>
                     </form>
                     </td>
                    </tr>';
                }
            }

            return Response($output);
        }
    }

    public function searchSanPhamXoa(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $products = SanPham::join('loai_san_phams','loai_san_phams.id','=','san_phams.loai_san_pham_id')
            ->join('thuong_hieus','thuong_hieus.id','=','san_phams.thuong_hieu_id')
            ->select('san_phams.id','san_phams.ten_san_pham','san_phams.mo_ta','san_phams.gia','loai_san_phams.ten_loai_san_pham','thuong_hieus.ten_thuong_hieu','san_phams.created_at','san_phams.updated_at','san_phams.deleted_at')
            ->where('ten_san_pham', 'LIKE', '%' . $request->search . '%')
            ->onlyTrashed()
            ->get();
            if ($products) {
                foreach ($products as $key => $p) {
                    $output .= '<tr>
                    <td>' . $p->id . '</td>
                    <td>' . $p->ten_san_pham . '</td>
                    <td>' . $p->mo_ta . '</td>
                    <td>' . $p->gia . '</td>
                    <td>' . $p->ten_loai_san_pham . '</td>
                    <td>' . $p->ten_thuong_hieu . '</td>
                    <td>' . $p->created_at . '</td>
                    <td>' . $p->updated_at . '</td>
                    <td>' . $p->deleted_at . '</td>
                    <td style=";width: 20px;">
                     <a href="'.route('sanPham.restore', $p->id).'">
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
