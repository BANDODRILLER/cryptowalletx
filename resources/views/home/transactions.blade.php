<!DOCTYPE html>
<html lang="en">

@include('home.header')

<body>

@include('sweetalert::alert')

@include('home.preloader')
@include('home.nav')
<section class="section" id="testimonials" style="padding-top: 120px">
    <div class="container">

        <!-- Nav tabs with custom styling -->
        <ul class="nav nav-tabs" role="tablist" style="display: flex; justify-content: space-around; background-color: #f5f5f5; padding: 10px;">
            <li role="presentation" class="active"><a href="#t-series" aria-controls="t-series" role="tab" data-toggle="tab">DEPOSIT</a></li>
            <li role="presentation"><a href="#i-series" aria-controls="i-series" role="tab" data-toggle="tab">WITHDRAWALS</a></li>
            <li role="presentation"><a href="#j-series" aria-controls="j-series" role="tab" data-toggle="tab">PURCHASES</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <!-- I SERIES -->
            <div role="tabpanel" class="tab-pane" id="i-series">
                <div class="earnings_list" style="padding-bottom: 0px">
                        <!-- Updated button text to include the product and price -->
                    @foreach($withdraw as $d)
                        <a class="earnings_item_btn" >
                            You withdrawn  $ {{$d->amount }} on {{$d->created_at}}
                        </a>
                    @endforeach
                </div>

        </div>

        <!-- M SERIES -->
        <div role="tabpanel" class="tab-pane active" id="t-series">
            <div class="earnings_list" style="padding-bottom: 0px">

                @foreach($deposit as $d)
                    <a class="earnings_item_btn" >
                        You deposited KES  {{$d->amount }} on {{$d->created_at}}
                    </a>
                @endforeach

            </div>
        </div>



    <!-- J SERIES -->
    <div role="tabpanel" class="tab-pane" id="j-series">
        <div class="earnings_list" style="padding-bottom: 0px">
            <!-- Updated button text to include the product and price -->
            @foreach($purchase as $d)
                <a class="earnings_item_btn" >
                    Purchased {{$d->name }} at KES {{$d->pur}}
                    <br>
                </a>
            @endforeach
        </div>
    </div>
    </div>

    <script>
        function Invest(name, invite, img, totrevcy, dyin, totin, retrate, totrerate, mspr, pur) {
            // Check if the user is authenticated
            @if(Auth::check())
            // Get the user's available balance from the backend
            var userBalance = {{ Auth::user()->amount }};
            // Check if the user's balance is sufficient for the purchase
            if (userBalance < pur) {
                // If the balance is insufficient, display an error message
                layer.open({
                    content: 'Insufficient balance. Please top up your account.',
                    btn: ['Close']
                });
                return; // Exit the function early
            }
            @endif

            // If the user is authenticated and has sufficient balance, proceed with the purchase confirmation
            var submit = true; // Set submit to true
            layer.open({
                content: 'Confirm purchase of ' + name + '?',
                btn: ['YES', 'NO'],
                yes: function (index) {
                    layer.close(index);
                    if (submit == true) { // Check if submit is true
                        var loading = layer.open({
                            type: 2,
                            content: 'loading'
                        });

                        // Construct post URL with dynamic values
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

                        // Perform POST request with postUrl
                        window.location.href = postUrl;

                    } else {
                        return false;
                    }
                }
            });
        }
        $(document).ready(function(){
            // Hide all tab content except the active one
            $('.tab-content .tab-pane').not('.active').hide();

            // Handle tab click event
            $('ul.nav-tabs a').click(function(){
                var tabId = $(this).attr('href');
                $('.tab-content .tab-pane').hide();
                $(tabId).show();
            });
        });
    </script>
</section>



<!-- Add this in the head section of your HTML -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>






<!-- ***** Footer Start ***** -->
@include('home.footer')
@include('home.script')

</body>
</html>

