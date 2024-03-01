<!DOCTYPE html>
<html lang="en">

    @include('home.header')
    <script>
        // Disable right-click
        document.addEventListener('contextmenu', function (e) {
            e.preventDefault();
        });
    </script>

<body style="background: url('assets/img/back.jpeg') no-repeat center center fixed; background-size: cover;">
@include('sweetalert::alert')
@include('home.preloader')
@include('home.nav')
@include('home.slider')
@include('home.buttons')
@include('home.machines')
@include('home.blog')
@include('home.contact')
<!-- ***** Footer Start ***** -->
@include('home.footer')
@include('home.script')

</body>
</html>

