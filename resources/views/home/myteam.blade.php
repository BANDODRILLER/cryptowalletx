<!DOCTYPE html>
<html lang="en">

@include('home.header')

<body style="background: url('assets/img/back.jpeg') no-repeat center center fixed; background-size: cover;">


@include('home.preloader')
@include('home.nav')
<!-- ***** Blog Start ***** -->
<section class="section" id="blog">
    <div class="container">
<div class="page-content">
    <div id="slideBox" class="slideBox">
        <div class="bd" style="margin-top: 0px;height: 200px">
            <ul>
                <li>
                    <a class="pic" href="#">
                        <img src="assets/img/team.jpeg" alt="banner1"/>
                    </a>
                </li>

            </ul>
        </div>
        <div class="hd">
            <ul></ul>
        </div>
    </div>
</div>



        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <!-- ***** Features Small Item Start ***** -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                        <div class="features-small-item">
                            <div class="icon">
                                <i><img src="assets/images/featured-item-01.png" alt=""></i>
                            </div>
                            <h5 class="features-title">TOP EARNING</h5>
                            <p style="font-size: 2rem">$ 0</p>
                        </div>
                    </div>
                    <!-- ***** Features Small Item End ***** -->

                    <!-- ***** Features Small Item Start ***** -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                        <div class="features-small-item">
                            <div class="icon">
                                <i><img src="assets/images/featured-item-01.png" alt=""></i>
                            </div>
                            <h5 class="features-title">TEAM SIZE</h5>
                            <p style="font-size: 2rem"> {{$team}}</p>
                        </div>
                    </div>
                    <!-- ***** Features Small Item End ***** -->

                    <!-- ***** Features Small Item Start ***** -->

                    <!-- ***** Features Small Item End ***** -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Small End ***** -->
<!-- ***** Footer Start ***** -->
@include('home.footer')
@include('home.script')

</body>
</html>

