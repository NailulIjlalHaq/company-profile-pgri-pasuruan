@extends('frontend.index')
@section('content')
    <div class="detail-artikel-wrapper__header mt-top">
        <div class="detail-artikel-wrapper__header-wrapper">
            <p>
                <ion-icon onclick="location.href='{{ route('feHome') }}'" name="arrow-back-outline"></ion-icon>
            </p>
            <p>Sambutan Kepala PGRI Kab Pasuruan</p>
        </div>
    </div>
    <div class="about__sejarah">
        <div class="about__sejarah-wrapper">
            <div class="about__sejarah-wrapper-img">
            </div>
            <div class="about__sejarah-wrapper-info">
                <p>
                    {{ strip_tags($sambutan->content) }}
                </p>
            </div>
            <div class="about__sejarah-wrapper-btn">
                <div class="share-btn">
                    <div class="share-btn-wrapper">

                        <div class="share-btn-wrapper-btn">
                            <ion-icon name="logo-facebook"></ion-icon>Facebook
                        </div>
                        <div class="share-btn-wrapper-btn">
                            <ion-icon name="logo-whatsapp"></ion-icon>whatsapp
                        </div>
                        <div class="share-btn-wrapper-btn">
                            <ion-icon name="logo-twitter"></ion-icon>twitter
                        </div>
                    </div>
                    <div class="share-btn-share">
                        <ion-icon name="share-social"></ion-icon>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
