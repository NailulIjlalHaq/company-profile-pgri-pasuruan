@extends('frontend.index')
@section('content')
    <div class="about__makna mt-top">
        <div class="about__makna--wrapper">
            <div class="about__makna--wrapper-left">
                <img src={{ asset('./frontend/assets/img/logo.png') }} class="about__makna--wrapper-left-img" />
            </div>
            <div class="about__makna--wrapper-right">
                <div class="about__makna--wrapper-right-top">
                    <div class="title__wrapper">
                        <div class=" card__title">Makna Logo PGRI</div>
                        <div class="title__wrapper--text-3" style="line-height: 1.5">
                            PGRI memiliki lambang yang terdiri dari berbagai unsur, dengan pengertian sebagai berikut:
                            Bentuk lambang adalah segi lima garis lengkung membentuk lima sudut, melambangkan sila-sila
                            dari Pancasila. Ini menunjukkan bahwa IKIP-PGRI mengandung misi kebangsaan</div>
                    </div>
                </div>
                <div class="about__makna--wrapper-right-bot">
                    <img src={{ asset('./frontend/assets/img/logo.png') }} alt="">
                    <p>
                        pgri kab pasuruan
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
