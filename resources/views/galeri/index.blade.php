@extends('master.master')
@section('page', 'Galeri')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Galeri</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex">
                                <h3 class="card-title mr-auto">Data Galeri</h3>
                                <a href="{{ route('galleries.create') }}" type="button" class="btn btn-primary">Tambah
                                    Foto</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table">
                                    <thead>
                                        <tr>
                                            <th>Judul</th>
                                            <th>Deskripsi</th>
                                            <th>Foto Cover</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($galleries as $item)
                                            <tr>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->description }}</td>
                                                <td>
                                                    @if ($item->file != '-')
                                                        <img src="{{ config('app.url') . 'file_upload' . $item->file }}"
                                                            width="100">
                                                    @else
                                                        <p>Tidak Ada Foto</p>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
