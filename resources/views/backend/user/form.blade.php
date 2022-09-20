@extends('backend.master.master')
@section('page', isset($user)?'Edit User':'Tambah User')
@section('content')
<!-- Content Wrapper. Contains page content -->
<form class="form-horizontal" role="form" action="{{ isset($user)?route('user.update',$user->id):route('user.store') }}" method="post">
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
                            <a class="btn btn-danger mr-2" href="{{ route('user.index') }}">
                                <i class="fa fa-undo mr-1"> </i> Batalkan
                            </a>
                            <button type="submit" class="btn btn-info">
                                <i class="fa fa-save mr-1"> </i>
                                Simpan
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
                            @if(isset($user))
                            @method('PUT')
                            @endif
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control {{$errors->has('nama')?'is-invalid':''}}" name="nama" id="nama" value="{{isset($user)?$user->name:''}}">
                                    @if($errors->has('nama'))
                                    <div class="invalid-feedback ">
                                        {{$errors->first('nama')}}
                                    </div>
                                    @endif
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label>Email</label>
                                        <input type="text" class="form-control {{$errors->has('email')?'is-invalid':''}}" name="email" id="email" value="{{isset($user)?$user->email:''}}">
                                        @if($errors->has('email'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('email')}}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="col">
                                        <label>Tipe User</label>
                                        <select class="form-control {{$errors->has('tipe')?'is-invalid':''}}" name="tipe" id="tipe">
                                            <option value=""></option>
                                            <option value="{{isset($user)?$user->is_admin:'1'}}" {{isset($user)?($user->is_admin == 1)?'selected':'':''}}>Administrator</option>
                                            <option value="{{isset($user)?$user->is_admin:'0'}}" {{isset($user)?($user->is_admin == 0)?'selected':'':''}}>Penulis</option>
                                        </select>
                                        @if($errors->has('tipe'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('tipe')}}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label>Username</label>
                                        <input type="text" class="form-control {{$errors->has('username')?'is-invalid':''}}" name="username" id="username" value="{{isset($user)?$user->username:''}}">
                                        @if($errors->has('username'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('username')}}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="col">
                                        <label>Password</label>
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
                                <div class="alert bg-gray mb-0">
                                    <strong>Catatan : </strong>
                                    <p class="m-0">
                                        Silahkan isi semua data pada form ini untuk menambahkan atau mengedit user sistem
                                    </p>
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
        $('#tipe').select2({
            placeholder: '--Pilih Tipe User--'
        });
    });
</script>
@endsection