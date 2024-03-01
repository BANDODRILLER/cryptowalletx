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

<!-- ***** Contact Us Start ***** -->

<!-- ***** Section Title Start ***** -->
<div class="row" style ="background-color: black;padding-top: 100px">

    <div class="offset-lg-3 col-lg-6">
        <div class="center-text">
            <p>Enter a valid code</p>
        </div>
    </div>
</div>
<!-- ***** Section Title End ***** -->

<div class="row"  style ="background-color: black">
    <!-- ***** Contact Text Start ***** -->
    <div class="col-lg-4 col-md-6 col-sm-12">
        <h5 style="color: white" class="margin-bottom-30">ENTER YOUR CODE <HERE></HERE></h5>

    </div>
    <!-- ***** Contact Text End ***** -->

    <!-- ***** Contact Form Start ***** -->
    <div class="col-lg-8 col-md-6 col-sm-12">
        <div class="contact-form">
            <form id="contact" action="{{ route('redeem') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <fieldset>
                            <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your code" required=""></textarea>
                        </fieldset>
                    </div>
                    <div class="col-lg-12">
                        <fieldset>
                            <button type="submit" id="form-submit" class="main-button">CLAIM</button>
                        </fieldset>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- ***** Contact Form End ***** -->
</div>
</div>
</section>
<!-- ***** Contact Us End ***** -->

<!-- ***** Footer Start ***** -->
@include('home.footer')
@include('home.script')

</body>
</html>

