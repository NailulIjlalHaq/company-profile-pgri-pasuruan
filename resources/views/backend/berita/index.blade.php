@extends('backend.master.master')
@section('page','Berita')
@section('content')
<div class="content-wrapper row justify-content-center">
    <div class="col-9 ">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-9">
                        <h1>Berita</h1>
                    </div>
                    <div class="col-sm-3 text-right">
                        <a href="{{route('berita.create')}}" type="button" class="btn btn-primary">Tambah Berita</a>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert" id="alert">
                            <strong>Informasi : {{session('success')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        @if(session('error'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert" id="alert">
                            <strong>Peringatan : {{session('error')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2 " class="table table-striped data-table">
                                    <thead>
                                        <tr>
                                            <th>Judul Berita</th>
                                            <th></th>
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
</div>
@endsection
@section('javascript')
<script type="text/javascript">
    $(function() {
        setTimeout(() => {
            $('#alert').alert('close');
        }, 6000);

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('berita.index') }}",
            columns: [{
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'cover_img',
                    name: 'cover_img',
                    className: 'text-center',
                    orderable: false,
                    searchable: false,
                    width: '25%',
                    render: function(data, type, full, meta) {
                        return "<img src=\"/" + data + "\" class=\"img-thumbnail rounded\" style=\"height: 90px;width:120px;object-fit:cover\">";
                    }
                },

            ]
        });

    });
</script>
@endsection