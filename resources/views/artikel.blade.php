@extends('index')
@section('content')
    <div class="artikel">
        <div class="artikel__wrapper">
            <div class="artikel__wrapper--bg"></div>
            <div class="artikel__wrapper--header">
                <div class="artikel__wrapper--header__search">
                    <div class="artikel-search">
                        <ion-icon name="search-outline"></ion-icon>
                        <input type="search" name="" id="" placeholder="Search...">
                    </div>
                </div>
                <div class="artikel__wrapper--header__title">
                    <p>artikel</p>
                    <p>10,000+ outstanding news articels</p>
                </div>
            </div>
            <div class="artikel__wrapper--content">
                <div class="artikel-container">
                    <div class="artikel-container-box">
                        <div class="artikel-container-box__top">
                            <div class="artikel-container-box__top--img"
                                style="background: url('{{ asset('./assets/img/berita1.jpg') }}') "></div>
                            <div class="artikel-container-box__top--info">
                                <div class="artikel-container-box__top--info-box">
                                    <p>Lorem Ipsum Dolor</p>
                                    <button>
                                        <ion-icon name="chevron-up-circle"></ion-icon>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="artikel-container-box__bot">
                            <p>
                                <ion-icon name="eye"></ion-icon> 250
                            </p>
                            <p>
                                <ion-icon name="share-social"></ion-icon> 300
                            </p>

                        </div>
                    </div>
                </div>
                <div class="artikel-container">
                    <div class="artikel-container-box">
                        <div class="artikel-container-box__top">
                            <div class="artikel-container-box__top--img"
                                style="background: url('{{ asset('./assets/img/juara.jpg') }}') "></div>
                            <div class="artikel-container-box__top--info">
                                <div class="artikel-container-box__top--info-box">
                                    <p>Lorem Ipsum Dolor</p>
                                    <button>
                                        <ion-icon name="chevron-up-circle"></ion-icon>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="artikel-container-box__bot">
                            <p>
                                <ion-icon name="eye"></ion-icon> 250
                            </p>
                            <p>
                                <ion-icon name="share-social"></ion-icon> 300
                            </p>

                        </div>
                    </div>
                </div>
                <div class="artikel-container">
                    <div class="artikel-container-box">
                        <div class="artikel-container-box__top">
                            <div class="artikel-container-box__top--img"
                                style="background: url('{{ asset('./assets/img/juara2.jpg') }}') "></div>
                            <div class="artikel-container-box__top--info">
                                <div class="artikel-container-box__top--info-box">
                                    <p>Lorem Ipsum Dolor</p>
                                    <button>
                                        <ion-icon name="chevron-up-circle"></ion-icon>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="artikel-container-box__bot">
                            <p>
                                <ion-icon name="eye"></ion-icon> 250
                            </p>
                            <p>
                                <ion-icon name="share-social"></ion-icon> 300
                            </p>

                        </div>
                    </div>
                </div>
                <div class="artikel-container">
                    <div class="artikel-container-box">
                        <div class="artikel-container-box__top">
                            <div class="artikel-container-box__top--img"
                                style="background: url('{{ asset('./assets/img/juara3.jpg') }}') "></div>
                            <div class="artikel-container-box__top--info">
                                <div class="artikel-container-box__top--info-box">
                                    <p>Lorem Ipsum Dolor</p>
                                    <button>
                                        <ion-icon name="chevron-up-circle"></ion-icon>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="artikel-container-box__bot">
                            <p>
                                <ion-icon name="eye"></ion-icon> 250
                            </p>
                            <p>
                                <ion-icon name="share-social"></ion-icon> 300
                            </p>

                        </div>
                    </div>
                </div>
                <div class="artikel-container">
                    <div class="artikel-container-box">
                        <div class="artikel-container-box__top">
                            <div class="artikel-container-box__top--img"
                                style="background: url('{{ asset('./assets/img/berita1.jpg') }}') "></div>
                            <div class="artikel-container-box__top--info">
                                <div class="artikel-container-box__top--info-box">
                                    <p>Lorem Ipsum Dolor</p>
                                    <button>
                                        <ion-icon name="chevron-up-circle"></ion-icon>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="artikel-container-box__bot">
                            <a href="#">
                                <ion-icon name="eye"></ion-icon> 250
                            </a>
                            <a href="#">
                                <ion-icon name="share-social"></ion-icon> 300
                            </a>

                        </div>
                    </div>
                </div>
                <div class="artikel-container">
                    <div class="artikel-container-box">
                        <div class="artikel-container-box__top">
                            <div class="artikel-container-box__top--img"
                                style="background: url('{{ asset('./assets/img/berita2.jpg') }}') "></div>
                            <div class="artikel-container-box__top--info">
                                <div class="artikel-container-box__top--info-box">
                                    <p>Lorem Ipsum Dolor</p>
                                    <button>
                                        <ion-icon name="chevron-up-circle"></ion-icon>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="artikel-container-box__bot">
                            <p>
                                <ion-icon name="eye"></ion-icon> 250
                            </p>
                            <p>
                                <ion-icon name="share-social"></ion-icon> 300
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
