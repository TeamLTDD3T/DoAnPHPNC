@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Product</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Add Product</li>
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
                            <h3 class="card-title">Form Add Product</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="{{ route('sanPham.store') }}">
                            @csrf
                            <div class="card-body">
                                {{-- <div class="form-group">
                                    <label for="">ID</label>
                                    <input type="id" class="form-control" id=""
                                        value="2" readonly>
                                </div> --}}
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" id="" name="tensp"
                                        placeholder="Name Product">
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea class="form-control" rows="3" placeholder="Enter ..." name="mota"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Price</label>
                                    <input type="number" class="form-control" name="gia"
                                        placeholder="Price Product" min="0" value="0">
                                </div>
                                {{-- <div class="form-group">
                                    <label for="InputFile">File Picture Input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="InputFile">
                                            <label class="custom-file-label" for="InputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="form-group">
                                    <label for="">Product Types</label>
                                    <select class="form-control" name="loaisp">
                                        @foreach ($lstloai as $loai)
                                            <option value="{{ $loai->id }}">
                                                {{ $loai->ten_loai_san_pham }}
                                            </option>
                                        @endforeach
                                      </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Brands</label>
                                    <select class="form-control" name="thuonghieu">
                                        @foreach ($lstthuonghieu as $thuonghieu)
                                        <option value="{{ $thuonghieu->id }}">
                                            {{ $thuonghieu->ten_thuong_hieu }}
                                        </option>
                                    @endforeach
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
