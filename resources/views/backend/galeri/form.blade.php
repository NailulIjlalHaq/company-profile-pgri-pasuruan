@extends('backend.master.master')
@section('page', $isEdit?'Edit Galeri':'Tambah Galeri')
@section('content')
<!-- Content Wrapper. Contains page content -->
<form action="{{$isEdit?route('galeri.update',$post->id_galleries):route('galeri.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($isEdit)
    @method('PUT')
    @endif
    <div class="content-wrapper row justify-content-center">
        <div class="col-9">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6 mt-2">
                            <h1 class="m-0 text-dark">
                                <i class="fas fa-books nav-icon text-info"></i> @yield('page')
                            </h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6 mt-2 text-right">
                            <a class="btn btn-danger mr-2" href="{{ route('galeri.index') }}">
                                <i class="fa fa-undo mr-1"> </i> Batalkan
                            </a>
                            <button type="submit" class="btn btn-info">
                                <i class="fa fa-save mr-1"> </i>
                                Simpan Postingan
                            </button>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row d-flex flex-column-reverse">
                        <!-- /.row -->
                        <div class="animated fadeInLeft w-100">
                            @if(session('error'))
                            <div class="alert alert-warning">
                                <strong>Kesalahan :</strong> {{session('error')}}
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-8">
                                    <div class="card card-primary ">
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Judul Foto</label>
                                                <input type="text" class="form-control {{$errors->has('name')?'is-invalid':''}}" name="name" id="name" value="{{isset($post)?$post->name:@old('name')}}">
                                                @if($errors->has('name'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('name')}}
                                                </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label>Deskripsi</label>
                                                <textarea type="text" class="form-control text-left {{$errors->has('description')?'is-invalid':''}}" name="description" id="description" style="white-space:normal" rows="10">{{isset($post)?$post->description:@old('description')}}</textarea>
                                                @if($errors->has('description'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('description')}}
                                                </div>
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row mx-2 mt-2">
                                        <label>Foto</label>
                                        <input type="file" class="form-control {{$errors->has('file')?'is-invalid':''}}" name="file" id="file" onchange="readURL(this)">
                                        @if($errors->has('file'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('file')}}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="row mx-2 text-center mt-3">
                                        <img src="{{isset($post)?asset($post->file):asset('img/insert_image.jpg')}}" class="img-thumbnail" id="preview" style="height:150px;width:100%;object-fit:cover;" />
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
</form>
@endsection

@section('javascript')
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#preview').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection