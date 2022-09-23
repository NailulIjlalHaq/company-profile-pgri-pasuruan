<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css?v=3.2.0')}}">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="alert">
            <strong>Informasi : </strong> <br />{{session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @if(session('error'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert" id="alert">
            <strong>Peringatan : </strong> <br />{{session('error')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <h4><b>Login</b> User</h4>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Silahkan masukkan username dan password anda.</p>
                <form action="{{route('login.check')}}" method="post">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="username" class="form-control {{$errors->has('username')?'is-invalid':''}}" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    @if($errors->has('username'))
                    <div class="text-danger mt-0">{{$errors->first('username')}}</div>
                    @endif
                    <div class="input-group mt-3">
                        <input type="password" name="password" class="form-control {{$errors->has('password')?'is-invalid':''}}" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    @if($errors->has('password'))
                    <div class="text-danger mt-0">{{$errors->first('password')}}</div>
                    @endif


                    <div class="social-auth-links text-center mt-3 mb-3">
                        <button type="submit" class="btn btn-block btn-primary">
                            <i class="fa fa-arrow-right mr-2"></i> Log In
                        </button>
                    </div>
                </form>
                <!-- <p class="mb-1">
                    <a href="forgot-password.html">Lupa Password</a>
                </p> -->

            </div>

        </div>

    </div>


    <script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>

    <script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('backend/dist/js/adminlte.min.js?v=3.2.0')}}"></script>

    <script>
        $(function() {
            setTimeout(() => {
                $('#alert').alert('close');
            }, 6000);
        });
    </script>
</body>

</html>