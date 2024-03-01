<!DOCTYPE html>
<html lang="en">

@include('home.header')

<body style="background: url('assets/img/back.jpeg') no-repeat center center fixed; background-size: cover;">


@include('home.preloader')
@include('home.nav')

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
    <style>
        .earnings_p_box {
            padding: 10px;
            display: flex; /* Use flexbox to arrange buttons horizontally */
        }

        .earnings_p_box button {
            margin-right: 10px;
            padding: 8px 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f0f0f0;
            cursor: pointer;
        }

        .earnings_p_box button:hover {
            background-color: #e0e0e0;
        }

        .manual_input {
            margin-top: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .payment_buttons {
            margin-top: 10px;
            display: flex; /* Use flexbox to arrange payment buttons horizontally */
        }

        .payment_buttons button {
            margin-right: 10px;
            padding: 8px 16px;
            border: 1px solid #007bff;
            border-radius: 5px;
            color: #007bff;
            background-color: #fff;
            cursor: pointer;
        }

        .payment_buttons button:hover {
            background-color: #007bff;
            color: #fff;
        }
    </style>


    <div class="earnings_item">
        <div class="earnings_item_top">
            <div class="earnings_message">
                <div class="earnings_title">Deposit</div>
                <div class="earnings_bq">
                    <span style="font-size: 0.7rem">Send money into your Crypto 2 account</span>
                    <div class="earnings_p_box">
                        <div>
                            <div class="payment_buttons">
                                <a href="#"><button style="padding-bottom: 10px" onclick="selectAmount(1000)">1000</button></a>
                                <a href="#"><button onclick="selectAmount(2000)">2000</button></a>
                                <a href="#"><button onclick="selectAmount(3000)">3000</button></a>
                            </div>
                        </div>
                    </div>
                    <div id="dollarAmount"></div>
                    <div id="errorMessage" style="color: red;"></div> <!-- New div for error messages -->

                    <input style="width: 240px" type="number" id="manualInput" class="manual_input" placeholder="Amount in Kenyan Shilling" min="1000" max="300000">

                    <script>
                        function selectAmount(amount) {
                            console.log("Selected amount: " + amount);
                            document.getElementById('manualInput').value = amount;
                            calculateDollarAmount(amount);
                        }

                        function calculateDollarAmount(amount) {
                            var dollarAmount = amount / 169;
                            document.getElementById('dollarAmount').innerText = "Dollar amount: $" + dollarAmount.toFixed(2);
                        }

                        function onInputChange() {
                            var amount = parseFloat(document.getElementById('manualInput').value);
                            var errorMessage = document.getElementById('errorMessage');

                            if (!isNaN(amount)) {
                                if (amount < 1000) {
                                    errorMessage.innerText = "Please increase the amount. Minimum amount allowed is 1000 KES.";
                                } else if (amount > 300000) {
                                    errorMessage.innerText = "Please decrease the amount. Maximum amount allowed is 300000 KES.";
                                } else {
                                    calculateDollarAmount(amount);
                                    errorMessage.innerText = ""; // Clear error message if input is within range
                                    return;
                                }
                            } else {
                                errorMessage.innerText = ""; // Clear error message if input is invalid
                            }
                            // Clear dollar amount if input is invalid or out of range
                            document.getElementById('dollarAmount').innerText = "";
                        }

                        // Add event listener to detect input changes
                        document.getElementById('manualInput').addEventListener('input', onInputChange);

                        function payWithMpesa() {
                            console.log("Paying with M-Pesa");
                        }

                        function payWithPayPal() {
                            console.log("Paying with PayPal");
                        }
                    </script>



                    <div class="payment_buttons">
                        <a href="/mpesa" onclick="setAmount(this)"> <!-- Add onclick event -->
                            <button style="padding-bottom: 10px">Pay with M-Pesa</button>
                        </a>
{{--                        <a href="/paypal" onclick="setAmount(this)"> <!-- Add onclick event -->--}}
{{--                            <button>Pay with PayPal</button>--}}
{{--                        </a>--}}
                    </div>

                    <script>
                        function setAmount(button) {
                            var amount = document.getElementById("manualInput").value;
                            var href = button.getAttribute("href");
                            button.setAttribute("href", href + "?amount=" + amount);
                        }
                    </script>


                </div>
            </div>
        </div>
    </div>

    <div class="earnings_item">
        <div class="earnings_item_top">

            <div class="earnings_message">
                <div class="earnings_title">Withdraw</div>
                <div class="earnings_bq">
                    <span style="font-size: 0.7rem">withdraw money from your Crypto 2 account to MPESA</span>
                    <br>
                    <input type="text" id="manual" class="manual_input" placeholder="Enter amount in dollars ">
                    <div class="payment_buttons">
                        <a onclick="set(this)" href="/mpesawithdraw">
                            <button style="padding-bottom: 10px" >Withdraw to M-Pesa</button>

                        </a>
{{--                        <button onclick="withdrawWithPayPal()">Withdraw to PayPal</button>--}}
                    </div>
                    <script>
                        function set(button) {
                            var amount = document.getElementById("manual").value;
                            var href = button.getAttribute("href");
                            button.setAttribute("href", href + "?amount=" + amount);
                        }
                    </script>
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
                    <a href="/congratulations">
                        <span style="font-size: 0.7rem">Check if you are eligible</span>
                    </a>
                </div>
            </div>
        </div>
    </div>



</div>
    </div>
</section>





@include('home.footer')
@include('home.script')

</body>
</html>

