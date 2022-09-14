@extends('index')
@section('content')
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
                <img src="../assets/img/kepalasekolah.svg" alt="" />
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
                <div class="home__berita--title-text">Berita dan Agenda</div>
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
                        <div class="berita__simple--box">
                            <div class="berita__simple--box__left">
                                <img src="../assets/img/logo.png" alt="" />
                            </div>
                            <div class="berita__simple--box__right">
                                <div class="berita__simple--box__right--top">
                                    <p>01 - 06 - 2021</p>
                                </div>
                                <div class="berita__simple--box__right--bottom">Deklarasi Sekolah Ramah Anak</div>
                            </div>
                            <p class="berita__simple--box__arr">
                                <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                            </p>
                        </div>
                        <div class="berita__simple--box">
                            <div class="berita__simple--box__left">
                                <img src="../assets/img/logo.png" alt="" />
                            </div>
                            <div class="berita__simple--box__right">
                                <div class="berita__simple--box__right--top">
                                    <p>01 - 06 - 2021</p>
                                </div>
                                <div class="berita__simple--box__right--bottom">Deklarasi Sekolah Ramah Anak</div>
                            </div>
                            <p class="berita__simple--box__arr">
                                <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                            </p>
                        </div>
                        <div class="berita__simple--box">
                            <div class="berita__simple--box__left">
                                <img src="../assets/img/logo.png" alt="" />
                            </div>
                            <div class="berita__simple--box__right">
                                <div class="berita__simple--box__right--top">
                                    <p>01 - 06 - 2021</p>
                                </div>
                                <div class="berita__simple--box__right--bottom">Deklarasi Sekolah Ramah Anak</div>
                            </div>
                            <p class="berita__simple--box__arr">
                                <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="fasilitas">
        <div class="fasilitas">
            <div class="fasilitas__wrapper">
                <div class="fasilitas__wrapper--content">
                    <div class="fasilitas__wrapper--content__title">
                        <p class="">Fasilitas</p>
                        <p class="btn-close-fasilitas">
                            <ion-icon name="close-circle-outline"></ion-icon>
                        </p>
                    </div>

                    <div class="swipe-body">
                        <div class="fasilitas__wrapper--content__container">
                            <div class="fasilitas__wrapper--content__container--box">
                                <div class="fasilitas-box">
                                    <div class="fasilitas-box__info">
                                        <div class="fasilitas-box__info--img"></div>
                                        <div class="fasilitas-box__info--title">Teknologi dan Rekayasa</div>
                                        <div class="fasilitas-box__info--swipe">
                                            <div class="fasilitas-box__info--swipe__wrapper">
                                                <div class="fasilitas-box__info--swipe__wrapper__btn btn-swipe">
                                                    <ion-icon name="chevron-up-outline"></ion-icon>
                                                    <p>Show Detail</p>
                                                </div>
                                                <div class="fasilitas-box__info--swipe__wrapper__container">
                                                    <p class="fasilitas-box__info--swipe__wrapper__container--info">
                                                        <ion-icon name="construct-outline"></ion-icon>Detail Fasilitas
                                                    </p>
                                                    <p class="fasilitas-box__info--swipe__wrapper__container--title">
                                                        Teknologi dan Rekayasa</p>
                                                    <p class="fasilitas-box__info--swipe__wrapper__container--desc">
                                                        Melbourne based Illustrator & Designer Ken Taylor works primarily
                                                        within the music industry and is predominantly well known for his
                                                        striking rock posters. Ken started in Perth Western Australia doing
                                                        posters and album
                                                        artwork for local bands.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fasilitas__wrapper--content__container--box">
                                <div class="fasilitas-box">
                                    <div class="fasilitas-box__info">
                                        <div class="fasilitas-box__info--img"></div>
                                        <div class="fasilitas-box__info--title">Teknologi dan Rekayasa</div>
                                        <div class="fasilitas-box__info--swipe">
                                            <div class="fasilitas-box__info--swipe__wrapper">
                                                <div class="fasilitas-box__info--swipe__wrapper__btn btn-swipe">
                                                    <ion-icon name="chevron-up-outline"></ion-icon>
                                                    <p>Show Detail</p>
                                                </div>
                                                <div class="fasilitas-box__info--swipe__wrapper__container">
                                                    <p class="fasilitas-box__info--swipe__wrapper__container--info">
                                                        <ion-icon name="construct-outline"></ion-icon>Detail Fasilitas
                                                    </p>
                                                    <p class="fasilitas-box__info--swipe__wrapper__container--title">
                                                        Teknologi dan Rekayasa</p>
                                                    <p class="fasilitas-box__info--swipe__wrapper__container--desc">
                                                        Melbourne based Illustrator & Designer Ken Taylor works primarily
                                                        within the music industry and is predominantly well known for his
                                                        striking rock posters. Ken started in Perth Western Australia doing
                                                        posters and album
                                                        artwork for local bands.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fasilitas__wrapper--content__container--box">
                                <div class="fasilitas-box">
                                    <div class="fasilitas-box__info">
                                        <div class="fasilitas-box__info--img"></div>
                                        <div class="fasilitas-box__info--title">Teknologi dan Rekayasa</div>
                                        <div class="fasilitas-box__info--swipe">
                                            <div class="fasilitas-box__info--swipe__wrapper">
                                                <div class="fasilitas-box__info--swipe__wrapper__btn btn-swipe">
                                                    <ion-icon name="chevron-up-outline"></ion-icon>
                                                    <p>Show Detail</p>
                                                </div>
                                                <div class="fasilitas-box__info--swipe__wrapper__container">
                                                    <p class="fasilitas-box__info--swipe__wrapper__container--info">
                                                        <ion-icon name="construct-outline"></ion-icon>Detail Fasilitas
                                                    </p>
                                                    <p class="fasilitas-box__info--swipe__wrapper__container--title">
                                                        Teknologi dan Rekayasa</p>
                                                    <p class="fasilitas-box__info--swipe__wrapper__container--desc">
                                                        Melbourne based Illustrator & Designer Ken Taylor works primarily
                                                        within the music industry and is predominantly well known for his
                                                        striking rock posters. Ken started in Perth Western Australia doing
                                                        posters and album
                                                        artwork for local bands.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fasilitas__wrapper--content__container--box">
                                <div class="fasilitas-box">
                                    <div class="fasilitas-box__info">
                                        <div class="fasilitas-box__info--img"></div>
                                        <div class="fasilitas-box__info--title">Teknologi dan Rekayasa</div>
                                        <div class="fasilitas-box__info--swipe">
                                            <div class="fasilitas-box__info--swipe__wrapper">
                                                <div class="fasilitas-box__info--swipe__wrapper__btn btn-swipe">
                                                    <ion-icon name="chevron-up-outline"></ion-icon>
                                                    <p>Show Detail</p>
                                                </div>
                                                <div class="fasilitas-box__info--swipe__wrapper__container">
                                                    <p class="fasilitas-box__info--swipe__wrapper__container--info">
                                                        <ion-icon name="construct-outline"></ion-icon>Detail Fasilitas
                                                    </p>
                                                    <p class="fasilitas-box__info--swipe__wrapper__container--title">
                                                        Teknologi dan Rekayasa</p>
                                                    <p class="fasilitas-box__info--swipe__wrapper__container--desc">
                                                        Melbourne based Illustrator & Designer Ken Taylor works primarily
                                                        within the music industry and is predominantly well known for his
                                                        striking rock posters. Ken started in Perth Western Australia doing
                                                        posters and album
                                                        artwork for local bands.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fasilitas__wrapper--content__container--box">
                                <div class="fasilitas-box">
                                    <div class="fasilitas-box__info">
                                        <div class="fasilitas-box__info--img"></div>
                                        <div class="fasilitas-box__info--title">Teknologi dan Rekayasa</div>
                                        <div class="fasilitas-box__info--swipe">
                                            <div class="fasilitas-box__info--swipe__wrapper">
                                                <div class="fasilitas-box__info--swipe__wrapper__btn btn-swipe">
                                                    <ion-icon name="chevron-up-outline"></ion-icon>
                                                    <p>Show Detail</p>
                                                </div>
                                                <div class="fasilitas-box__info--swipe__wrapper__container">
                                                    <p class="fasilitas-box__info--swipe__wrapper__container--info">
                                                        <ion-icon name="construct-outline"></ion-icon>Detail Fasilitas
                                                    </p>
                                                    <p class="fasilitas-box__info--swipe__wrapper__container--title">
                                                        Teknologi dan Rekayasa</p>
                                                    <p class="fasilitas-box__info--swipe__wrapper__container--desc">
                                                        Melbourne based Illustrator & Designer Ken Taylor works primarily
                                                        within the music industry and is predominantly well known for his
                                                        striking rock posters. Ken started in Perth Western Australia doing
                                                        posters and album
                                                        artwork for local bands.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fasilitas__wrapper--content__container--box">
                                <div class="fasilitas-box">
                                    <div class="fasilitas-box__info">
                                        <div class="fasilitas-box__info--img"></div>
                                        <div class="fasilitas-box__info--title">Teknologi dan Rekayasa</div>
                                        <div class="fasilitas-box__info--swipe">
                                            <div class="fasilitas-box__info--swipe__wrapper">
                                                <div class="fasilitas-box__info--swipe__wrapper__btn btn-swipe">
                                                    <ion-icon name="chevron-up-outline"></ion-icon>
                                                    <p>Show Detail</p>
                                                </div>
                                                <div class="fasilitas-box__info--swipe__wrapper__container">
                                                    <p class="fasilitas-box__info--swipe__wrapper__container--info">
                                                        <ion-icon name="construct-outline"></ion-icon>Detail Fasilitas
                                                    </p>
                                                    <p class="fasilitas-box__info--swipe__wrapper__container--title">
                                                        Teknologi dan Rekayasa</p>
                                                    <p class="fasilitas-box__info--swipe__wrapper__container--desc">
                                                        Melbourne based Illustrator & Designer Ken Taylor works primarily
                                                        within the music industry and is predominantly well known for his
                                                        striking rock posters. Ken started in Perth Western Australia doing
                                                        posters and album
                                                        artwork for local bands.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="location">
        <div class="location">
            <div class="location__wrapper">
                <div class="location__wrapper--content">
                    <div class="location__wrapper--content__title">
                        <p>Location SMKN 1 Purwosari</p>
                        <p class="btn-close-location">
                            <ion-icon name="close-circle-outline"></ion-icon>
                        </p>
                    </div>
                    <div class="location__wrapper--content__map">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="prestasi">
        <div class="prestasi">
            <div class="prestasi__wrapper">
                <div class="prestasi__wrapper--content">
                    <div class="prestasi__wrapper--content__title">
                        <p>Prestasi SMKN 1 Purwosari</p>
                        <p class="btn-close-prestasi">
                            <ion-icon name="close-circle-outline"></ion-icon>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
