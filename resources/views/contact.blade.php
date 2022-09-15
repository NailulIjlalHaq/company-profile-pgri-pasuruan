@extends('index')
@section('content')
    <div class="contact">
        <div class="contact-wrapper">
            <form action='' method="POST" class="contact__form">
                {{ csrf_field() }}
                <div class="contact__form--title">
                    <div class="contact__form--title--box">
                        <p>Contact Us</p>
                        <p>Perfect Solution for digital experience</p>
                    </div>

                </div>

                <div class="contact__form--input">
                    <p>Full Name</p>
                    <input class="@error('name') unvalidated-input @enderror" placeholder="Your Name" type="text"
                        name="name" min="5">
                    @error('name')
                        <div class="unvalidated">
                            {{ $message }}
                            <div class="unvalidated-popup">
                                <ion-icon name="information-circle-outline"></ion-icon>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="contact__form--input">
                    <p>Email</p>
                    <input class="@error('email') unvalidated-input @enderror" placeholder="Your Email" type="email"
                        name="email">
                    @error('email')
                        <div class="unvalidated">
                            {{ $message }}
                            <div class="unvalidated-popup">
                                <ion-icon name="information-circle-outline"></ion-icon>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="contact__form--input">
                    <p>Phone Number</p>
                    <input class="@error('phone') unvalidated-input @enderror" placeholder="085xxxxxxx" type="number"
                        name="phone">
                    @error('email')
                        <div class="unvalidated">
                            {{ $message }}
                            <div class="unvalidated-popup">
                                <ion-icon name="information-circle-outline"></ion-icon>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="contact__form--input">
                    <p>message</p>
                    <textarea class="@error('message') unvalidated-input @enderror" name="message"></textarea>
                    @error('message')
                        <div class="unvalidated">
                            {{ $message }}
                            <div class="unvalidated-popup">
                                <ion-icon name="information-circle-outline"></ion-icon>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="contact__form--submit">
                    <button type="submit" name="submit">Kirim</button>
                </div>
            </form>
            <div class="contact__map">
                <div class="contact__map--info">
                    <p>PGRI Kab Pasuruan</p>
                    <p>
                        <ion-icon name="locate-outline"></ion-icon>Jl Goa Jalmo, RT2/RW1 <br> Jatikauman, Cendono,
                        Purwosari
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

@section('js')
    <script>
        $('.contact__form--input input , .contact__form--input textarea').on('keyup', function() {
            if ($(this).val()) {
                $(this).removeClass('unvalidated-input')
            } else if ($(this).val(null)) {
                $(this).addClass('unvalidated-input')
            }
        })
    </script>
@endsection
@endsection
