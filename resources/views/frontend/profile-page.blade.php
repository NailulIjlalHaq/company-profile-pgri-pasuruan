@extends('frontend.index')
@section('meta-keyword', $page->title)
@section('meta-description', strip_tags($page->content))
@section('social-media')
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ route('feProfil', $page->id_pages) }}">
    <meta property="og:title" content="{{ $page->title }}">
    <meta property="og:description" content="{{ strip_tags($page->content) }}">
    <meta property="og:image" content="{{ url($page->cover_img) }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ route('feProfil', $page->id_pages) }}">
    <meta property="twitter:title" content="{{ $page->title }}">
    <meta property="twitter:description" content="{{ strip_tags($page->content) }}">
    <meta property="twitter:image" content="{{ url($page->cover_img) }}">
@endsection
@section('content')
    <div class="about__sejarah">
        <div class="about__sejarah-wrapper">
            <div class="about__sejarah-wrapper-img" style="background-image: url('{{ asset($page->cover_img) }}')">
            </div>
            <h1 style="margin-bottom: 0px;margin-top: 80px;font-size: 30px;font-weight: bold;">{{ $page->title }}</h1>
            <div class="about__sejarah-wrapper-info" >
                {!! $page->content !!}
            </div>
            <div class="about__sejarah-wrapper-btn">
                <div class="share-btn">
                    <div class="share-btn-wrapper">

                        <a class="share-btn-wrapper-btn"
                            href="https://www.facebook.com/sharer/sharer.php?u={{ route('feProfil', $page->id_pages) }}">
                            <ion-icon name="logo-facebook"></ion-icon>Facebook
                        </a>
                        <div class="share-btn-wrapper-btn">
                            <ion-icon name="logo-whatsapp"></ion-icon>whatsapp
                        </div>
                        <a class="share-btn-wrapper-btn"
                            href="https://twitter.com/intent/tweet/?text={{ $page->title }}&url={{ route('feProfil', $page->id_pages) }}">
                            <ion-icon name="logo-twitter"></ion-icon>twitter
                        </a>
                    </div>
                    <div class="share-btn-share">
                        <ion-icon name="share-social"></ion-icon>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
