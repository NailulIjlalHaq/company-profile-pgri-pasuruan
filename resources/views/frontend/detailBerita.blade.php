@extends('frontend.index')
@section('meta-keyword', $item->tag)
@section('meta-description', strip_tags($item->content))
@section('social-media')
<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{route('feDetailBerita',['id' => $item->id_posts, 'slug' => Str::of($item->title)->slug('-')])}}">
<meta property="og:title" content="{{$item->title}}">
<meta property="og:description" content="{{strip_tags($item->content)}}">
<meta property="og:image" content="{{url($item->cover_img)}}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{route('feDetailBerita',['id' => $item->id_posts, 'slug' => Str::of($item->title)->slug('-')])}}">
<meta property="twitter:title" content="{{$item->title}}">
<meta property="twitter:description" content="{{strip_tags($item->content)}}">
<meta property="twitter:image" content="{{url($item->cover_img)}}">
@endsection
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
                        <p>{{ $item->created_at->format('d F Y') }}</p>
                        <p>
                            {{ $item->title }}
                        </p>
                    </div>
                    <div class="detail-berita-info--img">
                        <div class="detail-berita-info--img-img" style="background-image: url('{{asset($item->cover_img)}}')">
                  
                        </div>
                    </div>
                    <div class="detail-berita-info--info">
                        <p>
                            {!! $item->content !!}
                        </p>
                    </div>
                    <div class="detail-berita-info--btn">
                        <div class="share-btn">
                            <div class="share-btn-wrapper">
                                <div class="share-btn-wrapper-btn share-wa">
                                    <ion-icon name="logo-whatsapp"></ion-icon>
                                </div>
                                <a class="share-btn-wrapper-btn" href="https://www.facebook.com/sharer/sharer.php?u={{route('feDetailBerita',['id' => $item->id_posts, 'slug' => Str::of($item->title)->slug('-')])}}">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                                <a class="share-btn-wrapper-btn" href="https://twitter.com/intent/tweet/?text={{$item->title}}&url={{route('feDetailBerita',['id' => $item->id_posts, 'slug' => Str::of($item->title)->slug('-')])}}">
                                    <ion-icon name="logo-twitter"></ion-icon>
                                </a>
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
                <a href="{{ route('feDetailBerita', ['id' => $item->id_posts, 'slug' => Str::of($item->title)->slug('-')]) }}">
                    <div class="berita-box">

                        <div class="berita-box__left" style="background-image: url('{{asset($item->cover_img)}}')">
                      
                        </div>
                        <div class="berita-box__right">
                            <div class="berita-box__right--title">{{ $item->title }}</div>
                            <div class="berita-box__right--desc">{{ strip_tags($item->content) }}</div>
                            <div class="berita-box__right--bottom">
                                <p>{{ $item->created_at->format('d F Y') }}</p>
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