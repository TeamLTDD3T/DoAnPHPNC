<?php

namespace App\Http\Controllers;

use App\Models\TaiKhoan;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Http\Requests\UpdateTaiKhoanRequest;
use App\Models\LoaiTaiKhoan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TaiKhoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $lsttk = TaiKhoan::join('loai_tai_khoans', 'loai_tai_khoans.id', '=', 'tai_khoans.loai_tai_khoan_id')
            ->select('tai_khoans.id', 'tai_khoans.email', 'tai_khoans.hoten', 'tai_khoans.ngaysinh', 'tai_khoans.diachi', 'tai_khoans.sdt', 'loai_tai_khoans.ten_loai_tai_khoan', 'token', 'tai_khoans.created_at', 'tai_khoans.updated_at')
            ->get();
        if ($request->has('view_deleted')) {
            $lsttk = TaiKhoan::onlyTrashed()->get();
        }
        return view('pages.account', ['lsttk' => $lsttk]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lstltk = LoaiTaiKhoan::all();
        return view('add.add_account', ['lstltk' => $lstltk]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTaiKhoanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
            'sdt' => 'required|regex:/(09)[0-9]{8}/',
            'hoten' => 'required|max:255',
            'diachi' => 'max:255',
        ]);
        $tonTai = TaiKhoan::where('email', $request['email'])->first();
        if (empty($tonTai)) {
            $taiKhoan = TaiKhoan::insert([
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
                'hoten' => $request->input('hoten'),
                'ngaysinh' => $request->input('ngaysinh'),
                'diachi' => $request->input('diachi'),
                'sdt' => $request->input('sdt'),
                'loai_tai_khoan_id' => $request->input('loaitk'),
                'token' => Str::random(60),
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at' => null,
            ]);
            return Redirect::route('taiKhoan.index');
        }
        $alert = 'Email already in use';
        return redirect()->back()->with('alert', $alert);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TaiKhoan  $taiKhoan
     * @return \Illuminate\Http\Response
     */
    public function show(TaiKhoan $taiKhoan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TaiKhoan  $taiKhoan
     * @return \Illuminate\Http\Response
     */
    public function edit(TaiKhoan $taiKhoan)
    {
        $lstltk = LoaiTaiKhoan::all();
        return view('edit.edit_account', ['taiKhoan' => $taiKhoan, 'lstltk' => $lstltk]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTaiKhoanRequest  $request
     * @param  \App\Models\TaiKhoan  $taiKhoan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TaiKhoan $taiKhoan)
    {
        $validatedData = $request->validate([
            'sdt' => 'required|regex:/(09)[0-9]{8}/',
            'hoten' => 'required|max:255',
            'diachi' => 'max:255',
        ]);
        $taiKhoan->fill([
            'hoten' => $request->input('hoten'),
            'ngaysinh' => $request->input('ngaysinh'),
            'diachi' => $request->input('diachi'),
            'sdt' => $request->input('sdt'),
            'loai_tai_khoan_id' => $request->input('loaitk'),
        ]);
        $taiKhoan->save();
        return Redirect::route('taiKhoan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TaiKhoan  $taiKhoan
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaiKhoan $taiKhoan)
    {
        $taiKhoan->delete();
        return Redirect::route('taiKhoan.index');
    }

    public function restore($id)
    {
        TaiKhoan::withTrashed()->find($id)->restore();

        return back();
    }

    public function restoreAll()
    {
        TaiKhoan::onlyTrashed()->restore();

        return back();
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $accounts = TaiKhoan::join('loai_tai_khoans', 'loai_tai_khoans.id', '=', 'tai_khoans.loai_tai_khoan_id')
            ->select('tai_khoans.id', 'tai_khoans.email', 'tai_khoans.hoten', 'tai_khoans.ngaysinh', 'tai_khoans.diachi', 'tai_khoans.sdt', 'loai_tai_khoans.ten_loai_tai_khoan', 'token', 'tai_khoans.created_at', 'tai_khoans.updated_at')
            ->where('email', 'LIKE', '%' . $request->search . '%')
            ->get();
            if ($accounts) {
                foreach ($accounts as $key => $tk) {
                    $output .= '<tr>
                    <td>' . $tk->id . '</td>
                    <td>' . $tk->email . '</td>
                    <td>' . $tk->hoten . '</td>
                    <td>' . $tk->ngaysinh . '</td>
                    <td>' . $tk->diachi . '</td>
                    <td>' . $tk->sdt . '</td>
                    <td>' . $tk->ten_loai_tai_khoan . '</td>
                    <td>' . $tk->created_at . '</td>
                    <td>' . $tk->updated_at . '</td>
                    <td style=";width: 20px;">
                     <a href="'.route('taiKhoan.edit', ['taiKhoan' => $tk]).'">
                     <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fas fa-edit"></i></button>
                     </a>
                     </td>
                     <td style="width: 20px;">
                     <form method="post" action="'.route('taiKhoan.destroy', ['taiKhoan' => $tk]).'">
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

    public function searchTaiKhoanXoa(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $accounts = TaiKhoan::join('loai_tai_khoans', 'loai_tai_khoans.id', '=', 'tai_khoans.loai_tai_khoan_id')
            ->select('tai_khoans.id', 'tai_khoans.email', 'tai_khoans.hoten', 'tai_khoans.ngaysinh', 'tai_khoans.diachi', 'tai_khoans.sdt', 'loai_tai_khoans.ten_loai_tai_khoan', 'token', 'tai_khoans.created_at', 'tai_khoans.updated_at','tai_khoans.deleted_at')
            ->where('email', 'LIKE', '%' . $request->search . '%')
            ->onlyTrashed()
            ->get();
            if ($accounts) {
                foreach ($accounts as $key => $tk) {
                    $output .= '<tr>
                    <td>' . $tk->id . '</td>
                    <td>' . $tk->email . '</td>
                    <td>' . $tk->hoten . '</td>
                    <td>' . $tk->ngaysinh . '</td>
                    <td>' . $tk->diachi . '</td>
                    <td>' . $tk->sdt . '</td>
                    <td>' . $tk->ten_loai_tai_khoan . '</td>
                    <td>' . $tk->created_at . '</td>
                    <td>' . $tk->updated_at . '</td>
                    <td>' . $tk->deleted_at . '</td>
                    <td style=";width: 20px;">
                     <a href="'.route('taiKhoan.restore', $tk->id).'">
                     <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fas fa-edit"></i></button>
                     </a>
                     </td>
                    </tr>';
                }
            }

            return Response($output);
        }
    }
}
