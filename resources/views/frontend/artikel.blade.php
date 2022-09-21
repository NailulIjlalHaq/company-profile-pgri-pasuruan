@extends('frontend.index')
@section('content')
    <div class="artikel">
        <div class="artikel__wrapper">
            <div class="artikel__wrapper--bg"></div>
            <div class="artikel__wrapper--header">
                <div class="artikel__wrapper--header__search">
                    <div class="artikel-search">
                        <ion-icon name="search-outline"></ion-icon>
                        <input type="search" name="" id="" placeholder="Search...">
                    </div>
                </div>
                <div class="artikel__wrapper--header__title">
                    <p>artikel</p>
                    <p>10,000+ outstanding news articels</p>
                </div>
            </div>
            <div class="artikel__wrapper--content">

                @foreach ($artikel as $item)
                    
                <div class="artikel-container">
                    <div class="artikel-container-box">
                        <div class="artikel-container-box__top">
                            <div class="artikel-container-box__top--img"
                                style="background: url('{{ $item -> cover_img }}') "></div>
                            <div class="artikel-container-box__top--info">
                                <div class="artikel-container-box__top--info-box">
                                    <div>
                                        <p>
                                            {{ $item -> title }}
                                        </p>
                                        <p>{{ $item -> content }} </p>
                                    </div>
                                    <button> Selengkapnya
                                        <ion-icon name="chevron-up-circle"></ion-icon>
                                    </button>
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
                </div>

                @endforeach

            </div>
        </div>
    </div>

@section('js')
    <script>
        $('.artikel-container-box__top--info').on('click', function() {
            location.href = 'detail-artikel'
        })
    </script>
@endsection
@endsection
