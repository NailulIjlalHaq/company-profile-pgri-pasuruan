@extends('backend.master.master')
@section('page', isset($kategori)?'Edit Kategori':'Tambah Kategori')
@section('content')
<!-- Content Wrapper. Contains page content -->
<form class="form-horizontal" role="form" action="{{ isset($kategori)?route('kategori.update',$kategori->id_categories):route('kategori.store') }}" method="post">
    <div class="content-wrapper row justify-content-center">
        <div class="col-6">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6 mt-2">
                            <h1 class="text-dark">
                                <i class="fas fa-books nav-icon text-info"></i> @yield('page')
                            </h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row d-flex flex-column-reverse">
                        <div class="card">
                            @csrf
                            @if(isset($kategori))
                            @method('PUT')
                            @endif
                            <div class="card-body">
                                <div class="form-group row">
                                    <label>Kategori</label>
                                    <input type="text" class="form-control {{$errors->has('kategori')?'is-invalid':''}}" name="kategori" id="kategori" value="{{isset($kategori)?$kategori->name:@old('kategori')}}">
                                    @if($errors->has('kategori'))
                                    <div class="invalid-feedback">
                                        {{$errors->first('kategori')}}
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a class="btn bg-teal " href="{{ route('kategori.index') }}"><i class="fa fa-undo mr-2"> </i> Kembali</a>
                                <button type="submit" class="btn btn-info ">
                                    <i class="fa fa-save mr-2"></i>Simpan
                                </button>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
</form>
@endsection