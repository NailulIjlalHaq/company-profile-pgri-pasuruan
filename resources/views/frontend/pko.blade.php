@extends('frontend.index')
@section('content')
    <div class="w-100 d-flex flex-center mt-top bg-grey-blue">
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
                    <a class="card__btn" href="{{ route('fePko') }}">Lebih Lanjut
                        <ion-icon name="chevron-forward-outline"></ion-icon>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="artikel">
        <div class="artikel__wrapper">

            <div class="artikel__wrapper--header">

                <div class="artikel__wrapper--header__title">
                    <p>Berita</p>
                    <p>Terdapat {{ $berita->total() }} berita yang dimasukkan ke dalam website.</p>
                </div>
            </div>
            <div class="artikel__wrapper--content">
                @foreach ($berita as $item)
                    <a
                        href="{{ route('feDetailBerita', ['id' => $item->id_posts, 'slug' => Str::of($item->title)->slug('-')]) }}">
                        <div class="artikel-container">
                            <div class="artikel-container-box">
                                <div class="artikel-container-box__top">
                                    <div class="artikel-container-box__top--img"
                                        style="background: url('{{ $item->cover_img }}') "></div>
                                    <div class="artikel-container-box__top--info">
                                        <div class="artikel-container-box__top--info-box">
                                            <div class="artikel-container-box__top--info-box-text">
                                                <div class="artikel-container-box__top--info-box-text-tag">
                                                    {{ $item->categories->name }}
                                                </div>
                                                <div class="artikel-container-box__top--info-box-text-1">
                                                    <p>{{ $item->title }}</p>
                                                </div>
                                                <div class="artikel-container-box__top--info-box-text-2">
                                                    <p>{{ $item->created_at->format('d F Y') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="artikel-container-box__bot">
                                    <div class="artikel-container-box__bot--name">
                                        {{ $item->users->name }}
                                    </div>
                                    <div class="artikel-container-box__bot--info">
                                        {{-- <p>
                                            <ion-icon name="eye"></ion-icon> 250
                                        </p> --}}
                                        <p>
                                            <ion-icon name="open-outline"></ion-icon>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            {{ $berita->links('../vendor/pagination/simple-pgri') }}
        </div>
    </div>
@endsection
