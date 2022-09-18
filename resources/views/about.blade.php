@extends('index')
@section('content')
    <div class="about">
        <div class="about__sejarah">
            <div class="about__sejarah-wrapper">
                <div class="about__sejarah-wrapper-img">
                </div>
                <div class="about__sejarah-wrapper-info">
                    <p><span>s</span>ejarah singkat pgri orem ipsum, dolor sit amet consectetur adipisicing elit. Hic
                        mollitia quisquam
                        sequi ut
                        consectetur omnis nulla eveniet rerum itaque? Quos nihil quidem iure sed expedita?
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. In nesciunt possimus perspiciatis a neque
                    </p>
                    <p>
                        cupiditate soluta error dolorem sit, provident iusto nisi quidem velit molestias.
                        consectetur omnis nulla eveniet rerum itaque? Quos nihil quidem iure sed expedita?
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. In nesciunt possimus perspiciatis a neque
                        cupiditate soluta error dolorem sit, provident iusto nisi quidem velit molestias.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores similique, quibusdam modi
                        voluptates inventore rerum officiis aliquam amet quia laudantium ipsa atque nemo, dolor nam?
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae veniam sed eos ea qui vero
                        repellat dicta, mollitia nisi voluptatem? Doloribus commodi totam repellat fuga.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores similique, quibusdam modi
                        voluptates inventore rerum officiis aliquam amet quia laudantium ipsa atque nemo, dolor nam?
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae veniam sed eos ea qui vero
                        repellat dicta, mollitia nisi voluptatem? Doloribus commodi totam repellat fuga.
                    </p>
                </div>
                <div class="about__sejarah-wrapper-btn">
                    <div class="share-btn">
                        <div class="share-btn-wrapper">

                            <div class="share-btn-wrapper-btn">
                                <ion-icon name="logo-facebook"></ion-icon>Facebook
                            </div>
                            <div class="share-btn-wrapper-btn">
                                <ion-icon name="logo-whatsapp"></ion-icon>whatsapp
                            </div>
                            <div class="share-btn-wrapper-btn">
                                <ion-icon name="logo-twitter"></ion-icon>twitter
                            </div>
                        </div>
                        <div class="share-btn-share">
                            <ion-icon name="share-social"></ion-icon>
                        </div>
                    </div>
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
