<!DOCTYPE html>
<html lang="en">
<style>
    .loader {
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        z-index: 1000;
        background-color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s linear;
    }

    .loader img {
        animation: shake 0.5s;
        animation-iteration-count: infinite;
        height: 10rem;
        width: 10rem;
    }

    @keyframes shake {
        0% {
            transform: translate(1px, 1px) rotate(0deg);
        }

        10% {
            transform: translate(-1px, -2px) rotate(-1deg);
        }

        20% {
            transform: translate(-3px, 0px) rotate(1deg);
        }

        30% {
            transform: translate(3px, 2px) rotate(0deg);
        }

        40% {
            transform: translate(1px, -1px) rotate(1deg);
        }

        50% {
            transform: translate(-1px, 2px) rotate(-1deg);
        }

        60% {
            transform: translate(-3px, 1px) rotate(0deg);
        }

        70% {
            transform: translate(3px, 1px) rotate(-1deg);
        }

        80% {
            transform: translate(-1px, -1px) rotate(1deg);
        }

        90% {
            transform: translate(1px, 2px) rotate(0deg);
        }

        100% {
            transform: translate(1px, -2px) rotate(-1deg);
        }
    }
</style>
@include('layout/link')

<body>
    <div class="loader">
        <img src={{ asset('./assets/img/logo.png') }} alt="">
    </div>

    @include('layout/header')
    <div class="global-container">
        @yield('content')
    </div>
    @include('layout/footer')
    <script src="{{ asset('./js/jquery.js') }}"></script>
    @include('layout/script')
    @yield('js')
</body>

</html>
