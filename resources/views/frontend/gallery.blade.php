@extends('frontend.index')
@section('content')
    <div class="gallery">
        <div class="gallery-wrapper">

            <div class="gallery__hero">
                <div class="swiper__container">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="swiper__box">
                                    <div alt="" class="swiper__box--img">
                                        <div class="swiper__box--img--content"
                                            style="background-image: url(../frontend/assets/img/kantin.jpg)"></div>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper__box">
                                    <div alt="" class="swiper__box--img">
                                        <div class="swiper__box--img--content"
                                            style="background-image: url(../frontend/assets/img/sawah.jpg)"></div>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper__box">
                                    <div alt="" class="swiper__box--img">
                                        <div class="swiper__box--img--content"
                                            style="background-image: url(../frontend/assets/img/gedung.jpg)"></div>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper__box">
                                    <div alt="" class="swiper__box--img">
                                        <div class="swiper__box--img--content"
                                            style="background-image: url(../frontend/assets/img/aula.jpg)"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
            <div class="gallery-wrapper__header">
                <p>Gallery</p>
                <p>10,000+ outstanding news photos</p>
            </div>
            <div class="gallery-wrapper__content">
                <div class="gallery-container">
                    @foreach ($photos as $p)
                        <div class="gallery-container-box">
                            <div class="gallery-container-box-img" style="background: url('{{ $p->file }}')"></div>
                            <h1>{{ $p->description }}</h1>
                        </div>
                    @endforeach

                    {{-- popup --}}
                    <div class="gallery-popup">
                        <div class="gallery-popup__wrapper">
                            <div class="gallery-popup__wrapper--header">
                                <div class="gallery-popup__wrapper--header--title">
                                    <p>Detail Artikel</p>
                                    <p>
                                        <ion-icon class="btn-close-gallery-popup" name="close"></ion-icon>
                                    </p>
                                </div>
                            </div>
                            <div class="gallery-popup__wrapper--content">
                                <div class="gallery-popup__wrapper--content__img"
                                    style="background: url({{ asset('./frontend/assets/img/juara.jpg') }})"></div>
                                <div class="gallery-popup__wrapper--content__info">

                                    <p>Foto Title</p>
                                    <p>
                                        Melbourne based Illustrator & Designer Ken Taylor works primarily within the music
                                        industry and
                                        is predominantly well known for his striking rock posters. Ken started in Perth
                                        Western
                                        Australia doing posters and album
                                        artwork for local bands.
                                    </p>
                                </div>
                                <div class="gallery-popup__wrapper--content__btn">
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
                    </div>
                </div>
            </div>
        </div>
    </div>

@section('js')
    <script>
        for (let i = 0; i < 8; i++) {
            $('.gallery-container').append(
                ``
            )
        }



        $('.gallery-container-box-img').addClass('btn-show-gallery-popup')
    </script>
@endsection
@endsection
