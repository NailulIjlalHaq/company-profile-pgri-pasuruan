@extends('frontend.index')
@section('content')
    <div class="gallery">
        <div class="gallery-wrapper">
            <div class="gallery__hero">
                <div class="swiper__container">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @foreach ($photos as $p)
                                <div class="swiper-slide">
                                    <div class="swiper__box">
                                        <div alt="" class="swiper__box--img">
                                            <div class="swiper__box--img--content"
                                                style="background-image: url('{{ $p->file }}')"></div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
            <div class="gallery-wrapper__header">
                <p>Galeri</p>
                <p>Terdapat <strong>{{ $photos->total() }} Gambar</strong> yang telah dimasukkan ke dalam website.</p>
            </div>
            <div class="gallery-wrapper__content">
                <div class="gallery-container">
                    @foreach ($photos as $p)
                        <div class="gallery-container-box" onclick="passValue('{{ $p->id_galleries }}')">
                            <div class="gallery-container-box-img" style="background: url('{{ $p->file }}')"></div>
                            <div class="gallery-popup">
                                <div class="gallery-popup__wrapper">
                                    <div class="gallery-popup__wrapper--header">
                                        <div class="gallery-popup__wrapper--header--title">
                                            <p>Detail Foto</p>
                                            <p>
                                                <ion-icon class="btn-close-gallery-popup" name="close"></ion-icon>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="gallery-popup__wrapper--content">
                                        <div class="gallery-popup__wrapper--content__img"></div>
                                        <div class="gallery-popup__wrapper--content__info">

                                            <p class="gallery-popup__wrapper--content__info-title"></p>
                                            <p class="gallery-popup__wrapper--content__info-desc">
                                            </p>
                                        </div>
                                        <div class="gallery-popup__wrapper--content__btn">
                                            <div class="share-btn">
                                                <div class="share-btn-wrapper">
                                                    <div class="share-btn-wrapper-btn share-wa">
                                                        <ion-icon name="logo-whatsapp"></ion-icon>whatsapp
                                                    </div>
                                                    <div class="share-btn-wrapper-btn cp-link">
                                                        <ion-icon name="link-outline"></ion-icon>
                                                        <p class="cp-link-text"></p>
                                                        <div class="alert-cp-link">Link Di Copy</div>
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
                        <input type="hidden" class="idValue{{ $p->id_galleries }}" value="{{ $p->id_galleries }}">
                        <input type="hidden" class="imgValue{{ $p->id_galleries }}" value="{{ $p->file }}">
                        <input type="hidden" class="titleValue{{ $p->id_galleries }}" value="{{ $p->name }}">
                        <input type="hidden" class="descValue{{ $p->id_galleries }}"
                            value="{{ strip_tags($p->description) }}">

                        {{-- popup --}}
                    @endforeach
                </div>
                {{ $photos->links('../vendor/pagination/simple-pgri') }}
            </div>
        </div>
    </div>

@section('js')
    <script>
        $('.gallery-container-box-img').addClass('btn-show-gallery-popup')

        function passValue(id) {
            let gp = 'gallery-popup__wrapper--content'
            $(`.${gp}__img`).css('background', `url('${$(`.imgValue${id}`).val()}')`)
            $(`.${gp}__info-title`).text($(`.titleValue${id}`).val())
            $(`.${gp}__info-desc`).text($(`.descValue${id}`).val())
        }
    </script>
@endsection
@endsection
