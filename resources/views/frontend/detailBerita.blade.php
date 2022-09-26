@extends('frontend.index')
@section('content')
    <div class="detail-berita">
        <div class="detail-berita-wrapper">
            <div class="detail-berita-wrapper__header">
                <div class="detail-berita-wrapper__header-wrapper">
                    <p>
                        <ion-icon onclick="location.href='{{ route('feBerita') }}'" name="arrow-back-outline"></ion-icon>
                    </p>
                    <p>Detail Berita</p>
                </div>
            </div>
            <div class="detail-berita-wrapper__content">
                <div class="detail-berita-wrapper__content--pri">
                    <div class="detail-berita-info">
                        <div class="detail-berita-info--title">
                            <p>{{ substr($item->created_at, 0, 10) }}</p>
                            <p>
                                {{ $item->title }}
                            </p>
                        </div>
                        <div class="detail-berita-info--img">
                            <div class="detail-berita-info--img-img" style="background: url('/{{ $item->cover_img }}')">
                            </div>
                        </div>
                        <div class="detail-berita-info--info">
                            <p>
                                {{ strip_tags($item->content) }}
                            </p>
                        </div>
                        <div class="detail-berita-info--btn">
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
                <div class="detail-berita-wrapper__content--sec">
                    <h1 class="detail-berita-wrapper__content--sec-title">Berita Lainya</h1>
                    <hr class="detail-berita-wrapper__content--sec-line">

                    @foreach ($berita as $item)
                        <a
                            href="{{ route('feDetailBerita', ['id' => $item->id_posts, 'slug' => Str::of($item->title)->slug('-')]) }}">
                            <div class="berita-box">

                                <div class="berita-box__left" style="background: url(/{{ $item->cover_img }})">
                                </div>
                                <div class="berita-box__right">
                                    <div class="berita-box__right--title">{{ $item->title }}</div>
                                    <div class="berita-box__right--desc">{{ strip_tags($item->content) }}</div>
                                    <div class="berita-box__right--bottom">
                                        <p>{{ $item->created_at }}</p>
                                        <p>
                                            <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                    <hr class="detail-berita-wrapper__content--sec-line">
                </div>
            </div>
        </div>
    </div>
@endsection
