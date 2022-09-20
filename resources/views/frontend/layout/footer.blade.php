<footer class="footer">
    <div class="footer-container">
        <div class="footer__wrapper">
            <div class="footer__wrapper--left">
                <div class="footer-logo-container">
                    <div onclick="window.location.href('{{ route('home') }}')" class="footer__wrapper--left__logo">
                        <img src="../assets/img/logo.png" alt="" />
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

                <div class="footer__wrapper--left__box">
                    <a href={{ route('feHome') }} class="footer__wrapper--left__box--item">Home</a>
                    <a href={{ route('feAbout') }} class="footer__wrapper--left__box--item">Profile</a>
                    <a href={{ route('feArtikel') }} class="footer__wrapper--left__box--item">Artikel</a>
                    <a href={{ route('feBerita') }} class="footer__wrapper--left__box--item">Berita</a>
                    <a href={{ route('feGallery') }} class="footer__wrapper--left__box--item">Gallery</a>
                    <a href={{ route('feContact') }} class="footer__wrapper--left__box--item">contact</a>
                </div>

            </div>
            <div class="footer__wrapper--right">
                <div class="footer__wrapper--right__medsos">
                    <div class="footer__wrapper--right__medsos--box">
                        <ion-icon onclick="window.open('https://www.instagram.com/')" name="logo-instagram"></ion-icon>
                    </div>
                    <div class="footer__wrapper--right__medsos--box">
                        <ion-icon onclick="window.open('https://www.linkedin.com/')" name="logo-linkedin"></ion-icon>
                    </div>
                    <div class="footer__wrapper--right__medsos--box">
                        <ion-icon onclick="window.open('https://www.facebook.com/')" name="logo-facebook"></ion-icon>
                    </div>
                    <div class="footer__wrapper--right__medsos--box">
                        <ion-icon onclick="window.open('https://www.youtube.com/')" name="logo-youtube"></ion-icon>
                    </div>
                    <div class="footer__wrapper--right__medsos--box">
                        <ion-icon onclick="window.open('https://www.twitter.com/')"name="logo-twitter"></ion-icon>
                    </div>
                </div>

                <div class="footer__wrapper--right__cr">Copyright SMKN 1 Purwosari 2022 © All rights reserved.</div>
            </div>
        </div>

        <hr />
        <div class="footer__bottom">
            <div class="footer__bottom--left">
                <div class="footer__bottom--left__phone">
                    <p>
                        <ion-icon name="call"></ion-icon>
                    </p>
                    <p>(0343) 613747</p>
                </div>
                <div class="footer__bottom--left__alamat">
                    <p>
                        <ion-icon name="location"></ion-icon>
                    </p>
                    <p>
                        Jl. Raya Purwosari No. 1, Kec Purwosari, <br />
                        Kab Pasuruan, Jawa Timur 67162
                    </p>
                </div>
                <div class="footer__bottom--left__email">
                    <p>
                        <ion-icon name="mail"></ion-icon>
                    </p>
                    <p>purwosarismkn1@yahoo.co.id</p>
                </div>
            </div>
        </div>
    </div>
</footer>
