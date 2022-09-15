@extends('index')
@section('content')
    <div class="gallery">
        <div class="gallery-wrapper">
            <div class="gallery-wrapper__header">
                <p>Gallery</p>
                <p>10,000+ outstanding news photos</p>
            </div>
            <div class="gallery-wrapper__content">
                <div class="gallery-container">

                </div>
            </div>
        </div>
    </div>

@section('js')
    <script>
        for (let i = 0; i < 8; i++) {
            $('.gallery-container').append(
                `<div class="gallery-container-box" style="background: url({{ asset('./assets/img/juara.jpg') }})"></div>`
            )
        }
    </script>
@endsection
@endsection
