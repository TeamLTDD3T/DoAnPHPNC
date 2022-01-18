@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Product</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="home">Home</a></li>
                            <li class="breadcrumb-item active">Product</li>
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
                                <h3 class="card-title">Product Management</h3>
                                <div style="float: right;margin-left:20px;margin-top: -0.3rem;width: 100px;">
                                    <a href='{{ route('sanPham.create') }}'>
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
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Product Type</th>
                                            <th>Brand</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th>Detail</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($lstsp as $sp)
                                            <tr>
                                                <td>{{ $sp->id }}</td>
                                                <td>{{ $sp->ten_san_pham }}</td>
                                                <td>{{ $sp->mo_ta }}</td>
                                                <td>{{ $sp->gia }}</td>
                                                <td>{{ $sp->ten_loai_san_pham }}</td>
                                                <td>{{ $sp->ten_thuong_hieu }}</td>                                              
                                                <td><span class="tag tag-success">Active</span></td>
                                                <td>{{ $sp->created_at }}</td>
                                                <td>{{ $sp->updated_at }}</td>
                                                <td style="width: 20px;">
                                                    <a href='{{ route('sanPham.show', ['sanPham' => $sp]) }}'>
                                                        <button type="button"
                                                            class="btn btn-default btn-sm checkbox-toggle"><i
                                                                class="fas fa-info-circle"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                                <td style=";width: 20px;">
                                                    <a href='{{ route('sanPham.edit', ['sanPham' => $sp]) }}'>
                                                        <button type="button"
                                                            class="btn btn-default btn-sm checkbox-toggle"><i
                                                                class="fas fa-edit"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                                <td style="width: 20px;">
                                                    <form method="post"
                                                        action="{{ route('sanPham.destroy', ['sanPham' => $sp]) }}">
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
