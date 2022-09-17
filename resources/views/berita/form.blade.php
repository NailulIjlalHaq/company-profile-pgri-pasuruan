@extends('master.master')
@section('page', $isEdit?'Edit Berita':'Tambah Berita')
@section('content')
<!-- Content Wrapper. Contains page content -->
<form action="{{$isEdit?route('berita.update',$post->id_posts):route('berita.store')}}" method="POST" enctype="multipart/form-data">
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
                        <a class="btn btn-danger mr-2" href="{{ route('berita.index') }}">
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
                                - Isi <b>Banner</b> selengkap dan sebenar mungkin.<br />
                                - Gunakan <i>button</i>
                                <button class="btn btn-xs btn-info"><span class="fa fa-save"></span> Simpan </button>
                                untuk menambahkan <b>Banner</b>.<br />
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
                                            <label>Judul</label>
                                            <input type="text" class="form-control {{$errors->has('judul')?'is-invalid':''}}" name="judul" id="judul" value="{{isset($post)?$post->title:''}}">
                                            @if($errors->has('judul'))
                                            <div class="invalid-feedback">
                                                {{$errors->first('judul')}}
                                            </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <select class="form-control {{$errors->has('kategori')?'is-invalid':''}}" name="kategori" id="kategori">
                                                <option value=""></option>
                                                @foreach($kategori as $item)
                                                @if(isset($post))
                                                <option value="{{$item->id_categories}}" {{($item->id_categories == $post->id_categories)?'selected':''}}>{{$item->name}}</option>
                                                @else
                                                <option value="{{$item->id_categories}}">{{$item->name}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                            @if($errors->has('kategori'))
                                            <div class="invalid-feedback">
                                                {{$errors->first('kategori')}}
                                            </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Konten</label>
                                            <textarea type="text" class="form-control {{$errors->has('konten')?'is-invalid':''}}" name="konten" id="konten" row="500">
                                                @if(isset($post))
                                                {{$post->content}}
                                                @endif
                                            </textarea>
                                            @if($errors->has('konten'))
                                            <div class="invalid-feedback">
                                                {{$errors->first('konten')}}
                                            </div>
                                            @endif
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col">
                                <div class="row mx-2">
                                    <label>Kata Kunci</label>
                                    <input type="text" class="form-control {{$errors->has('tag')?'is-invalid':''}}" name="tag" id="tag" value="{{isset($post)?$post->tag:''}}">
                                    @if($errors->has('tag'))
                                    <div class="invalid-feedback">
                                        {{$errors->first('tag')}}
                                    </div>
                                    @endif
                                </div>
                                <div class="row mx-2 mt-2">
                                    <label>Cover Foto</label>
                                    <input type="file" class="form-control {{$errors->has('cover_img')?'is-invalid':''}}" name="cover_img" id="cover_img" onchange="readURL(this)">
                                    @if($errors->has('cover_img'))
                                    <div class="invalid-feedback">
                                        {{$errors->first('cover_img')}}
                                    </div>
                                    @endif
                                </div>
                                <div class="row mx-2 text-center mt-3">
                                    <img src="{{isset($post)?asset($post->cover_img):asset('img/insert_image.jpg')}}" class="img-thumbnail" id="preview" style="height:150px;width:100%;object-fit:cover;" />
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
    $(function() {
        $('#konten').summernote({
            height: 400
        });

        $('#kategori').select2({
            placeholder: '--Pilih Kategori--'
        });
    });

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