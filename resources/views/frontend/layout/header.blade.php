<header class="header header-dark">
    <div class="header-container">
        <a class="header__logo" href="{{ route('feHome') }}">
            <img src={{ asset('./frontend/assets/img/logo.png') }} alt="Logo" />
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
                <a href={{ route('feHome') }} class="header__list-box--item home-link">Beranda</a>

            </div>
            <div class="header__list-box ">
                <a class="header__list-box--item about-link">Profil PGRI</a>
                <div class="header__list-box-dropdown">
                    <div class="header-dropdown">
                        <div class="header-dropdown-wrapper">
                            <a class="header-dropdown-wrapper__list" href="{{ route('feProfil',1) }}">
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
                            <a class="header-dropdown-wrapper__list" href="{{ route('feProfil',4) }}">
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
                            <a class="header-dropdown-wrapper__list" href="{{ route('feProfil',2) }}">
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
                            <a class="header-dropdown-wrapper__list" href="{{ route('feProfil',3) }}">
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
            <div class="header__list-box">
                <a href={{ route('feArtikel') }} class="header__list-box--item artikel-link">Artikel</a>
            </div>
            <div class="header__list-box">
                <a href={{ route('feBerita') }} class="header__list-box--item berita-link">Berita</a>
            </div>
            <div class="header__list-box">
                <a href={{ route('feGallery') }} class="header__list-box--item gallery-link">Galeri</a>
            </div>
            <div class="header__list-box">
                <a href={{ route('feContact') }} class="header__list-box--item contact-link">Kontak</a>
            </div>

        </div>
    </div>
</header>

<header class="header-phone">
    <div class="header-phone-container">
        <div class="header-phone-top">
            <a class="header-phone-top__logo" href="{{ route('feHome') }}">
                <img src={{ asset('./frontend/assets/img/logo.png') }} alt="Logo" />
                <p>
                    PGRI <br />
                    KAB PASURUAN
                </p>
            </a>

            <div class="header-phone-top__btn">
                <ion-icon class="btn-close-navbar-phone" name="close-outline"></ion-icon>
            </div>
        </div>

        <div class="header-phone-list">
            <a href={{ route('feHome') }} class="header-phone-list-item home-link">Beranda</a>
            <a href={{ route('feProfil',4) }} class="header-phone-list-item sejarah-link">Sejarah</a>
            <a href={{ route('feProfil',1) }} class="header-phone-list-item sejarah-link">Sambuta Ketua</a>
            <a href={{ route('feProfil',3) }} class="header-phone-list-item makna-link">Struktur Organisasi</a>
            <a href={{ route('feProfil',2) }} class="header-phone-list-item vm-link">Visi Misi</a>
            <a href={{ route('feArtikel') }} class="header-phone-list-item artikel-link">Artikel</a>
            <a href={{ route('feBerita') }} class="header-phone-list-item berita-link">Berita</a>
            <a href={{ route('feGallery') }} class="header-phone-list-item gallery-link">Galeri</a>
            <a href={{ route('feContact') }} class="header-phone-list-item contact-link">Kontak</a>
        </div>
    </div>
</header>