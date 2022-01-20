<?php

namespace App\Http\Controllers;

use App\Models\LoaiSanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoaiSanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $lstloaisp=LoaiSanPham::all();
        if ($request->has('view_deleted')) {
            $lstloaisp = LoaiSanPham::onlyTrashed()->get();
        }
        return view('pages.product_type',['lstloaisp'=>$lstloaisp]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add.add_product_type');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLoaiSanPhamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $loaiSanPham= new LoaiSanPham;
        $loaiSanPham->fill([
            'ten_loai_san_pham'=>$request->input('tenlsp'),
            'hinh_anh_loai_sp'=>'',
        ]);
        $loaiSanPham->save();
        if ($request->hasFile('file'))
        {
            $loaiSanPham->hinh_anh_loai_sp = $request->file('file')->store('image/'.$loaiSanPham->id, 'public');
        }
        $loaiSanPham->save();
        return Redirect::route('loaiSanPham.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */
    public function show(LoaiSanPham $loaiSanPham)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */
    public function edit(LoaiSanPham $loaiSanPham)
    {
        return view('edit.edit_product_type',['loaiSanPham'=>$loaiSanPham]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLoaiSanPhamRequest  $request
     * @param  \App\Models\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoaiSanPham $loaiSanPham)
    {
        if ($request->hasFile('file'))
        {
            $loaiSanPham->hinh_anh_loai_sp = $request->file('file')->store('image/'.$loaiSanPham->id, 'public');
        }
        $loaiSanPham->fill([
            'ten_loai_san_pham'=>$request->input('tenlsp'),
        ]);
        $loaiSanPham->save();

        // $hinhAnh->save();
        return Redirect::route('loaiSanPham.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoaiSanPham $loaiSanPham)
    {
        $loaiSanPham->delete();
        return Redirect::route('loaiSanPham.index');
    }

    public function restore($id)
    {
        LoaiSanPham::withTrashed()->find($id)->restore();

        return back();
    }

    public function restoreAll()
    {
        LoaiSanPham::onlyTrashed()->restore();

        return back();
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $producttypes = LoaiSanPham::where('ten_loai_san_pham', 'LIKE', '%' . $request->search . '%')->get();
            if ($producttypes) {
                foreach ($producttypes as $key => $pdt) {
                    $output .= '<tr>
                    <td>' . $pdt->id . '</td>
                    <td>' . $pdt->ten_loai_san_pham . '</td>
                    <td><img src="{{ asset("/storage/'.$pdt->hinh_anh_loai_sp.'") }}" style="width: 100px;"></td>
                    <td>' . $pdt->created_at . '</td>
                    <td>' . $pdt->updated_at . '</td>
                    <td style=";width: 20px;">
                     <a href="'.route("loaiSanPham.edit", ["loaiSanPham" =>$pdt]).'">
                     <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fas fa-edit"></i></button>
                     </a>
                     </td>
                     <td style="width: 20px;">
                     <form method="post" action="'.route("loaiSanPham.destroy", ["loaiSanPham" =>$pdt]).'">
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
}
