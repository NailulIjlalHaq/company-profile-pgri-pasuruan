@extends('index')
@section('content')
    <div class="about">
        <div class="about__hero">
            <div class="swiper__container">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="swiper__box">
                                <div alt="" class="swiper__box--img">
                                    <div class="swiper__box--img--content"
                                        style="background-image: url(../assets/img/kantin.jpg)"></div>
                                </div>
                                <div class="swiper__box--text">Kantin</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper__box">
                                <div alt="" class="swiper__box--img">
                                    <div class="swiper__box--img--content"
                                        style="background-image: url(../assets/img/sawah.jpg)"></div>
                                </div>
                                <div class="swiper__box--text">Sawah</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper__box">
                                <div alt="" class="swiper__box--img">
                                    <div class="swiper__box--img--content"
                                        style="background-image: url(../assets/img/gedung.jpg)"></div>
                                </div>
                                <div class="swiper__box--text">Gedung</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper__box">
                                <div alt="" class="swiper__box--img">
                                    <div class="swiper__box--img--content"
                                        style="background-image: url(../assets/img/aula.jpg)"></div>
                                </div>
                                <div class="swiper__box--text">aula</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>

        <div class="about__makna">
            <div class="about__makna--wrapper">
                <div class="about__makna--wrapper-left">
                    <img src={{ asset('./assets/img/logo.png') }} class="about__makna--wrapper-left-img" />
                </div>
                <div class="about__makna--wrapper-right">
                    <div class="about__makna--wrapper-right-top">
                        <div class="title__wrapper">
                            <div class=" card__title">Makna Logo PGRI</div>
                            <div class="title__wrapper--text-3" style="line-height: 1.5">
                                PGRI memiliki lambang yang terdiri dari berbagai unsur, dengan pengertian sebagai berikut:
                                Bentuk lambang adalah segi lima garis lengkung membentuk lima sudut, melambangkan sila-sila
                                dari Pancasila. Ini menunjukkan bahwa IKIP-PGRI mengandung misi kebangsaan</div>
                        </div>
                    </div>
                    <div class="about__makna--wrapper-right-bot">
                        <img src={{ asset('./assets/img/logo.png') }} alt="">
                        <p>
                            pgri kab pasuruan
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-100 py-50 title">
            <div class="title__wrapper">
                <div class="title__wrapper--text-1">Visi & Misi</div>
                <div class="title__wrapper--text-2"> PGRI Kab Pasuruan</div>
                <div class="title__wrapper--text-3">
                    Problems trying to resolve the conflict between <br />
                    the two major realms of Classical physics: Newtonian mechanics
                </div>
            </div>
        </div>

        <div class="about__vm">
            <div class="about__vm--wrapper">
                <div class="about__vm--wrapper__box">
                    <div class="about__vm--wrapper__box--title">Visi</div>
                    <div class="about__vm--wrapper__box--text">“Terwujudnya Tamatan yang Beriman dan Bertaqwa kepada
                        Tuhan Yang Maha Esa, berbudi pekerti luhur, berdaya saing tinggi, peduli dan berbudaya
                        lingkungan”</div>
                </div>
                <div class="about__vm--wrapper__box">
                    <div class="about__vm--wrapper__box--title">Misi</div>
                    <ol class="about__vm--wrapper__box--text">
                        <li>Menerapkan nilai-nilai Agama, Pancasila dan Undang-undang Dasar 1945</li>
                        <li>Mengembangkan pengetahuan, keterampilan, disiplin diri, etos kerja yang tinggi, aktif,
                            kreatif, inovatif, dan budaya santun sesuai bidangnya</li>
                        <li>Meningkatkan profesionalisme melalui penguasaan teknologi dan bahasa Internasional</li>
                        <li>Mengembangkan budaya sekolah untuk melestarikan fungsi lingkungan, mencegah pencemaran dan
                            kerusakan lingkungan</li>
                        <li>Memahami peran dan fungsi masing-masing dalam pergaulan sesama warga sekolah dalam suasana
                            kekeluargaan</li>
                        <li>Mengembangkan pola kemitraan dengan masyarakat dan industri</li>
                        <li>Mampu memanfaatkan potensi wilayah untuk pengembangan sekolah sebagai pusat budaya,
                            pelatihan, produksi dan jasa berbasis teaching factory dan pendidikan lingkungan hidup</li>
                    </ol>
                </div>
            </div>
        </div>


    </div>
@endsection
