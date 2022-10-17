<header class="header header-dark">
    <div class="header-container">
        <a class="header__logo" href="<?php echo e(route('feHome')); ?>">
            <img src="<?php echo e(asset('./frontend/assets/img/logo.png')); ?>" alt="Logo" />
            <p>
                PGRI <br />
                KAB PASURUAN
            </p>
        </a>
        <div class="header__dropdown">
            <ion-icon class="btn-show-navbar-phone" name="menu-outline"></ion-icon>
        </div>
        <div class="header__list">
            <div class="header__list-box">
                <a href="<?php echo e(route('feHome')); ?>" class="header__list-box--item home-link">Beranda</a>
            </div>

            <div class="header__list-box ">
                <a class="header__list-box--item profil-link">Profil PGRI</a>
                <div class="header__list-box-dropdown">
                    <div class="header-dropdown">
                        <div class="header-dropdown-wrapper">
                            <a class="header-dropdown-wrapper__list" href="<?php echo e(route('feProfil', 1)); ?>">
                                <div class="header-dropdown-wrapper__list--left">
                                    <ion-icon name="cafe-outline"></ion-icon>
                                </div>
                                <div class="header-dropdown-wrapper__list--right">
                                    <p>
                                        Sambutan Ketua
                                    </p>
                                    <p>
                                        Berisikan sambutan dari Ketua PGRI
                                    </p>
                                </div>
                            </a>
                            <a class="header-dropdown-wrapper__list" href="<?php echo e(route('feProfil', 4)); ?>">
                                <div class="header-dropdown-wrapper__list--left">
                                    <ion-icon name="alarm-outline"></ion-icon>
                                </div>
                                <div class="header-dropdown-wrapper__list--right">
                                    <p>
                                        Sejarah
                                    </p>
                                    <p>
                                        Menerangkan sejarah PGRI
                                    </p>
                                </div>
                            </a>
                            <a class="header-dropdown-wrapper__list" href="<?php echo e(route('feProfil', 2)); ?>">
                                <div class=" header-dropdown-wrapper__list--left">
                                    <ion-icon name="megaphone-outline"></ion-icon>
                                </div>
                                <div class="header-dropdown-wrapper__list--right">
                                    <p>
                                        Visi & Misi
                                    </p>
                                    <p>
                                        Berisikan visi dan misi PGRI
                                    </p>
                                </div>
                            </a>
                            <a class="header-dropdown-wrapper__list" href="<?php echo e(route('feProfil', 3)); ?>">
                                <div class="header-dropdown-wrapper__list--left">
                                    <ion-icon name="git-merge-outline"></ion-icon>
                                </div>
                                <div class="header-dropdown-wrapper__list--right">
                                    <p>
                                        Struktur Organisasi
                                    </p>
                                    <p>
                                        Berisikan struktur organisasi PGRI
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header__list-box ">
                <a class="header__list-box--item pko-link">PKO PGRI</a>
                <div class="header__list-box-dropdown" style="left: -4rem">
                    <div class="header-dropdown">
                        <div class="header-dropdown-wrapper">
                            <a class="header-dropdown-wrapper__list"
                                href="<?php echo e(route('fePko', ['profil' => '5', 'kategori' => '2'])); ?>">
                                <div class="header-dropdown-wrapper__list--right">
                                    <p>
                                        YPLP Dasmen PGRI
                                    </p>
                                </div>
                            </a>
                            <a class="header-dropdown-wrapper__list"
                                href="<?php echo e(route('fePko', ['profil' => '6', 'kategori' => '3'])); ?>">

                                <div class="header-dropdown-wrapper__list--right">
                                    <p>
                                        LKBH - DKGI PGRI

                                    </p>

                                </div>
                            </a>
                            <a class="header-dropdown-wrapper__list"
                                href="<?php echo e(route('fePko', ['profil' => '7', 'kategori' => '4'])); ?>">

                                <div class="header-dropdown-wrapper__list--right">
                                    <p>
                                        IGTKI PGRI

                                    </p>

                                </div>
                            </a>
                            <a class="header-dropdown-wrapper__list"
                                href="<?php echo e(route('fePko', ['profil' => '8', 'kategori' => '5'])); ?>">

                                <div class="header-dropdown-wrapper__list--right">
                                    <p>

                                        SLCC PGRI
                                    </p>

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="header__list-box">
                <a href="<?php echo e(route('feArtikel')); ?>" class="header__list-box--item artikel-link">Artikel</a>
            </div>
            <div class="header__list-box">
                <a href="<?php echo e(route('feBerita')); ?>" class="header__list-box--item berita-link">Berita</a>
            </div>
            <div class="header__list-box">
                <a href="<?php echo e(route('feGallery')); ?>" class="header__list-box--item gallery-link">Galeri</a>
            </div>
            <div class="header__list-box">
                <a href="https://newsik.pgri.or.id/" target="_blank" class="header__list-box--item ">Registrasi
                    Anggota</a>
            </div>
            <div class="header__list-box">
                <a href="<?php echo e(route('feContact')); ?>" class="header__list-box--item contact-link">Kontak</a>
            </div>

        </div>
    </div>
