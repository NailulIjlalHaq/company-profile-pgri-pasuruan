@extends('frontend.index')
@section('content')
<div class="artikel">
    <div class="artikel__wrapper">
        <div class="artikel__wrapper--bg"></div>
        <div class="artikel__wrapper--header">
            <div class="artikel__wrapper--header__search">
                <form action="{{route('feArtikel')}}" method="get" style="width:85%;margin-left:30%;">
                    <div class=" artikel-search">
                        <ion-icon name="search-outline"></ion-icon>
                        <input type="search" name="search" id="search" placeholder="Cari...">
                    </div>
                </form>
            </div>
            <div class="artikel__wrapper--header__title">
                <p>Artikel</p>
                <p>Terdapat <strong>{{$artikel->total()}} artikel</strong> yang dimasukkan ke dalam website.</p>
            </div>
        </div>
        <div class="artikel__wrapper--content">

            @foreach ($artikel as $item)
            <a href="{{ route('feDetailArtikel', ['id' => $item->id_posts, 'slug' => Str::of($item->title)->slug('-')]) }}">
                <div class="artikel-container">
                    <div class="artikel-container-box">
                        <div class="artikel-container-box__top">
                            <div class="artikel-container-box__top--img" style="background: url('{{ $item->cover_img }}') "></div>
                            <div class="artikel-container-box__top--info">
                                <div class="artikel-container-box__top--info-box">
                                    <div class="artikel-container-box__top--info-box-text">

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
        {{$artikel->links('../vendor/pagination/simple-pgri')}}
    </div>
</div>

@section('js')
<script></script>
@endsection
@endsection