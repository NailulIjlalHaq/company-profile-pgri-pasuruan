@extends('frontend.index')
@section('content')
<div class="alert-news">
    <div class="alert-news-wrapper">
        <div class="alert-news-wrapper-bell">
            <ion-icon name="notifications"></ion-icon>
        </div>
        <div class="alert-news-wrapper-info">
            <p class="alert-news-wrapper-info-text">
                @if(count($pengumuman) > 0)
                @foreach ($pengumuman as $item )
                {{$item->title}} -
                @endforeach
                @else
                Belum terdapat <strong>PENGUMUMAN</strong> yang ingin ditampilkan pada web
                @endif
            </p>
        </div>
        <div class="alert-news-wrapper-close ">
            <ion-icon class="btn-close-alert-news" name="close"></ion-icon>
        </div>
    </div>
</div>
<div class="home">
    <div class="home__news mt-top py-50">
        <div class="home__news--wrapper">
            @foreach ($beritaAtas as $atas)
            <a class="news-img-box" href="{{ route('feDetailBerita', ['id' => $atas->id_posts, 'slug' => Str::of($atas->title)->slug('-')]) }}">

                <div class="news-img" style="background: url('{{ $atas->cover_img }}')">
                </div>
                <div class="news-img-text">
                    <div class="news-img-text-tag">
                        {{ $atas->categories->name }}
                    </div>
                    <div class="news-img-text-top">{{ $atas->title }}</div>
                    <div class="news-img-text-bottom">
                        <p>{{$atas->users->name}}</p>
                        <p>
                            &bull;
                        </p>
                        <p> {{$atas->created_at->format("d F Y")}}</p>
                    </div>
                </div>

            </a>
            @endforeach
        </div>
    </div>
    <div class="w-100 d-flex flex-center bg-grey-blue">
        <div class="home__sambutan">
            <div class="home__sambutan--left">
                <div class="home__sambutan--left-img" style="background: url('{{ asset($sambutan->cover_img) }}')">
                </div>
            </div>
            <div class="home__sambutan--right">
                <div class="card">
                    <div class="card__title">
                        {{ $sambutan->title }}
                    </div>
                    <div class="card__desc">
                        <p class="card__desc--text">
                            {{ strip_tags($sambutan->content) }}
                        </p>

                    </div>
                    <a class="card__btn" href="{{ route('feProfil',1) }}">Lebih Lanjut
                        <ion-icon name="chevron-forward-outline"></ion-icon>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="home__berita">
        <div class="home__berita--title">
            <div class="home__berita--title-text">Artikel dan Berita</div>
            <div class="home__berita--title__search">
                <ion-icon name="search-outline"></ion-icon>
                <input type="search" placeholder="Cari..." />
            </div>
        </div>
        <div class="home__berita--wrapper">
            <div class="home__berita--wrapper__left">
                <div class="home__berita--wrapper__left--scroll">
                    @foreach ($artikel as $botArtikel)
                    <a class="berita-box" href="{{ route('feDetailArtikel', ['id' => $botArtikel->id_posts, 'slug' => Str::of($botArtikel->title)->slug('-')]) }}">
                        <div class="berita-box__left" style="background: url('{{ $botArtikel->cover_img }}')"></div>
                        <div class="berita-box__right">
                            <div class="berita-box__right--title">{{ $botArtikel->title }}</div>
                            <div class="berita-box__right--desc">{{ strip_tags($botArtikel->content) }}</div>
                            <div class="berita-box__right--bottom">
                                <p>{{$botArtikel->created_at->format("d F Y")}}</p>
                                <p>
                                    <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                                </p>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            <div class="home__berita--wrapper__right">
                <div class="berita__simple">
                    @foreach ($botBerita as $bb)
                    <a class="artikel-container" href="{{ route('feDetailBerita', ['id' => $bb->id_posts, 'slug' => Str::of($bb->title)->slug('-')]) }}">
                        <div class="artikel-container-box">
                            <div class="artikel-container-box__top">
                                <div class="artikel-container-box__top--img" style="background: url('{{ $bb->cover_img }}') "></div>
                                <div class="artikel-container-box__top--info">
                                    <div class="artikel-container-box__top--info-box">
                                        <div class="artikel-container-box__top--info-box-text">
                                            <div class="artikel-container-box__top--info-box-text-1">
                                                <p>{{ $bb->title }}</p>
                                            </div>
                                            <div class="artikel-container-box__top--info-box-text-2">
                                                <p>{{ strip_tags($bb->content) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="artikel-container-box__bot">
                                <p>
                                    <ion-icon name="eye"></ion-icon> 250
                                </p>
                                <p>
                                    <ion-icon name="share-social"></ion-icon> 300
                                </p>

                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection