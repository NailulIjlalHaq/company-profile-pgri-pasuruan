@extends('frontend.index')
@section('content')
    <div class="contact">
        <div class="contact-wrapper">
            <div class="contact__address">
                <div class="contact__address--title">
                    <p>Alamat Kami</p>
                    <p>Pgri Kabupaten Pasuruan</p>
                </div>

                <div class="contact__address--box">
                    <div class="address-box">
                        <div class="address-box-title">
                            <ion-icon name="mail-outline"></ion-icon>Email
                        </div>
                        <p>Example@gmail.com</p>
                    </div>
                    <div class="address-box">
                        <div class="address-box-title">
                            <ion-icon name="call-outline"></ion-icon>Telepon
                        </div>
                        <p>{{ $phone->data }}</p>
                    </div>
                    <div class="address-box">
                        <div class="address-box-title">
                            <ion-icon name="location-outline"></ion-icon>Alamat
                        </div>
                        <p>{{ $address->data }}</p>
                    </div>

                    <div class="address-box-medsos">
                        <div class="address-box-medsos--item">
                            <ion-icon onclick="window.open('{{ $ig->data }}')" name="logo-instagram">
                            </ion-icon>
                        </div>

                        <div class="address-box-medsos--item">
                            <ion-icon onclick="window.open('{{ $fb->data }}')" name="logo-facebook">
                            </ion-icon>
                        </div>

                        <div class="address-box-medsos--item">
                            <ion-icon onclick="window.open('{{ $wa->data }}')" name="logo-whatsapp"></ion-icon>
                        </div>
                    </div>


                </div>
            </div>
            <div class="contact__map">
                <div class="contact__map--info">
                    <p>PGRI Kab Pasuruan</p>
                    <p>
                        <ion-icon name="locate-outline"></ion-icon>{{ $address->data }}
                    </p>
                    <p>
                        <ion-icon name="mail-outline"></ion-icon>Pasuruan@gmail.com
                    </p>
                    <p>
                        <ion-icon name="location-outline"></ion-icon><a href="">Lihat Di Google map</a>
                    </p>
                </div>
                <div id="map"></div>
            </div>
        </div>
    </div>
@endsection
