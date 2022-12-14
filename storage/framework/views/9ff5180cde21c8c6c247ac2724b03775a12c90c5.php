<footer class="footer">
    <div class="footer-container">
        <div class="footer__wrapper">
            <div class="footer__wrapper--left">
                <div class="footer-logo-container">
                    <div onclick="window.location.href('<?php echo e(route('feHome')); ?>')" class="footer__wrapper--left__logo">
                        <img src=<?php echo e(asset('./frontend/assets/img/logo.png')); ?> alt="" />
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
                    <a href=<?php echo e(route('feHome')); ?> class="footer__wrapper--left__box--item">Beranda</a>
                    <a href=<?php echo e(route('feHome')); ?> class="footer__wrapper--left__box--item">Struktur</a>
                    <a href=<?php echo e(route('profile-makna')); ?> class="footer__wrapper--left__box--item">Makna Logo</a>
                    <a href=<?php echo e(route('profile-visi-misi')); ?> class="footer__wrapper--left__box--item">Visi & Misi</a>
                    <a href=<?php echo e(route('feArtikel')); ?> class="footer__wrapper--left__box--item">Artikel</a>
                    <a href=<?php echo e(route('feBerita')); ?> class="footer__wrapper--left__box--item">Berita</a>
                    <a href=<?php echo e(route('feGallery')); ?> class="footer__wrapper--left__box--item">Galeri</a>
                    <a href=<?php echo e(route('feContact')); ?> class="footer__wrapper--left__box--item">Kontak</a>
                </div>

            </div>
            <div class="footer__wrapper--right">
                <div class="footer__wrapper--right__medsos">
                    <div class="footer__wrapper--right__medsos--box">
                        <ion-icon onclick="window.open('')" name="logo-instagram"></ion-icon>
                    </div>

                    <div class="footer__wrapper--right__medsos--box">
                        <ion-icon onclick="window.open('')" name="logo-facebook"></ion-icon>
                    </div>

                    <div class="footer__wrapper--right__medsos--box">
                        <ion-icon onclick="window.open('')" name="logo-whatsapp"></ion-icon>
                    </div>
                </div>

                <div class="footer__wrapper--right__cr">Copyright SMKN 1 Purwosari 2022 ?? All rights reserved.</div>
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
<?php /**PATH C:\Users\rifaldi\MAGANG\company-profile-pgri-pasuruan\resources\views/frontend/layout/footer.blade.php ENDPATH**/ ?>