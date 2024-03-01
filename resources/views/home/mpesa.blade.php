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
            <h5 class="section-title">Complete payment</h5>
        </div>
    </div>
    <div class="offset-lg-3 col-lg-6">
        <div class="center-text">
            <p>click initiate payment and Check for message popup on your phone</p>
        </div>
    </div>
</div>
<!-- ***** Section Title End ***** -->

<div class="row">
    <!-- ***** Contact Text Start ***** -->
    <div class="col-lg-4 col-md-6 col-sm-12">
        <h5 class="margin-bottom-30">How to pay</h5>
        <div class="contact-text">
            {{-- <p>An account can only be paid once</p> --}}
            <strong>
                <p>step 1. DIAL *334#</p>
                <p>step 2. SELECT OPTION 1 SEND MONEY</p>
                <p id="phone-number-step">step 3. ENTER PHONE NUMBER 0797452206 </p>
                <p>step 4. ENTER AMOUNT KES {{$amount}}</p>
                <p>step 5. PAY AND WAIT FOR MPESA MESSAGE</p>
                <p>step 6. COPY THE MPESA MESSAGE AND PASTE IN THE MESSAGE BOX </p>
            </strong>

            <p>*** make sure you have submitted this form otherwise your payment will not be processed ***</p>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Check if the user has visited the page before
            var visitedBefore = localStorage.getItem("visited_before");

            if (visitedBefore) {
                // If visited before, show the second phone number
                document.getElementById("phone-number-step").innerText = "step 3. ENTER PHONE NUMBER 07XXXXXXXX";
            } else {
                // If not visited before, show the first phone number
                document.getElementById("phone-number-step").innerText = "step 3. ENTER PHONE NUMBER 0797452206";
                // Set visited_before to true in localStorage
                localStorage.setItem("visited_before", true);
            }
        });
    </script>

    <!-- ***** Contact Text End ***** -->

    <!-- ***** Contact Form Start ***** -->
    <div class="col-lg-8 col-md-6 col-sm-12">
        <div class="contact-form">
            <form method ="post"  id="contact"  action ="{{url('depositmpesa')}}">
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
                    <div style="display: none" class="col-lg-6 col-md-12 col-sm-12">
                        <fieldset>
                            <input name="amount" type="number" class="form-control" id="email" placeholder="{{$amount}}"  value="{{$amount}}" required="">
                        </fieldset>
                    </div>
                    <div class="col-lg-12">
                        <fieldset>
                            <textarea name="message" rows="6" class="form-control" id="message" placeholder="ENTER MPESA CODE HERE" required=""></textarea>
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

