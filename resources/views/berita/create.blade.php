@extends('master.master')
@section('page', 'Tambah Berita')
@section('content')
    <!-- Content Wrapper. Contains page content -->
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
                        <div class="card card-primary ">
                            <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-ballot"></i> Input Berita</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" role="form" action="{{ route('berita.store') }}"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            <p>{{ session('success') }}</p>
                                        </div>
                                    @endif
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Judul</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="title" id="title">
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <div class="form-group row w-100 mr-2">
                                            <label class="col-sm-3 col-form-label">Konten</label>
                                            <div class="col-sm-12">
                                                <textarea type="text" class="form-control" name="content" id="content"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row w-100 ml-2">
                                            <label class="col-sm-3 col-form-label">Kategori</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="id_categories"
                                                    id="id_categories">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row-reverse">
                                        <div class="form-group row w-100 ml-2">
                                            <label class="col-sm-3 col-form-label">Kata Kunci</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="tag" id="tag">
                                            </div>
                                        </div>
                                        <div class="form-group row w-100 mr-2">
                                            <label class="col-sm-3 col-form-label">Cover Foto</label>
                                            <div class="col-sm-12">
                                                <input type="file" class="form-control" name="cover_img" id="cover_img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex w-100 justify-content-end">
                                        <div class="form-group row w-50">
                                            <label class="col-sm-3 col-form-label">Focus</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="is_focus" id="is_focus">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info float-right ml-3"><i class="fa fa-save"> </i>
                                        Simpan</button>
                                    <a class="btn btn-danger float-right" href="{{ route('berita.index') }}"><i
                                            class="fa fa-undo"> </i> Kembali</a>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>
                    </div>
                    <div class="animated w-100">
                        <div class="callout callout-info">
                            <h4><span class="fa fa-info-circle text-danger"></span> Petunjuk dan Bantuan</h4>
                            <ol>
                                <li>
                                    Isi <b>Banner</b> selengkap dan sebenar mungkin.
                                </li>
                                <li>
                                    Gunakan <i>button</i>
                                    <button class="btn btn-xs btn-info"><span class="fa fa-save"></span> Simpan </button>
                                    untuk menambahkan <b>Banner</b>.
                                </li>
                            </ol>
                            <p>
                                Untuk <b>Keterangan</b> dan <b>Informasi</b> lebih lanjut silahkan hubungi <b>Bagian IT
                                    (Information &amp; Technology)</b>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
