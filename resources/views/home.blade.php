@extends('index')
@section('content')
    <div class="home">
        <div class="hero">
            <div class="hero-container">
                <div class="hero__top">
                    <div class="hero__top--title">
                        <div class="hero__top--title__1">
                            smk negeri 1 purwosari. <br />
                            The Real Informatics School.
                        </div>
                        <div class="hero__top--title__2">Pelopor SMK bidang Teknologi dan Informatika di Indonesia</div>
                    </div>
                    <div class="hero__top--btn">Join now</div>
                </div>
            </div>
        </div>

        <div class="home__mitra">
            <div class="home__mitra--wrapper">
                <div class="home__mitra--wrapper__box">
                    <img src="../assets/img/brand/adidas.svg" alt="" />
                </div>
                <div class="home__mitra--wrapper__box">
                    <img src="../assets/img/brand/apple.svg" alt="" />
                </div>
                <div class="home__mitra--wrapper__box">
                    <img src="../assets/img/brand/google.svg" alt="" />
                </div>
                <div class="home__mitra--wrapper__box">
                    <img src="../assets/img/brand/inter.svg" alt="" />
                </div>
                <div class="home__mitra--wrapper__box">
                    <img src="../assets/img/brand/nike.svg" alt="" />
                </div>
                <div class="home__mitra--wrapper__box">
                    <img src="../assets/img/brand/samsung.svg" alt="" />
                </div>
            </div>
        </div>

        <div class="home__features">
            <div class="title">
                <div class="title__wrapper">
                    <div class="title__wrapper--text-1">Practice Advice</div>
                    <div class="title__wrapper--text-2">Approdable Packages</div>
                    <div class="title__wrapper--text-3">
                        Problems trying to resolve the conflict between <br />
                        the two major realms of Classical physics: Newtonian mechanics
                    </div>
                </div>
            </div>
            <div class="home__features--wrapper">
                <div class="features-box">
                    <div class="features-box__img"><img src="../assets/img/monitor.png" alt="" /></div>
                    <div class="features-box__title">Fasilitas Lengkap</div>
                    <div class="features-box__desc">
                        The gradual accumulation of <br />
                        information about atomic and <br />
                        small-scale behaviour...
                    </div>
                </div>
                <div class="features-box">
                    <div class="features-box__img"><img src="../assets/img/house.png" alt="" /></div>
                    <div class="features-box__title">Lingkungan Nyaman</div>
                    <div class="features-box__desc">
                        The gradual accumulation of <br />
                        information about atomic and <br />
                        small-scale behaviour...
                    </div>
                </div>
                <div class="features-box">
                    <div class="features-box__img"><img src="../assets/img/company.png" alt="" /></div>
                    <div class="features-box__title">Kerjasama Luas</div>
                    <div class="features-box__desc">
                        The gradual accumulation of <br />
                        information about atomic and <br />
                        small-scale behaviour...
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

        <div class="home__profile">
            <div class="home__profile--left">
                <div class="card">
                    <div class="card__title">Profil SMKN 1 Purwosari</div>
                    <div class="card__desc">
                        <p class="card__desc--text">
                            Di samping adalah profil sekolah kami secara keseluruhan dari mulai bagian depan hingga seluruh
                            fasilitas yang terdapat disekolah kami kami akan Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit. Corporis, quia in
                            cupiditate velit sed fuga magni accusantium voluptatum laboriosam dolorum.
                        </p>
                        <div class="card__desc--show">...Selengkapnya</div>
                    </div>
                    <div class="card__btn">Learn More <ion-icon name="chevron-forward-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <div class="home__profile--right">
                <div class="home__profile--right__box">
                    <div class="home__profile--right__box--icon">
                        <img src="../assets/img/homeIcon.svg" alt="Logo Home" />
                    </div>
                    <div class="home__profile--right__box--right">
                        <div class="home__profile--right__box--right__text">
                            <p class="">Fasilitas</p>
                            <p class="">Lorem ipsum dolor sit amet adipcing aqua lorem ipsum.</p>
                        </div>
                        <div class="home__profile--right__box--right__btn btn-show-fasilitas">Show <ion-icon
                                name="arrow-up-circle-outline"></ion-icon>
                        </div>
                    </div>
                </div>
                <div class="home__profile--right__box">
                    <div class="home__profile--right__box--icon">
                        <img src="../assets/img/locationIcon.svg" alt="Logo Home" />
                    </div>
                    <div class="home__profile--right__box--right">
                        <div class="home__profile--right__box--right__text">
                            <p class="">location</p>
                            <p class="">Lorem ipsum dolor sit amet adipcing aqua lorem ipsum.</p>
                        </div>
                        <div class="home__profile--right__box--right__btn btn-show-location">Show <ion-icon
                                name="arrow-up-circle-outline"></ion-icon>
                        </div>
                    </div>
                </div>
                <div class="home__profile--right__box">
                    <div class="home__profile--right__box--icon">
                        <img src="../assets/img/prestasiIcon.svg" alt="Logo Home" />
                    </div>
                    <div class="home__profile--right__box--right">
                        <div class="home__profile--right__box--right__text">
                            <p class="">Prestasi</p>
                            <p class="">Lorem ipsum dolor sit amet adipcing aqua lorem ipsum.</p>
                        </div>
                        <div class="home__profile--right__box--right__btn btn-show-prestasi">Show <ion-icon
                                name="arrow-up-circle-outline"></ion-icon>
                        </div>
                    </div>
                </div>
                <div class="home__profile--right__box">
                    <div class="home__profile--right__box--icon">
                        <img src="../assets/img/historyIcon.svg" alt="Logo Home" />
                    </div>
                    <div class="home__profile--right__box--right">
                        <div class="home__profile--right__box--right__text">
                            <p class="">Sejarah</p>
                            <p class="">Lorem ipsum dolor sit amet adipcing aqua lorem ipsum.</p>
                        </div>
                        <div class="home__profile--right__box--right__btn">Show <ion-icon name="arrow-up-circle-outline">
                            </ion-icon>
                        </div>
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
