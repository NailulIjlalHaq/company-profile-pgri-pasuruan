@extends('backend.master.master')
@section('page','404 Tidak ditemukan')
@section('content')
<div class="content-wrapper pt-5">
    <div class="error-page mt-0">
        <h2 class="headline text-warning"> 401</h2>

        <div class="error-content">
            <h3><i class="fas fa-exclamation-triangle text-warning mr-2"></i> Oops! Akses terbatas.</h3>

            <p>
                Anda tidak memiliki akses untuk mengakses halaman atau fitur ini.
                Silahkan, anda kembali halaman dashboard.<br />
                <a href="{{route('dashboard')}}" class="btn btn-primary mt-2 btn-block">Dashboard</a>
            </p>
        </div>
        <!-- /.error-content -->
    </div>
    <!-- /.error-page -->
</div>
@endsection