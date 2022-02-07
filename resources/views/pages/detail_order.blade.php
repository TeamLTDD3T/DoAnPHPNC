@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Detail Order</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('donHang.index') }}">Order</a></li>
                            <li class="breadcrumb-item active">Detail Order</li>
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
                                <h3 class="card-title">Detail Order Management</h3>
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
                                            <th>Order ID</th>
                                            <th>ProductName</th>
                                            <th>Color</th>
                                            <th>Size</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Review Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($lstctdh as $ctdh)
                                        <tr>
                                            <td>{{ $ctdh->id }}</td>
                                            <td>{{ $ctdh->don_hang_id }}</td>
                                            <td>{{ $ctdh->ten_san_pham }}</td>
                                            <td>{{ $ctdh->ten_mau }}</td>
                                            <td>{{ $ctdh->ten_size }}</td>
                                            <td>{{ $ctdh->so_luong }}</td>
                                            <td>{{ $ctdh->gia }}</td>
                                            @if($ctdh->trang_thai_danh_gia == 1)
                                                <td>Reviewed</td>
                                                @else
                                                <td>Not Yet Review</td>   
                                                @endif
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
