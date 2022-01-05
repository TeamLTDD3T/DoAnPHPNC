@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Product Type</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Product Type</li>
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
                                <h3 class="card-title">Product Type Management</h3>
                                <div style="float: right;margin-left:20px;margin-top: -0.3rem;width: 100px;">
                                    <a href='{{ route('loaiSanPham.create') }}'>
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
                                            <th>Name</th>
                                            <th>Picture</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($lstloaisp as $loai)
                                        <tr>
                                            <td>{{ $loai ->id }}</td>
                                            <td>{{ $loai ->ten_loai_san_pham }}</td>
                                            <td><img src="{{ asset("/storage/$loai->hinh_anh_loai_sp") }}" style="width: 100px;"></td>
                                            <td><span class="tag tag-success">Active</span></td>
                                            <td style=";width: 20px;">
                                                <a href='{{ route('loaiSanPham.edit', ['loaiSanPham' => $loai]) }}'>
                                                    <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i
                                                            class="fas fa-edit"></i>
                                                    </button>
                                                </a>
                                            </td>
                                            <td style="width: 20px;">
                                                <form method="post"
                                                action="{{ route('loaiSanPham.destroy', ['loaiSanPham' => $loai]) }}">
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
