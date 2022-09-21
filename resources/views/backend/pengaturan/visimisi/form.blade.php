@extends('backend.master.master')
@section('page', 'Visi dan Misi')
@section('content')
<!-- Content Wrapper. Contains page content -->
<form action="{{ route('visimisi.update', $page->id_pages) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
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
                        <a class="btn btn-danger mr-2" href="{{ route('visimisi.index') }}">
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
                                - Isi <b>Visi dan Misi</b> selengkap dan sebenar mungkin.<br />
                                - Gunakan <i>button</i>
                                <button class="btn btn-xs btn-info"><span class="fa fa-save"></span> Simpan </button>
                                untuk menambahkan <b>Visi dan Misi</b>.<br />
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
                            <div class="col">
                                <div class="card card-primary ">
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Visi dan Misi</label>
                                            <textarea type="text" class="form-control {{$errors->has('konten')?'is-invalid':''}}" name="konten" id="konten" row="500">
                                                @if(isset($page))
                                                {{$page->content}}
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