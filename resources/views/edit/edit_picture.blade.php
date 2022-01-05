@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Picture</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Edit Picture</li>
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
                            <h3 class="card-title">Form Edit Picture</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="{{ route('hinhAnh.update',['hinhAnh'=>$hinhAnh]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">ID</label>
                                    <input type="id" class="form-control" name="id"
                                        value="{{ $hinhAnh->id }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="InputFile">File Picture Input</label>
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="customFile" name="file" accept="image/*" >
                                      <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                  </div>
                                <div class="form-group">
                                    <label for="">ID Detail Product</label>
                                    <select class="form-control" name="ctsanpham">
                                        @foreach ($lstctsp as $ctsp)
                                        <option value="{{ $ctsp->id }}" @if($ctsp->id == $hinhAnh->chi_tiet_san_pham_id) selected @endif>
                                            {{ $ctsp->id }}
                                        </option>
                                    @endforeach
                                      </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Avatar</label>
                                    <select class="form-control" name="avatar">
                                        <option value="0" @if($hinhAnh->hinh_dai_dien == 0) selected @endif>Not Avatar</option>
                                        <option value="1" @if($hinhAnh->hinh_dai_dien == 1) selected @endif>Avatar</option>
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
