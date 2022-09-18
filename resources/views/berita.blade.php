@extends('index')
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
                    <p>berita</p>
                    <p>10,000+ outstanding news articels</p>
                </div>
            </div>
            <div class="home__news" style=" margin:0;">
                <div class="home__news--wrapper">
                    <div class="home__news--wrapper__right">
                        <div class="news-img-box">
                            <div class="news-img" style="background: url('{{ asset('./assets/img/berita1.jpg') }}')"></div>
                            <div class="news-img-text">
                                <div class="news-img-text-tag">
                                    trending
                                </div>
                                <div class="news-img-text-top">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Veniam, ducimus!</div>
                                <div class="news-img-text-bottom">
                                    <p>Armin Yars</p>
                                    <p>
                                        &bull;
                                    </p>
                                    <p>January 19, 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home__news--wrapper__left">
                        <div class="home__news--wrapper__left--top">
                            <div class="news-img-box">
                                <div class="news-img" style="background: url('{{ asset('./assets/img/berita2.jpg') }}')">
                                </div>
                                <div class="news-img-text">
                                    <div class="news-img-text-tag">
                                        trending
                                    </div>
                                    <div class="news-img-text-top">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Veniam, ducimus!</div>
                                    <div class="news-img-text-bottom">
                                        <p>Armin Yars</p>
                                        <p>
                                            &bull;
                                        </p>
                                        <p>January 19, 2022</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="home__news--wrapper__left--bottom">
                            <div class="home__news--wrapper__left--bottom-1">
                                <div class="news-img-box">
                                    <div class="news-img" style="background: url('{{ asset('./assets/img/juara.jpg') }}')">
                                    </div>

                                </div>
                            </div>
                            <div class="home__news--wrapper__left--bottom-2">
                                <div class="news-img-box">
                                    <div class="news-img" style="background: url('{{ asset('./assets/img/juara2.jpg') }}')">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="artikel__wrapper--content">
                <div class="artikel-container">
                    <div class="artikel-container-box">
                        <div class="artikel-container-box__top">
                            <div class="artikel-container-box__top--img"
                                style="background: url('{{ asset('./assets/img/berita1.jpg') }}') "></div>
                            <div class="artikel-container-box__top--info">
                                <div class="artikel-container-box__top--info-box">
                                    <div>
                                        <p>
                                            Lorem Ipsum Dolor
                                        </p>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
                                    </div>
                                    <button> More Detail
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
                <div class="artikel-container">
                    <div class="artikel-container-box">
                        <div class="artikel-container-box__top ">
                            <div class="artikel-container-box__top--img "
                                style="background: url('{{ asset('./assets/img/juara.jpg') }}') "></div>
                            <div class="artikel-container-box__top--info btn-show-artikel-popup">
                                <div class="artikel-container-box__top--info-box">
                                    <div>
                                        <p>
                                            Lorem Ipsum Dolor
                                        </p>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
                                    </div>
                                    <button> More Detail
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
                <div class="artikel-container">
                    <div class="artikel-container-box">
                        <div class="artikel-container-box__top">
                            <div class="artikel-container-box__top--img"
                                style="background: url('{{ asset('./assets/img/juara2.jpg') }}') "></div>
                            <div class="artikel-container-box__top--info">
                                <div class="artikel-container-box__top--info-box">
                                    <div>
                                        <p>
                                            Lorem Ipsum Dolor
                                        </p>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
                                    </div>
                                    <button> More Detail
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
                <div class="artikel-container">
                    <div class="artikel-container-box">
                        <div class="artikel-container-box__top">
                            <div class="artikel-container-box__top--img"
                                style="background: url('{{ asset('./assets/img/juara3.jpg') }}') "></div>
                            <div class="artikel-container-box__top--info">
                                <div class="artikel-container-box__top--info-box">
                                    <div>
                                        <p>
                                            Lorem Ipsum Dolor
                                        </p>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
                                    </div>
                                    <button> More Detail
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
                <div class="artikel-container">
                    <div class="artikel-container-box">
                        <div class="artikel-container-box__top">
                            <div class="artikel-container-box__top--img"
                                style="background: url('{{ asset('./assets/img/berita1.jpg') }}') "></div>
                            <div class="artikel-container-box__top--info">
                                <div class="artikel-container-box__top--info-box">
                                    <div>
                                        <p>
                                            Lorem Ipsum Dolor
                                        </p>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
                                    </div>
                                    <button> More Detail
                                        <ion-icon name="chevron-up-circle"></ion-icon>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="artikel-container-box__bot">
                            <a href="#">
                                <ion-icon name="eye"></ion-icon> 250
                            </a>
                            <a href="#">
                                <ion-icon name="share-social"></ion-icon> 300
                            </a>

                        </div>
                    </div>
                </div>
                <div class="artikel-container">
                    <div class="artikel-container-box">
                        <div class="artikel-container-box__top">
                            <div class="artikel-container-box__top--img"
                                style="background: url('{{ asset('./assets/img/berita2.jpg') }}') "></div>
                            <div class="artikel-container-box__top--info">
                                <div class="artikel-container-box__top--info-box">
                                    <div>
                                        <p>
                                            Lorem Ipsum Dolor
                                        </p>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
                                    </div>
                                    <button>
                                        More Detail
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
            </div>
        </div>
    </div>

    <section id="artikel-popup">
        <div class="artikel-popup">
            <div class="artikel-popup__wrapper">
                <div class="artikel-popup__wrapper--header">
                    <div class="artikel-popup__wrapper--header--title">
                        <p>Detail Artikel</p>
                        <p>
                            <ion-icon class="btn-close-artikel-popup" name="close"></ion-icon>
                        </p>
                    </div>
                </div>
                <div class="artikel-popup__wrapper--content">
                    <div class="artikel-popup__wrapper--content__img"
                        style="background: url({{ asset('./assets/img/berita1.jpg') }})"></div>
                    <div class="artikel-popup__wrapper--content__info">

                        <p>Berita title</p>
                        <p>
                            Melbourne based Illustrator & Designer Ken Taylor works primarily within the music industry and
                            is predominantly well known for his striking rock posters. Ken started in Perth Western
                            Australia doing posters and album
                            artwork for local bands.
                        </p>
                    </div>
                </div>

            </div>
        </div>

    </section>
@endsection
