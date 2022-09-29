@extends('frontend.index')
@section('meta-keyword', $page->title)
@section('meta-description', strip_tags($page->content))
@section('content')
<div class="about__sejarah">
    <div class="about__sejarah-wrapper">
        <div class="about__sejarah-wrapper-img" style="background-image: url('{{asset($page->cover_img)}}')">
        </div>
        <h1 style="margin-bottom: 0px;margin-top: 80px;font-size: 30px;font-weight: bold;">{{$page->title}}</h1>
        <div class="about__sejarah-wrapper-info" style="padding: 1rem 10rem;text-align:left">
            {!! $page->content !!}
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