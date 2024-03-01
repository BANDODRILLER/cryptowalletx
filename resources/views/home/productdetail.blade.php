<!DOCTYPE html>
<html lang="en">

@include('home.header')

<body style="background: url('assets/img/back.jpeg') no-repeat center center fixed; background-size: cover;">


@include('home.preloader')
@include('home.nav')
<div style="height: 50px"></div>
{{--@include('home.slider')--}}
{{--@include('home.buttons')--}}
<!-- ***** Features Big Item Start ***** -->
<section class="section padding-top-70 padding-bottom-0" id="features" >
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <img src="assets/img/{{$imageUrl}}"
                class="rounded img-fluid d-block mx-auto" alt="App">
            </div>
            <div class="col-lg-1"></div>
            <div style="background-color: black" class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                <div class="left-heading">
                    <h2 class="section-title">Specifications for {{$name}}</h2>
                </div>
                <div class="left-text">
                    <p><span>PRICE :</span> <span>$ {{$pur}}</span></p>
                    <p><span>CYCLE :</span> <span> {{$totrevcy}} days</span></p>
                    <p><span>RETURN RATE :</span> <span>{{$retrate}} %</span></p>
                    <p><span>DAILY INCOME :</span> <span>$ {{$dyin}}</span></p>
                    <p><span>TOTAL RETURN :</span> <span>$ {{$totin}}</span></p>
                    <p><span>INVITATION REWARD :</span> <span>$ {{$invite}}</span></p>
{{--                    <p><span>MYSTERIOUS PRIZE :</span> <span>$ {{$mspr}}</span></p>--}}
                    <p><span>TOTAL RETURN RATE :</span> <span> {{$totretrate}}%</span></p>

                </div>

                <fieldset>
                            <a class="earnings_item_btn" href="javascript:void(0);" onclick="Invest( '{{$name}}', '{{$invite}}', '{{$imageUrl}}', '{{$totin}}', '{{$dyin}}', '{{$totrevcy}}', '{{$retrate}}', '{{$totretrate}}', '{{$dyin}}', '{{$pur}}');">Purchase $ {{$pur}} </a>
                </fieldset>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="hr">

                </div>
            </div>
        </div>
    </div>
</section>


<script>
    function Invest(name, invite, img, totin, dyin, totrevcy, retrate, totrerate, mspr, pur) {
        // Check if the user is authenticated
        @if(Auth::check())
        // Get the user's available balance from the backend
        var userBalance = {{ Auth::user()->amount }};
        // Check if the user's balance is sufficient for the purchase
        if (userBalance < pur) {
            // If the balance is insufficient, display an error message
            alert('Insufficient balance. Please top up your account.');
            return; // Exit the function early
        }
        @endif

        // If the user is authenticated and has sufficient balance, proceed with the purchase confirmation
        var submit = true; // Set submit to true
        if (submit == true) { // Check if submit is true
            var confirmPurchase = confirm('Confirm purchase of ' + name + '?');
            if (confirmPurchase) {
                var postUrl = '{{ route("purchase") }}?' +
                    'name=' + encodeURIComponent(name) +
                    '&invite=' + encodeURIComponent(invite) +
                    '&img=' + encodeURIComponent(img) +
                    '&totrevcy=' + encodeURIComponent(totrevcy) +
                    '&dyin=' + encodeURIComponent(dyin) +
                    '&totin=' + encodeURIComponent(totin) +
                    '&retrate=' + encodeURIComponent(retrate) +
                    '&totretrate=' + encodeURIComponent(totrerate) +
                    '&mspr=' + encodeURIComponent(mspr) +
                    '&pur=' + encodeURIComponent(pur);
                window.location.href = postUrl;
            } else {
                return false;
            }
        }
    }
</script>

<!-- ***** Features Big Item End ***** -->
<!-- ***** Footer Start ***** -->
@include('home.footer')
@include('home.script')

</body>
</html>