</header>

<header class="header-phone">
    <div class="header-phone-container">
        <div class="header-phone-top">
            <a class="header-phone-top__logo" href="<?php echo e(route('feHome')); ?>">
                <img src="<?php echo e(asset('./frontend/assets/img/logo.png')); ?>" alt="Logo" />
                <p>
                    PGRI <br />
                    KAB PASURUAN
                </p>
            </a>

            <div class="header-phone-top__btn">
                <ion-icon class="btn-close-navbar-phone" name="close-outline"></ion-icon>
            </div>
        </div>
        <div style="width: 100%;height: 100%; overflow: auto; display: flex;align-items: center">
            <div class="header-phone-list">
                <a href="<?php echo e(route('feHome')); ?>" class="header-phone-list-item home-link">Beranda</a>

                <div class="header-phone-list-dropdown">
                    <span class="profil-link">Profil<ion-icon name="caret-down-outline"></ion-icon>
                    </span>
                    <div class="header-phone-list-dropdown-box">
                        <a href="<?php echo e(route('feProfil', 4)); ?>" class="sejarah-link">Sejarah</a>
                        <a href="<?php echo e(route('feProfil', 1)); ?>" class="sambutan-link">Sambutan Ketua</a>
                        <a href="<?php echo e(route('feProfil', 3)); ?>" class="struktur-link">Struktur Organisasi</a>
                        <a href="<?php echo e(route('feProfil', 2)); ?>" class="vm-link">Visi Misi</a>
                    </div>
                </div>


                <div class="header-phone-list-dropdown">
                    <span class="pko-link">PKO PGRI<ion-icon name="caret-down-outline"></ion-icon>
                    </span>
                    <div class="header-phone-list-dropdown-box">
                        <a href="<?php echo e(route('fePko', ['profil' => '5', 'kategori' => '2'])); ?>" class="igtki-link">IGTKI
                            PGRI</a>
                        <a href="<?php echo e(route('fePko', ['profil' => '6', 'kategori' => '3'])); ?>" class="lkbh-link">LKBH -
                            DKGI
                            PGRI</a>
                        <a href="<?php echo e(route('fePko', ['profil' => '7', 'kategori' => '4'])); ?>" class="yplp-link">YPLP
                            Basmen
                            PGRI</a>
                        <a href="<?php echo e(route('fePko', ['profil' => '8', 'kategori' => '5'])); ?>" class="slcc-link">SLCC
                            PGRI</a>
                    </div>
                </div>

                <a href="<?php echo e(route('feArtikel')); ?>" class="header-phone-list-item artikel-link">Artikel</a>
                <a href="<?php echo e(route('feBerita')); ?>" class="header-phone-list-item berita-link">Berita</a>
                <a href="<?php echo e(route('feGallery')); ?>" class="header-phone-list-item gallery-link">Galeri</a>
                <a href="https://newsik.pgri.or.id/" class="header-phone-list-item  gallery-link">Registrasi
                    Anggota</a>
                <a href="<?php echo e(route('feContact')); ?>" class="header-phone-list-item contact-link">Kontak</a>
            </div>
        </div>
    </div>

    </div>
</header>
<?php /**PATH C:\Users\rifaldi\MAGANG\company-profile-pgri-pasuruan\resources\views/frontend/layout/header.blade.php ENDPATH**/ ?>