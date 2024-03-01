
<!-- ***** Contact Us Start ***** -->

        <!-- ***** Section Title Start ***** -->
        <div class="row" style ="background-color: black;padding-top: 100px">
            <div class="col-lg-12">
                <div class="center-heading">
                    <h2 style="color: white" class="section-title">Talk To Us</h2>
                </div>
            </div>
            <div class="offset-lg-3 col-lg-6">
                <div class="center-text">
                    <p>Our technical team is ready with the answers</p>
                </div>
            </div>
        </div>
        <!-- ***** Section Title End ***** -->

        <div class="row"  style ="background-color: black">
            <!-- ***** Contact Text Start ***** -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <h5 style="color: white" class="margin-bottom-30">Keep in touch</h5>
                <div class="contact-text">
                    <p>001 - NAIROBI
                        <br>CRYPTO 2</p>
                    <p>Compose the message in english and it should be clear and straight to the point</p>
                </div>
            </div>
            <!-- ***** Contact Text End ***** -->

            <!-- ***** Contact Form Start ***** -->
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="contact-form">
                    <form id="contact" action="{{ route('contact.send') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="E-Mail Address" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button">Send Message</button>
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
