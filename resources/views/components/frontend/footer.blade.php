<footer class="footer">
    <div class="footer-container">
        <div class="footer__wrapper">
            <div class="footer__wrapper--top">
                <div class="footer-logo-container">
                    <div href="{{ route('feHome') }}" class="footer-logo-container__logo">
                        <img src="{{ asset('./frontend/assets/img/logo.png') }}" alt="" />
                        <p>
                            PGRI <br />
                            KAB PASURUAN
                        </p>
                    </div>
                    <!-- <div class="footer-logo-container__desc">
                        Transform the way companies manage <br />
                        payments electronically without the high <br />
                        payment fees.
                    </div> -->
                </div>
                @php
                $setting = settings();
                @endphp
                <div class="footer-address">
                    <div class="footer-address__phone">
                        <p>
                            <ion-icon name="call"></ion-icon>
                        </p>
                        <p>{{$setting[1]['data']}}</p>
                    </div>
                    <div class="footer-address__alamat">
                        <p>
                            <ion-icon name="location"></ion-icon>
                        </p>
                        <p>
                            {{setting[3]['data']}}
                        </p>
                    </div>
                    <div class="footer-address__email">
                        <p>
                            <ion-icon name="mail"></ion-icon>
                        </p>
                        <p> {{setting[5]['data']}}</p>
                    </div>
                </div>
                {{-- <div class="footer__wrapper--left__box">
                    <a href={{ route('feHome') }} class="footer__wrapper--left__box--item">Beranda</a>
                <a href={{ route('feHome') }} class="footer__wrapper--left__box--item">Struktur</a>
                <a href={{ route('profile-makna') }} class="footer__wrapper--left__box--item">Makna Logo</a>
                <a href={{ route('profile-visi-misi') }} class="footer__wrapper--left__box--item">Visi & Misi</a>
                <a href={{ route('feArtikel') }} class="footer__wrapper--left__box--item">Artikel</a>
                <a href={{ route('feBerita') }} class="footer__wrapper--left__box--item">Berita</a>
                <a href={{ route('feGallery') }} class="footer__wrapper--left__box--item">Galeri</a>
                <a href={{ route('feContact') }} class="footer__wrapper--left__box--item">Kontak</a>
            </div> --}}

        </div>
        <hr />
        <div class="footer__wrapper--bot">
            <div class="footer-medsos">
                <div class="footer-medsos--box">
                    <ion-icon onclick="window.open('')" name="logo-instagram"></ion-icon>
                </div>

                <div class="footer-medsos--box">
                    <ion-icon onclick="window.open('')" name="logo-facebook"></ion-icon>
                </div>

                <div class="footer-medsos--box">
                    <ion-icon onclick="window.open('')" name="logo-whatsapp"></ion-icon>
                </div>
            </div>

            <div class="footer-cr">Copyright SMKN 1 Purwosari 2022 © All rights reserved.</div>
        </div>
    </div>

    </div>
</footer>