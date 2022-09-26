<footer class="footer">
    <div class="footer-container">
        <div class="footer__wrapper">
            <div class="footer__wrapper--left">
                <div class="footer-logo-container">
                    <div onclick="window.location.href('{{ route('feHome') }}')" class="footer__wrapper--left__logo">
                        <img src={{ asset('./frontend/assets/img/logo.png') }} alt="" />
                        <p>
                            PGRI <br />
                            KAB PASURUAN
                        </p>
                    </div>
                    <div class="footer__wrapper--left__desc">
                        Transform the way companies manage <br />
                        payments electronically without the high <br />
                        payment fees.
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
            <div class="footer__wrapper--right">
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

        <hr />
        <div class="footer__bottom">
            <div class="footer-address">
                <div class="footer-address__phone">
                    <p>
                        <ion-icon name="call"></ion-icon>
                    </p>
                    <p>
                        <?php
                        print_r($configs[4]['data']);
                        ?></p>
                </div>
                <div class="footer-address__alamat">
                    <p>
                        <ion-icon name="location"></ion-icon>
                    </p>
                    <p>
                        <?php
                        print_r($configs[3]['data']);
                        ?>
                    </p>
                </div>
                <div class="footer-address__email">
                    <p>
                        <ion-icon name="mail"></ion-icon>
                    </p>
                    <p> <?php
                    print_r($configs[5]['data']);
                    ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>
