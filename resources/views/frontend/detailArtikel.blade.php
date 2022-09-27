@extends('frontend.index')
@section('content')
    <div class="detail-artikel">
        <div class="detail-artikel-wrapper">
            <div class="detail-artikel-wrapper__header">
                <div class="detail-artikel-wrapper__header-wrapper">
                    <p>
                        <ion-icon onclick="location.href='{{ route('feArtikel') }}'" name="arrow-back-outline"></ion-icon>
                    </p>
                    <p>Detail Artikel</p>
                </div>
            </div>
            <div class="detail-artikel-wrapper__content">
                <div class="detail-artikel-wrapper__content--pri">
                    <div class="detail-artikel-info">
                        <div class="detail-artikel-info--title">
                            <p>{{ $item->created_at->format('d F Y') }}</p>
                            <p>
                                {{ $item->title }}
                            </p>
                        </div>
                        <div class="detail-artikel-info--img">
                            <div class="detail-artikel-info--img-img" style="background: url('/{{ $item->cover_img }}')">
                            </div>
                        </div>
                        <div class="detail-artikel-info--info">
                            <p>
                                {!! $item->content !!}
                            </p>

                        </div>
                        <div class="detail-artikel-info--btn">
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
                    </div>`
                </div>
                <div class="detail-artikel-wrapper__content--sec">
                    <h1 class="detail-artikel-wrapper__content--sec-title">Artikel Lainya</h1>
                    <hr class="detail-artikel-wrapper__content--sec-line">
                    @foreach ($artikel as $item)
                        <a
                            href="{{ route('feDetailArtikel', ['id' => $item->id_posts, 'slug' => Str::of($item->title)->slug('-')]) }}">
                            <div class="berita-box">
                                <div class="berita-box__left" style="background: url(/{{ $item->cover_img }})"></div>
                                <div class="berita-box__right">
                                    <div class="berita-box__right--title">{{ $item->title }}</div>
                                    <div class="berita-box__right--desc">{{ strip_tags($item->content) }}</div>
                                    <div class="berita-box__right--bottom">
                                        <p>{{$item->created_at->format("d F Y")}}</p>
                                        <p>
                                            <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                    <hr class="detail-artikel-wrapper__content--sec-line">
                </div>
            </div>
        </div>
    </div>
@endsection
