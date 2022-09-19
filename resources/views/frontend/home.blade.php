@extends('frontend.index')
@section('content')
    <div class="alert-news">
        <div class="alert-news-wrapper">
            <div class="alert-news-wrapper-bell">
                <ion-icon name="notifications"></ion-icon>
            </div>
            <div class="alert-news-wrapper-info">
                <p class="alert-news-wrapper-info-text">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id,
                    deleniti consectetur nisi quidem doloribus perferendis!
                </p>
            </div>
            <div class="alert-news-wrapper-close ">
                <ion-icon class="btn-close-alert-news" name="close"></ion-icon>
            </div>
        </div>
    </div>
    <div class="home">
        <div class="home__news">
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


        <div class="home__sambutan">
            <div class="home__sambutan--left">
                <div class="home__sambutan--left-img" style="background: url({{ asset('./assets/img/pgri.jpg') }})"></div>
            </div>
            <div class="home__sambutan--right">
                <div class="card">
                    <div class="card__title">
                        Sambutan Kepala Sekolah <br />
                        SMKN 1 Purwosari
                    </div>
                    <div class="card__desc">
                        <p class="card__desc--text">
                            Selamat datang di website SMKN 1 Purwosari. Yang merupakan lembaga pusat pendidikan dan juga
                            sebagai salah satu Pusat Pelatihan dan Pendidikan Keterampilan Terpadu (PPPKT) di Propinsi Jawa
                            Timur. SMKN 1 Purwosari merupakan
                            Sekolah Adiwiyata yang berada di Purwosari dimana tempatnya yang sangat strategis dan mudah
                            dijangkau, Mempunyai motto “Kepuasan anda, Prestasi kami” segenap keluarga besar SMKN 1
                            Purwosari senantiasa akan memberikan layanan
                            yang prima bagi masyarakat. Selamat bergabung.
                        </p>
                        <div class="card__desc--show">...Selengkapnya</div>
                    </div>
                    <div class="card__btn">Learn More <ion-icon name="chevron-forward-outline"></ion-icon>
                    </div>
                </div>
            </div>
        </div>


        <div class="home__berita">
            <div class="home__berita--title">
                <div class="home__berita--title-text">Berita dan Artikel</div>
                <div class="home__berita--title__search">
                    <ion-icon name="search-outline"></ion-icon>
                    <input type="search" placeholder="Search" />
                </div>
            </div>
            <div class="home__berita--wrapper">
                <div class="home__berita--wrapper__left">
                    <div class="home__berita--wrapper__left--scroll">
                        <div class="berita-box">
                            <div class="berita-box__left"></div>
                            <div class="berita-box__right">
                                <div class="berita-box__right--title">Kegiatan Pembelajaran Daring</div>
                                <div class="berita-box__right--desc">Lorem ipsum dolor sit amet adipcing ipsum dolor sit
                                    amet adipcing aqua lorem ipsum.</div>
                                <div class="berita-box__right--bottom">
                                    <p>20 Juni</p>
                                    <p>
                                        <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="berita-box">
                            <div class="berita-box__left"></div>
                            <div class="berita-box__right">
                                <div class="berita-box__right--title">Kegiatan Pembelajaran Daring</div>
                                <div class="berita-box__right--desc">Lorem ipsum dolor sit amet adipcing ipsum dolor sit
                                    amet adipcing aqua lorem ipsum.</div>
                                <div class="berita-box__right--bottom">
                                    <p>20 Juni</p>
                                    <p>
                                        <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="berita-box">
                            <div class="berita-box__left"></div>
                            <div class="berita-box__right">
                                <div class="berita-box__right--title">Kegiatan Pembelajaran Daring</div>
                                <div class="berita-box__right--desc">Lorem ipsum dolor sit amet adipcing ipsum dolor sit
                                    amet adipcing aqua lorem ipsum.</div>
                                <div class="berita-box__right--bottom">
                                    <p>20 Juni</p>
                                    <p>
                                        <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="berita-box">
                            <div class="berita-box__left"></div>
                            <div class="berita-box__right">
                                <div class="berita-box__right--title">Kegiatan Pembelajaran Daring</div>
                                <div class="berita-box__right--desc">Lorem ipsum dolor sit amet adipcing ipsum dolor sit
                                    amet adipcing aqua lorem ipsum.</div>
                                <div class="berita-box__right--bottom">
                                    <p>20 Juni</p>
                                    <p>
                                        <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="berita-box">
                            <div class="berita-box__left"></div>
                            <div class="berita-box__right">
                                <div class="berita-box__right--title">Kegiatan Pembelajaran Daring</div>
                                <div class="berita-box__right--desc">Lorem ipsum dolor sit amet adipcing ipsum dolor sit
                                    amet adipcing aqua lorem ipsum.</div>
                                <div class="berita-box__right--bottom">
                                    <p>20 Juni</p>
                                    <p>
                                        <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="berita-box">
                            <div class="berita-box__left"></div>
                            <div class="berita-box__right">
                                <div class="berita-box__right--title">Kegiatan Pembelajaran Daring</div>
                                <div class="berita-box__right--desc">Lorem ipsum dolor sit amet adipcing ipsum dolor sit
                                    amet adipcing aqua lorem ipsum.</div>
                                <div class="berita-box__right--bottom">
                                    <p>20 Juni</p>
                                    <p>
                                        <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="berita-box">
                            <div class="berita-box__left"></div>
                            <div class="berita-box__right">
                                <div class="berita-box__right--title">Kegiatan Pembelajaran Daring</div>
                                <div class="berita-box__right--desc">Lorem ipsum dolor sit amet adipcing ipsum dolor sit
                                    amet adipcing aqua lorem ipsum.</div>
                                <div class="berita-box__right--bottom">
                                    <p>20 Juni</p>
                                    <p>
                                        <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home__berita--wrapper__right">
                    <div class="berita__simple">


                        <div class="artikel-container">
                            <div class="artikel-container-box">
                                <div class="artikel-container-box__top">
                                    <div class="artikel-container-box__top--img"
                                        style="background: url('{{ asset('./assets/img/juara.jpg') }}') "></div>
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
                                        style="background: url('{{ asset('./assets/img/juara.jpg') }}') "></div>
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
                                        style="background: url('{{ asset('./assets/img/juara.jpg') }}') "></div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
