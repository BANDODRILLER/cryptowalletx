<!DOCTYPE html>
<html lang="en">

@include('home.header')

<body style="background: url('assets/img/back.jpeg') no-repeat center center fixed; background-size: cover;">


@include('home.preloader')
@include('home.nav')
@include('sweetalert::alert')


<!-- ***** Blog Start ***** -->
<section class="section" id="blog">
    <div class="container">
        <div class="earnings_list" style="padding-bottom: 0px">
            <div class="earnings_item">
                <div class="earnings_item_top">
                    <div class="earnings_img">
                        <div class="earnings_vip"></div>
                        <img style="width: 60px;height: 60px" src="assets/img/amount.png" />
                    </div>
                    <div class="earnings_message">
                        <div class="earnings_title">User_ID  : {{$finalunique}}</div>
                        <div class="earnings_bq">
                            <span>ACCOUNT BALANCE</span>
                            <span> <div class="earnings_p_box">
                        <div><span>$ {{$balance}}</span>
                        </div>
                    </div>
                            </span>
                        </div>

                    </div>
                </div>
            </div>

            <div class="earnings_item">
                <div class="earnings_item_top">
                    <div class="earnings_message">
                        <div class="earnings_bq">
                            <span>TOTAL EARNINGS</span>
                            <span> <div class="earnings_p_box">
                        <div><span>KES {{$earnings}}</span>
                        </div>
                    </div>
                            </span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="earnings_item">
                <div class="earnings_item_top">
                    <div class="earnings_message">
                        <div class="earnings_bq">
                            <span>TOTAL ASSETS</span>
                            <span> <div class="earnings_p_box">
                        <div><span>{{$assets}}</span>
                        </div>
                    </div>
                            </span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="earnings_item">
                <div class="earnings_item_top">
                    <div class="earnings_message">
                        <div class="earnings_bq">
                            <span>TOTAL RECHARGE</span>
                            <span> <div class="earnings_p_box">
                        <div><span>{{$deposit}}</span>
                        </div>
                    </div>
                            </span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="earnings_item">
                <div class="earnings_item_top">
                    <div class="earnings_message">
                        <div class="earnings_bq">
                            <span>TOTAL WITHDRAWAL</span>
                            <span> <div class="earnings_p_box">
                        <div><span>$ {{$withdrawn}}</span>
                        </div>
                    </div>
                            </span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="earnings_item">
                <div class="earnings_item_top">
                    <div class="earnings_message">
                        <div class="earnings_bq">
                            <span>POINTS</span>
                            <span> <div class="earnings_p_box">
                        <div><span>0</span>
                        </div>
                    </div>
                            </span>
                        </div>

                    </div>
                </div>
            </div>




            <div class="earnings_item">
                <div class="earnings_item_top">

                    <div class="earnings_message">
                        <div class="earnings_title">My products</div>
                        <div class="earnings_bq">
                            <a href="/myproducts">
                                <span style="font-size: 0.7rem">Tap to view active products</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="earnings_item">
                <div class="earnings_item_top">

                    <div class="earnings_message">
                        <div class="earnings_title">My charity golden ticket</div>
                        <div class="earnings_bq">
                            <a href="#">
                                <span style="font-size: 0.7rem">Tap to view</span>
                            </a>
                        </div>
                    </div>
                </div>


            <div class="earnings_item">
                <div class="earnings_item_top">

                    <div class="earnings_message">
                        <div class="earnings_title">My Team</div>
                        <div class="earnings_bq">
                            <a href="/myteam">
                                <span style="font-size: 0.7rem">Tap to view </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="earnings_item">
                <div class="earnings_item_top">

                    <div class="earnings_message">
                        <div class="earnings_title">My coupons</div>
                        <div class="earnings_bq">
                            <a href="#">
                                <span style="font-size: 0.7rem">Redeem available coupons</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="earnings_item">
                <div class="earnings_item_top">

                    <div class="earnings_message">
                        <div class="earnings_title">My gift </div>
                        <div class="earnings_bq">
                            <a href="#">
                                <span style="font-size: 0.7rem">View gifts</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="earnings_item">
                <div class="earnings_item_top">

                    <div class="earnings_message">
                        <div class="earnings_title">Transactions</div>
                        <div class="earnings_bq">
                            <a href="/transactions">
                                <span style="font-size: 0.7rem">View previous transactions</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="earnings_item">
                <div class="earnings_item_top">

                    <div class="earnings_message">
                        <div class="earnings_title">Redeem rewards</div>
                        <div class="earnings_bq">
                            <a href="congratulations">
                                <span style="font-size: 0.7rem">Check if you are eligible</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="earnings_item">
                <div class="earnings_item_top">

                    <div class="earnings_message">
                        <div class="earnings_title">Sign out</div>
                        <div class="earnings_bq">
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();" >
                                <span style="font-size: 0.7rem">Log out this device</span>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function selectAmount(amount) {
                    // Add your logic here to handle the selected amount
                    console.log("Selected amount: " + amount);
                    // You can perform additional actions like updating a form field, etc.

                    // Update the manual input field with the selected amount
                    document.getElementById('manualInput').value = amount;
                }

                function payWithMpesa() {
                    // Add your logic here for M-Pesa payment
                    console.log("Paying with M-Pesa");
                }

                function payWithPayPal() {
                    // Add your logic here for PayPal payment
                    console.log("Paying with PayPal");
                }
            </script>

        </div>
    </div>
</section>





@include('home.footer')
@include('home.script')

</body>
</html>

