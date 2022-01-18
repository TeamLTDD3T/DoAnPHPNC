@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Update Status Order</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('donHang.index') }}">Order</a></li>
                        <li class="breadcrumb-item active">Update Status Order</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Form Update Status Order</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{ route('donHang.update', ['donHang' => $dh]) }}">
                    @csrf
                    @method('PATCH')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Status Order</label>
                            <select class="form-control" name="trangthai">
                                <option value="0" @if ($dh->trang_thai==0) selected @endif>Đang xử lý</option>
                                <option value="1" @if ($dh->trang_thai==1) selected @endif>Đã xử lý</option>
                                <option value="2" @if ($dh->trang_thai==2) selected @endif>Đang giao</option>
                                <option value="3" @if ($dh->trang_thai==3) selected @endif>Đã giao</option>
                                <option value="4" @if ($dh->trang_thai==4) selected @endif>Đã hủy</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" style="width: 100%">Submit</button>
                    </div>
                </form>
            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>
@endsection