@extends('backend.master.master')
@section('page', $page->title)
@section('content')
<!-- Content Wrapper. Contains page content -->
<form action="{{route('profil.update',$page->id_pages)}}" method="POST">
    @csrf
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
                        <button type="submit" class="btn btn-info">
                            <i class="fa fa-save mr-1"> </i>
                            Simpan Profil
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
                        <div class="row">
                            <div class="col-12">
                                <div class="card card-primary ">
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body">
                                        <input type="hidden" name="title" id="title" value="{{isset($page)?$page->title:''}}">
                                        <div class="form-group">
                                            <label>
                                                Deskripsi
                                                @if($errors->has('deskripsi'))
                                                <code>
                                                    {{$errors->first('deskripsi')}}
                                                </code>
                                                @endif
                                            </label>
                                            <textarea type="text" class="form-control {{$errors->has('deskripsi')?'is-invalid':''}}" name="deskripsi" id="deskripsi" row="500">
                                                @if(isset($page))
                                                {{$page->content}}
                                                @endif
                                            </textarea>
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
        setTimeout(() => {
            $('#alert').alert('close');
        }, 6000);

        $('#deskripsi').summernote({
            height: 400
        });
    });
</script>
@endsection