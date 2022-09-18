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
                                            style="background-image: url(../assets/img/kantin.jpg)"></div>
                                    </div>
                                    <div class="swiper__box--text">Kantin</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper__box">
                                    <div alt="" class="swiper__box--img">
                                        <div class="swiper__box--img--content"
                                            style="background-image: url(../assets/img/sawah.jpg)"></div>
                                    </div>
                                    <div class="swiper__box--text">Sawah</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper__box">
                                    <div alt="" class="swiper__box--img">
                                        <div class="swiper__box--img--content"
                                            style="background-image: url(../assets/img/gedung.jpg)"></div>
                                    </div>
                                    <div class="swiper__box--text">Gedung</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper__box">
                                    <div alt="" class="swiper__box--img">
                                        <div class="swiper__box--img--content"
                                            style="background-image: url(../assets/img/aula.jpg)"></div>
                                    </div>
                                    <div class="swiper__box--text">aula</div>
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

                </div>
            </div>
        </div>
    </div>

@section('js')
    <script>
        for (let i = 0; i < 8; i++) {
            $('.gallery-container').append(
                `<div class="gallery-container-box"> 
                    <div class="gallery-container-box-img" style="background: url({{ asset('./assets/img/juara.jpg') }})"></div>
                </div>`
            )
        }
    </script>
@endsection
@endsection
