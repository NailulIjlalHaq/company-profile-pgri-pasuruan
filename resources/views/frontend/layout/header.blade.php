<header class="header header-dark">
    <div class="header-container">
        <div class="header__logo" onclick="location.href='{{ route('feHome') }}'">
            <img src="../frontend/assets/img/logo.png" alt="Logo" />
            <p>
                PGRI <br />
                KAB PASURUAN
            </p>
        </div>
        <div class="header__dropdown">
            <ion-icon class="btn-show-navbar-phone" name="menu-outline"></ion-icon>
        </div>
        <div class="header__list">
            <div class="header__list-box">
                <a href={{ route('feHome') }} class="header__list-box--item home-link">Beranda</a>

            </div>
            <div class="header__list-box ">
                <a class="header__list-box--item about-link">Profile</a>
                <div class="header__list-box-dropdown">
                    <div class="header-dropdown">
                        <div class="header-dropdown-wrapper">
                            <div class="header-dropdown-wrapper__list"
                                onclick="location.href='{{ route('profile-sejarah') }}'">Sejarah</div>
                            <div class="header-dropdown-wrapper__list"
                                onclick="location.href='{{ route('profile-makna') }}'">Makna Logo</div>
                            <div class="header-dropdown-wrapper__list"
                                onclick="location.href='{{ route('profile-visi-misi') }}'"> Visi & misi</div>
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
            <div class="header-phone-top__logo" onclick="location.href='{{ route('feHome') }}'">
                <img src="../frontend/assets/img/logo.png" alt="Logo" />
                <p>
                    PGRI <br />
                    KAB PASURUAN
                </p>
            </div>

            <div class="header-phone-top__btn">
                <ion-icon class="btn-close-navbar-phone" name="close-outline"></ion-icon>
            </div>
        </div>

        <div class="header-phone-list">
            <a href={{ route('feHome') }} class="header-phone-list-item home-link">Beranda</a>
            <a class="header-phone-list-item about-link">Profile
                <div class="header__list-box-dropdown">
                    <div class="header-dropdown">
                        <div class="header-dropdown-wrapper">
                            <div class="header-dropdown-wrapper__list"
                                onclick="location.href='{{ route('profile-sejarah') }}'">Sejarah</div>
                            <div class="header-dropdown-wrapper__list"
                                onclick="location.href='{{ route('profile-makna') }}'">Makna Logo</div>
                            <div class="header-dropdown-wrapper__list"
                                onclick="location.href='{{ route('profile-visi-misi') }}'"> Visi & misi</div>
                        </div>
                    </div>
                </div>
            </a>
            <a href={{ route('feArtikel') }} class="header-phone-list-item artikel-link">Artikel</a>
            <a href={{ route('feBerita') }} class="header-phone-list-item berita-link">Berita</a>
            <a href={{ route('feGallery') }} class="header-phone-list-item gallery-link">Galeri</a>
            <a href={{ route('feContact') }} class="header-phone-list-item contact-link">Kontak</a>
        </div>
    </div>
</header>
