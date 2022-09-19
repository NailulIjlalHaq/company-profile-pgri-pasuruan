@extends('backend.master.master')
@section('page', $isEdit?'Edit Galeri':'Tambah Galeri')
@section('content')
<!-- Content Wrapper. Contains page content -->
<form action="{{$isEdit?route('galeri.update',$post->id_galleries):route('galeri.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($isEdit)
    @method('PUT')
    @endif
    <div class="content-wrapper">
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
                        <div class="alert alert-light alert-dismissible fade show mb-1" role="alert">
                            <h5 class="alert-heading"> Keterangan : </h5>
                            <p>
                                - Isi <b>Galeri</b> selengkap dan sebenar mungkin.<br />
                                - Gunakan <i>button</i>
                                <button class="btn btn-xs btn-info"><span class="fa fa-save"></span> Simpan </button>
                                untuk menambahkan <b>Galeri</b>.<br />
                                Untuk <b>Keterangan</b> dan <b>Informasi</b> lebih lanjut silahkan hubungi <b>Bagian IT
                                    (Information &amp; Technology)</b>
                            </p>
                        </div>
                        @if(session('error'))
                        <div class="alert alert-warning">
                            <strong>Kesalahan :</strong> {{session('error')}}
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-9">
                                <div class="card card-primary ">
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Judul Foto</label>
                                            <input type="text" class="form-control {{$errors->has('name')?'is-invalid':''}}" name="name" id="name" value="{{isset($post)?$post->name:''}}">
                                            @if($errors->has('name'))
                                            <div class="invalid-feedback">
                                                {{$errors->first('name')}}
                                            </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi Foto</label>
                                            <textarea type="text" class="form-control {{$errors->has('description')?'is-invalid':''}}" name="description" id="konten" row="500">
                                                @if(isset($post))
                                                {{$post->description}}
                                                @endif
                                            </textarea>
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