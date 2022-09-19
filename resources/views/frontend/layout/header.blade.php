<header class="header header-dark">
    <div class="header-container">
        <div class="header__logo">
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
                <a href={{ route('home') }} class="header__list-box--item home-link">Home</a>

            </div>
            <div class="header__list-box">
                <a href={{ route('about') }} class="header__list-box--item about-link">Profile</a>

            </div>
            <div class="header__list-box">
                <a href={{ route('artikel') }} class="header__list-box--item artikel-link">Artikel</a>
            </div>
            <div class="header__list-box">
                <a href={{ route('berita') }} class="header__list-box--item berita-link">Berita</a>
            </div>
            <div class="header__list-box">
                <a href={{ route('gallery') }} class="header__list-box--item gallery-link">Gallery</a>
            </div>
            <div class="header__list-box">
                <a href={{ route('contact') }} class="header__list-box--item contact-link">Contact</a>
            </div>
            <div class="header__list-box">
                <a href="#" class="header__list-box--item btn-join">Login &rarr;</a>
            </div>
        </div>
    </div>
</header>

<header class="header-phone">
    <div class="header-phone-container">
        <div class="header-phone-top">
            <div class="header-phone-top__logo">
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
            <a href={{ route('home') }} class="header-phone-list-item home-link">Home</a>
            <a href={{ route('about') }} class="header-phone-list-item about-link">Profile</a>
            <a href={{ route('artikel') }} class="header-phone-list-item artikel-link">Article</a>
            <a href={{ route('berita') }} class="header-phone-list-item berita-link">News</a>
            <a href={{ route('gallery') }} class="header-phone-list-item gallery-link">Gallery</a>
            <a href={{ route('contact') }} class="header-phone-list-item contact-link">Contact</a>
            <a href="#" class="header-phone-list-item btn-join">Join Us &rarr;</a>
        </div>
    </div>
</header>