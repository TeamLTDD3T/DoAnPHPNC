<?php

namespace App\Http\Controllers;

use App\Models\LoaiTaiKhoan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoaiTaiKhoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 
        $lstltk=LoaiTaiKhoan::all();
        if ($request->has('view_deleted')) {
            $lstltk = LoaiTaiKhoan::onlyTrashed()->get();
        } 
        return view('pages.account_type',['lstltk'=>$lstltk]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add.add_account_type');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLoaiTaiKhoanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $loaiTaiKhoan= new LoaiTaiKhoan;
        $loaiTaiKhoan->fill([
            'ten_loai_tai_khoan'=>$request->input('tenltk'),
        ]);
        $loaiTaiKhoan->save();
        return Redirect::route('loaiTaiKhoan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LoaiTaiKhoan  $loaiTaiKhoan
     * @return \Illuminate\Http\Response
     */
    public function show(LoaiTaiKhoan $loaiTaiKhoan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LoaiTaiKhoan  $loaiTaiKhoan
     * @return \Illuminate\Http\Response
     */
    public function edit(LoaiTaiKhoan $loaiTaiKhoan)
    {
        return view('edit.edit_account_type',['loaiTaiKhoan'=>$loaiTaiKhoan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLoaiTaiKhoanRequest  $request
     * @param  \App\Models\LoaiTaiKhoan  $loaiTaiKhoan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoaiTaiKhoan $loaiTaiKhoan)
    {
        $loaiTaiKhoan->fill([
            'ten_loai_tai_khoan'=>$request->input('tenltk'),
        ]);
        $loaiTaiKhoan->save();
        return Redirect::route('loaiTaiKhoan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LoaiTaiKhoan  $loaiTaiKhoan
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoaiTaiKhoan $loaiTaiKhoan)
    {
        $loaiTaiKhoan->delete();
        return Redirect::route('loaiTaiKhoan.index');
    }

    public function restore($id)
    {
        LoaiTaiKhoan::withTrashed()->find($id)->restore();
  
        return back();
    }  
  
    public function restoreAll()
    {
        LoaiTaiKhoan::onlyTrashed()->restore();
  
        return back();
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $accounttypes = LoaiTaiKhoan::where('ten_loai_tai_khoan', 'LIKE', '%' . $request->search . '%')
            ->get();
            if ($accounttypes) {
                foreach ($accounttypes as $key => $ltk) {
                    $output .= '<tr>
                    <td>' . $ltk->id . '</td>
                    <td>' . $ltk->ten_loai_tai_khoan . '</td>
                    <td>' . $ltk->created_at . '</td>
                    <td>' . $ltk->updated_at . '</td>
                    <td style=";width: 20px;">
                     <a href="'.route('loaiTaiKhoan.edit', ['loaiTaiKhoan' => $ltk]).'">
                     <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fas fa-edit"></i></button>
                     </a>
                     </td>
                     <td style="width: 20px;">
                     <form method="post" action="'.route('loaiTaiKhoan.destroy', ['loaiTaiKhoan' => $ltk]).'">
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

    public function searchLoaiTaiKhoanXoa(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $accounttypes = LoaiTaiKhoan::where('ten_loai_tai_khoan', 'LIKE', '%' . $request->search . '%')
            ->onlyTrashed()
            ->get();
            if ($accounttypes) {
                foreach ($accounttypes as $key => $ltk) {
                    $output .= '<tr>
                    <td>' . $ltk->id . '</td>
                    <td>' . $ltk->ten_loai_tai_khoan . '</td>
                    <td>' . $ltk->created_at . '</td>
                    <td>' . $ltk->updated_at . '</td>
                    <td>' . $ltk->deleted_at . '</td>
                    <td style=";width: 20px;">
                     <a href="'.route('loaiTaiKhoan.restore', $ltk->id).'">
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
