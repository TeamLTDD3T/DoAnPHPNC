@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Detail Product</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('sanPham.index') }}">Product</a></li>
                            <li class="breadcrumb-item active">Detail Product</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Detail Product Management</h3>
                                <div style="float: right;margin-left:20px;margin-top: -0.3rem;width: 100px;">
                                    <a href='{{ route('chiTietSanPham.create', ['sanPham' => $sanPham]) }}'>
                                        <button type="button" class="btn btn-block btn-default btn-sm">Add</button>
                                    </a>
                                </div>
                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right"
                                            placeholder="Search">

                                        <div class="input-group-append">

                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0" style="height: 480px;">
                                <table class="table table-head-fixed text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>ID Product</th>
                                            <th>Color</th>
                                            <th>Size</th>
                                            <th>Quantity</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($lstCTSanPham as $ctsp)
                                        <tr>
                                            <td>{{ $ctsp->id }}</td>
                                            <td>{{ $ctsp->san_pham_id }}</td>
                                            <td>{{ $ctsp->ten_mau }}</td>
                                            <td>{{ $ctsp->ten_size }}</td>
                                            <td>{{ $ctsp->so_luong }}</td>
                                            <td><span class="tag tag-success">Active</span></td>
                                            <td>{{ $ctsp ->created_at }}</td>
                                            <td>{{ $ctsp ->updated_at }}</td>
                                            <td style=";width: 20px;">
                                                <a href='{{ route('chiTietSanPham.edit', ['chiTietSanPham' => $ctsp]) }}'>
                                                    <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i
                                                            class="fas fa-edit"></i>
                                                    </button>
                                                </a>
                                            </td>
                                            <td style="width: 20px;">
                                                <form method="post"
                                                        action="{{ route('chiTietSanPham.destroy', ['chiTietSanPham' => $ctsp,'sanPham'=>$sanPham]) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-default btn-sm checkbox-toggle"><i
                                                                class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
    @endsection