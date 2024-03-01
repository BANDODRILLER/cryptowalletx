<!DOCTYPE html>
<html lang="en">

@include('home.header')

<body style="  background-size: cover;">


@include('home.preloader')
@include('home.nav')
@include('sweetalert::alert')




<!-- ***** Section Title Start ***** -->
<section style="padding-top: 150px" class="section" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="center-heading">
                    <h5 class="section-title">Confirm withdrawal</h5>
                </div>
            </div>
            <div class="offset-lg-3 col-lg-6">
                <div class="center-text">
                    <p>Your payment will be processed and deposited in your mpesa number in 3 days</p>
                </div>
            </div>
        </div>
        <!-- ***** Section Title End ***** -->

        <div class="row">
            <!-- ***** Contact Text Start ***** -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <h5 class="margin-bottom-30">Disclaimer</h5>
                <div class="contact-text">
                    <p>An account can only be paid once at a time</p>

                    <p>*** make sure you have submitted this form otherwise your payment will not be processed ***</p>
                </div>
            </div>
            <!-- ***** Contact Text End ***** -->

            <!-- ***** Contact Form Start ***** -->
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="contact-form">
                    <form method ="post"  id="contact"  action ="{{url('mpesawithdrawal')}}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="phone" type="text" class="form-control" id="phone" placeholder="Enter phone number"  required="">
                                </fieldset>
                            </div>
                            <div style="display: none" class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                    <input  name="name" type="text" class="form-control" id="name" placeholder="{{$name}}" value="{{$name}}" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="amount" type="number" class="form-control" id="email" placeholder="{{$amount}}"  value="{{$amount}}" required="">
                                </fieldset>
                            </div>

                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button">Send for confirmation</button>
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

@include('home.footer')
@include('home.script')

</body>
</html>

