<!DOCTYPE html>
<html lang="en">
@include('layout/link')

<body>
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
