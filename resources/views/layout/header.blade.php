<header class="header">
    <div class="header-container">
        <div class="header__logo">
            <img src="../assets/img/logo.png" alt="Logo" />
            <p>
                PGRI <br />
                KAB PASURUAN
            </p>
        </div>

        <div class="header__dropdown">
            <ion-icon class="btn-show-navbar-phone" name="menu-outline"></ion-icon>
        </div>

        <div class="header__list">
            <a href={{ route('home') }} class="header__list--item home-link">Beranda</a>
            <a href={{ route('about') }} class="header__list--item about-link">Tentang</a>
            <a href="#" class="header__list--item btn-join">Join Us &rarr;</a>
        </div>
    </div>
</header>

<header class="header-phone">
    <div class="header-phone-container">
        <div class="header-phone-top">
            <div class="header-phone-top__logo">
                <img src="../assets/img/logo.png" alt="Logo" />
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
            <a href="./home.html" class="header-phone-list-item home-link">Beranda</a>
            <a href="./about.html" class="header-phone-list-item about-link">Tentang</a>
            <a href="#" class="header-phone-list-item btn-join">Join Us &rarr;</a>
        </div>
    </div>
</header>
