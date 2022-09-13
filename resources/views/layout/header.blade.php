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
            <div class="header__list-box">
                <a href={{ route('home') }} class="header__list-box--item home-link">Home</a>
                <div class="list-dropdown list-dropdown-home">
                    <div class="list-dropdown-title">Profile</div>
                    <div class="list-dropdown-wrapper">
                        <div class="list-dropdown-wrapper-list">
                            <p class="list-dropdown-wrapper-list-item">Title 1</p>
                            <a href="#" class="list-dropdown-wrapper-list-item">item 1 <ion-icon
                                    name="chevron-forward-outline"></ion-icon></a>
                            <a href="#" class="list-dropdown-wrapper-list-item">item 2 <ion-icon
                                    name="chevron-forward-outline"></ion-icon></a>
                            <a href="#" class="list-dropdown-wrapper-list-item">item 3 <ion-icon
                                    name="chevron-forward-outline"></ion-icon></a>
                        </div>
                        <div class="list-dropdown-wrapper-list">
                            <p class="list-dropdown-wrapper-list-item">Title 2</p>
                            <a href="#" class="list-dropdown-wrapper-list-item">item 1<ion-icon
                                    name="chevron-forward-outline"></ion-icon></a>
                            <a href="#" class="list-dropdown-wrapper-list-item">item 2<ion-icon
                                    name="chevron-forward-outline"></ion-icon></a>
                            <a href="#" class="list-dropdown-wrapper-list-item">item 3<ion-icon
                                    name="chevron-forward-outline"></ion-icon></a>
                            <a href="#" class="list-dropdown-wrapper-list-item">item 4 <ion-icon
                                    name="chevron-forward-outline"></ion-icon></a>
                        </div>
                        <div class="list-dropdown-wrapper-list">
                            <p class="list-dropdown-wrapper-list-item">Title 3</p>
                            <a href="#" class="list-dropdown-wrapper-list-item">item 1 <ion-icon
                                    name="chevron-forward-outline"></ion-icon></a>
                            <a href="#" class="list-dropdown-wrapper-list-item">item 2 <ion-icon
                                    name="chevron-forward-outline"></ion-icon></a>
                            <a href="#" class="list-dropdown-wrapper-list-item">item 3 <ion-icon
                                    name="chevron-forward-outline"></ion-icon></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__list-box">
                <a href={{ route('about') }} class="header__list-box--item about-link">Tentang</a>
                <div class="list-dropdown list-dropdown-about">
                    <div class="list-dropdown-title">Profile</div>
                    <div class="list-dropdown-wrapper">
                        <div class="list-dropdown-wrapper-list">
                            <p class="list-dropdown-wrapper-list-item">Title 1</p>
                            <a href="#" class="list-dropdown-wrapper-list-item">item 1 <ion-icon
                                    name="chevron-forward-outline"></ion-icon></a>
                            <a href="#" class="list-dropdown-wrapper-list-item">item 2 <ion-icon
                                    name="chevron-forward-outline"></ion-icon></a>
                            <a href="#" class="list-dropdown-wrapper-list-item">item 3 <ion-icon
                                    name="chevron-forward-outline"></ion-icon></a>
                        </div>
                        <div class="list-dropdown-wrapper-list">
                            <p class="list-dropdown-wrapper-list-item">Title 2</p>
                            <a href="#" class="list-dropdown-wrapper-list-item">item 1<ion-icon
                                    name="chevron-forward-outline"></ion-icon></a>
                            <a href="#" class="list-dropdown-wrapper-list-item">item 2<ion-icon
                                    name="chevron-forward-outline"></ion-icon></a>
                            <a href="#" class="list-dropdown-wrapper-list-item">item 3<ion-icon
                                    name="chevron-forward-outline"></ion-icon></a>
                            <a href="#" class="list-dropdown-wrapper-list-item">item 4 <ion-icon
                                    name="chevron-forward-outline"></ion-icon></a>
                        </div>
                        <div class="list-dropdown-wrapper-list">
                            <p class="list-dropdown-wrapper-list-item">Title 3</p>
                            <a href="#" class="list-dropdown-wrapper-list-item">item 1 <ion-icon
                                    name="chevron-forward-outline"></ion-icon></a>
                            <a href="#" class="list-dropdown-wrapper-list-item">item 2 <ion-icon
                                    name="chevron-forward-outline"></ion-icon></a>
                            <a href="#" class="list-dropdown-wrapper-list-item">item 3 <ion-icon
                                    name="chevron-forward-outline"></ion-icon></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__list-box">
                <a href="#" class="header__list-box--item btn-join">Join Us &rarr;</a>
            </div>
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
