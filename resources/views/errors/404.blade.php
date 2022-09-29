@extends('../frontend.index')
@section('content')
    <div class="not-found mt-top">
        <div class="not-found__wrapper">
            <div class="not-found__wrapper--img">
                <img src={{ asset('./frontend/assets/img/404.svg') }} alt="">
            </div>
            <div class="not-found__wrapper--text">
                <p>
                    OOOPS ! PAGE NOT FOUND
                </p>
                <p>
                    Sorry the page you are looking for does not exist, if you think
                    something is broken, report a problem
                </p>
            </div>
            <div class="not-found__wrapper--btn">
                <button onclick="location.href='/'">Kembali Ke Beranda</button>
            </div>
        </div>
    </div>
@endsection
