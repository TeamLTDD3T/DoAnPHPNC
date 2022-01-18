@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Size</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('size.index') }}">Size</a></li>
                            <li class="breadcrumb-item active">Edit Size</li>
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
                            <h3 class="card-title">Form Edit Size</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="{{ route('size.update',['size'=>$size]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="card-body">
                                {{-- <div class="form-group">
                                    <label for="">ID</label>
                                    <input type="id" class="form-control" name="id"
                                        value="1" readonly>
                                </div> --}}
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="id" class="form-control" name="tensize"
                                    value="{{ $size ->ten_size }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select class="form-control">
                                        <option>option 1</option>
                                        <option>option 2</option>
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
