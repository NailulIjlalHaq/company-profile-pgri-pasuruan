@extends('master.master')
@section('page', 'Kategori')
@section('content')
<div class="content-wrapper row justify-content-center">
    <div class="col-9">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Kategori</h1>
                    </div>
                    <div class="col text-right">
                        <a href="{{ route('kategori.create') }}" type="button" class="btn btn-primary">Tambah
                            Kategori</a>
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
                            <strong>Informasi : </strong> {{session('success')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        @if(session('error'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert" id="alert">
                            <strong>Peringatan : </strong> {{session('error')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <div class="card">
                            <div class="card-body">
                                <table id="example2" class="table table-striped data-table">
                                    <thead>
                                        <tr>
                                            <th>Kategori</th>
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
            searching: false,
            ajax: "{{ route('kategori.index') }}",
            columns: [{
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'action',
                    name: 'action',
                    width: '25%',
                    className: 'text-center',
                    orderable: false,
                    searchable: false
                },
            ]
        });

    });
</script>
@endsection