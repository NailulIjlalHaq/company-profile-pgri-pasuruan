@extends('frontend.index')
@section('content')
    <div class="detail-artikel">
        <div class="detail-artikel-wrapper">
            <div class="detail-artikel-wrapper__header">
                <div class="detail-artikel-wrapper__header-wrapper">
                    <p>
                        <ion-icon onclick="location.href='artikel'" name="arrow-back-outline"></ion-icon>
                    </p>
                    <p>Detail Artikel</p>
                </div>
            </div>
            <div class="detail-artikel-wrapper__content">
                <div class="detail-artikel-wrapper__content--pri">
                    <div class="detail-artikel-info">
                        <div class="detail-artikel-info--title">
                            <p>1, Juni 2022 / 19:20</p>
                            <p>
                                Our company in significant numbers
                            </p>
                        </div>
                        <div class="detail-artikel-info--img">
                            <div class="detail-artikel-info--img-img"
                                style="background: url({{ asset('./assets/img/berita1.jpg') }})"></div>
                        </div>
                        <div class="detail-artikel-info--info">
                            <p>
                                We focus on and take care of the development of our articles, taking care of the highest
                                level.
                                Meet our creators and their biographies. In this section you will find all the latest
                                articles
                                added by our blog specialists. We invite you to read.
                            </p>
                            <p>
                                Get to know our office and where to visit us. This is just an example of information about
                                our
                                activities. Visit our website every day and it will certainly be a useful and pleasant time
                                for
                                you. Use the navigation to find the articles.
                            </p>
                            <p>in this section you will find all the latest articles added by our blog specialists. We
                                invite you to read. Visit our website every day and it will certainly be a useful and
                                pleasant time for you.</p>


                        </div>
                        <div class="detail-artikel-info--btn">
                            <div class="share-btn">
                                <div class="share-btn-wrapper">

                                    <div class="share-btn-wrapper-btn">
                                        <ion-icon name="logo-facebook"></ion-icon>Facebook
                                    </div>
                                    <div class="share-btn-wrapper-btn">
                                        <ion-icon name="logo-whatsapp"></ion-icon>whatsapp
                                    </div>
                                    <div class="share-btn-wrapper-btn">
                                        <ion-icon name="logo-twitter"></ion-icon>twitter
                                    </div>
                                </div>
                                <div class="share-btn-share">
                                    <ion-icon name="share-social"></ion-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="detail-artikel-wrapper__content--sec">
                    <h1 class="detail-artikel-wrapper__content--sec-title">Lastes News</h1>
                    <hr class="detail-artikel-wrapper__content--sec-line">
                    <div class="berita-box">
                        <div class="berita-box__left" style="background: url({{asset('./assets/img/berita1.jpg')}})"></div>
                        <div class="berita-box__right">
                            <div class="berita-box__right--title">Kegiatan Pembelajaran Daring</div>
                            <div class="berita-box__right--desc">Lorem ipsum dolor sit amet adipcing ipsum dolor sit
                                amet adipcing aqua lorem ipsum.</div>
                            <div class="berita-box__right--bottom">
                                <p>20 Juni</p>
                                <p>
                                    <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="berita-box">
                        <div class="berita-box__left" style="background: url({{asset('./assets/img/berita2.jpg')}})"></div>
                        <div class="berita-box__right">
                            <div class="berita-box__right--title">Kegiatan Pembelajaran Daring</div>
                            <div class="berita-box__right--desc">Lorem ipsum dolor sit amet adipcing ipsum dolor sit
                                amet adipcing aqua lorem ipsum.</div>
                            <div class="berita-box__right--bottom">
                                <p>20 Juni</p>
                                <p>
                                    <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="berita-box">
                        <div class="berita-box__left" style="background: url({{asset('./assets/img/juara2.jpg')}})"></div>
                        <div class="berita-box__right">
                            <div class="berita-box__right--title">Kegiatan Pembelajaran Daring</div>
                            <div class="berita-box__right--desc">Lorem ipsum dolor sit amet adipcing ipsum dolor sit
                                amet adipcing aqua lorem ipsum.</div>
                            <div class="berita-box__right--bottom">
                                <p>20 Juni</p>
                                <p>
                                    <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="berita-box">
                        <div class="berita-box__left" style="background: url({{asset('./assets/img/juara3.jpg')}})"></div>
                        <div class="berita-box__right">
                            <div class="berita-box__right--title">Kegiatan Pembelajaran Daring</div>
                            <div class="berita-box__right--desc">Lorem ipsum dolor sit amet adipcing ipsum dolor sit
                                amet adipcing aqua lorem ipsum.</div>
                            <div class="berita-box__right--bottom">
                                <p>20 Juni</p>
                                <p>
                                    <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                                </p>
                            </div>
                        </div>
                    </div>
                    <hr class="detail-artikel-wrapper__content--sec-line">
                </div>
            </div>
        </div>
    </div>
@endsection
