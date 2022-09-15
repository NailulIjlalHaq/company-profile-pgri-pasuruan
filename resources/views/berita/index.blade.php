@extends('master.master')
@section('page','Berita')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Berita</h1>
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
                                <h3 class="card-title mr-auto">Data Berita</h3>
                                <a href="{{route('berita.create')}}" type="button" class="btn btn-primary">Tambah Berita</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2 " class="table table-bordered data-table">
                                    <thead>
                                        <tr>
                                            <th>Judul</th>
                                            <th>Foto Cover</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
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
@section('javascript')
<script type="text/javascript">
    $(function () {
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('berita.index') }}",
        columns: [
            {data: 'title', name: 'title'},
            {data: 'cover_img', name: 'cover_img'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    
  });
</script>
@endsection