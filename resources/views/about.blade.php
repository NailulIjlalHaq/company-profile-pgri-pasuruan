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

        <div class="about__info">
            <div class="about__info--left">
                <div class="about__info--left__box">
                    <div class="info__box">
                        <div class="info__box--img">
                            <img src="../assets/img/homeIcon.svg" alt="" />
                        </div>
                        <div class="info__box--text">
                            <p>Nama Sekolah</p>
                            <p>SMKN 1 Purwosari</p>
                        </div>
                        <div class="info__box--text">
                            <p>Nama Kepala Sekolah</p>
                            <p>Rudi Trisantoso</p>
                        </div>
                    </div>
                    <div class="info__box">
                        <div class="info__box--img">
                            <img src="../assets/img/locationIcon.svg" alt="" />
                        </div>
                        <div class="info__box--text">
                            <p>Alamat</p>
                            <p>Alamat Jl. Siliwangi No. 123 Cibadak Sukabumi - Jawa barat 43351</p>
                        </div>
                    </div>
                    <div class="info__box">
                        <div class="info__box--img">
                            <img src="../assets/img/homeIcon.svg" alt="" />
                        </div>
                        <div class="info__box--text">
                            <p>Website/Email</p>
                            <p>www.smkn1purwosari.sch.id /<br />purwosarismkn1@yahoo.co.id</p>
                        </div>
                        <div class="info__box--text">
                            <p>No Telp</p>
                            <p>(0343) 613747</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about__info--right">
                <div class="info__box">
                    <div class="info__box--img">
                        <img src="../assets/img/schoolIcon.svg" alt="" />
                    </div>
                    <div class="info__box--text">
                        <p>Nama Sekolah</p>
                        <p>SMKN 1 Purwosari</p>
                    </div>
                    <div class="info__box--text">
                        <p>Nama Kepala Sekolah</p>
                        <p>Rudi Trisantoso</p>
                    </div>
                </div>
                <div class="info__box">
                    <div class="info__box--img">
                        <img src="../assets/img/schoolIcon.svg" alt="" />
                    </div>
                    <div class="info__box--text">
                        <p>Nama Sekolah</p>
                        <p>SMKN 1 Purwosari</p>
                    </div>
                    <div class="info__box--text">
                        <p>Nama Kepala Sekolah</p>
                        <p>Rudi Trisantoso</p>
                    </div>
                </div>
                <div class="info__box">
                    <div class="info__box--img">
                        <img src="../assets/img/schoolIcon.svg" alt="" />
                    </div>
                    <div class="info__box--text">
                        <p>Nama Sekolah</p>
                        <p>SMKN 1 Purwosari</p>
                    </div>
                    <div class="info__box--text">
                        <p>Nama Kepala Sekolah</p>
                        <p>Rudi Trisantoso</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-100 py-50 title">
            <div class="title__wrapper">
                <div class="title__wrapper--text-1">Practice Advice</div>
                <div class="title__wrapper--text-2">Approdable Packages</div>
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
