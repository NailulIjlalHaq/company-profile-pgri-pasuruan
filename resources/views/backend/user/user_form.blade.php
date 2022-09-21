@extends('backend.master.master')
@section('page', 'Profil User')
@section('content')
<!-- Content Wrapper. Contains page content -->
<form class="form-horizontal" role="form" action="{{ route('userProfil.update',$user->id) }}" method="post">
    <div class="content-wrapper row justify-content-center">
        <div class="col-8">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6 mt-2">
                            <h1 class="text-dark">
                                <i class="fas fa-books nav-icon text-info"></i> @yield('page')
                            </h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6 mt-2 text-right">
                            <button type="submit" class="btn btn-info">
                                <i class="fa fa-save mr-1"> </i>
                                Simpan Data
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
                        <div class="card">
                            @csrf
                            <div class="card-body form-horizontal">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                    <div class="col">
                                        <input type="text" class="form-control {{$errors->has('nama')?'is-invalid':''}}" name="nama" id="nama" value="{{isset($user)?$user->name:''}}">
                                        @if($errors->has('nama'))
                                        <div class="invalid-feedback ">
                                            {{$errors->first('nama')}}
                                        </div>
                                        @endif
                                    </div>

                                </div>
                                <div class="form-group row bg-light py-3">
                                    <label class="col-sm-3 col-form-label">Email</label>
                                    <div class="col">
                                        <input type="text" class="form-control {{$errors->has('email')?'is-invalid':''}}" name="email" id="email" value="{{isset($user)?$user->email:''}}">
                                        @if($errors->has('email'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('email')}}
                                        </div>
                                        @endif
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Username</label>
                                    <div class="col">
                                        <input type="text" class="form-control {{$errors->has('username')?'is-invalid':''}}" name="username" id="username" value="{{isset($user)?$user->username:''}}">
                                        @if($errors->has('username'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('username')}}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row bg-light py-3">
                                    <label class="col-sm-3 col-form-label">Password</label>
                                    <div class="col">
                                        <input type="password" class="form-control {{$errors->has('password')?'is-invalid':''}}" name="password" id="password">
                                        @if($errors->has('password'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('password')}}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
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
        $('#tipe').select2({
            placeholder: '--Pilih Tipe User--'
        });
    });
</script>
@endsection