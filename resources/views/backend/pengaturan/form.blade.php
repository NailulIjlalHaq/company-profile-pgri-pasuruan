@extends('backend.master.master')
@section('page', 'Pengaturan Website')
@section('content')
<!-- Content Wrapper. Contains page content -->
<form action="{{route('pengaturan.store')}}" method="POST">
    @csrf
    <div class="content-wrapper row justify-content-center">
        <div class="col-8">
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
                            <button type="submit" class="btn btn-info">
                                <i class="fa fa-save mr-1"> </i>
                                Simpan Pengaturan
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
                                <strong>Peringatan : {{session('error')}}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-12">
                                    <div class="card card-primary ">
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <div class="card-body form-horizontal">
                                            @foreach ($configs as $config )

                                            <div class="form-group row {{$config->id_configs % 2 ? 'bg-light py-3':''}}">
                                                <label for="label" class="col-sm-2 col-form-label text-capitalize">{{$config->title}}</label>
                                                <div class="col">
                                                    <input type="hidden" name="id[{{$config->id_configs}}]" value="{{$config->id_configs}}">
                                                    <input type="text" name="value[{{$config->id_configs}}]" class="form-control" value="{{$config->data}}">
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="card-footer">
                                            <div class="alert bg-gray mb-0">
                                                <strong>Catatan : </strong>
                                                <p class="m-0">
                                                    Silahkan mengisi data pada form pengaturan secara lengkap.
                                                </p>
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
    </div>
</form>
@endsection

@section('javascript')
<script type="text/javascript">
    $(function() {
        setTimeout(() => {
            $('#alert').alert('close');
        }, 6000);

        $('#deskripsi').summernote({
            height: 400
        });
    });
</script>
@endsection