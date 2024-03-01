<!DOCTYPE html>
<html lang="en">

@include('home.header')

<body style="background: url('assets/img/back.jpeg') no-repeat center center fixed; background-size: cover;">

{{--@include('sweetalert::alert')--}}
@include('sweetalert::alert')

@include('home.preloader')
@include('home.nav')
@include('home.slider')
<script>
    function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');
        console.log(urlToRedirect);
        swal({
            title: "Are you sure to cancel this product",
            text: "You will not be able to revert this!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willCancel) => {
                if (willCancel) {



                    window.location.href = urlToRedirect;

                }


            });


    }
</script>
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            @foreach($purchases as $purchase)
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                    <div class="features-small-item">
                        <div class="">
                            <div class="earnings_img">
                                <div class="earnings_vip"></div>
                                <img src="assets/img/{{ $purchase->img }}" />
                            </div>
                        </div>
                        <h5 class="features-title">{{ $purchase->name }}</b> </h5>
                        <p>RENTAL TIME : <b>{{ \Carbon\Carbon::parse($purchase->begin)->format('D M d Y') }} </b> </p>
                        <p>MACHINE PRICE : KES   <b>{{ $purchase->pur }} </b> </p>
                        <p>REMAINING PERIOD :  <b> {{ \Carbon\Carbon::parse($purchase->end)->diffInDays(now()) }} (DAYS)</b>  </p>
                        <p>AVAILABLE TODAYS EARNINGS :  <b> ${{ $purchase->dyin }}    </p>
                        <p>TOTAL EARNINGS :  <b> KES {{ $purchase->withdrawn }}  </b>   </p>
                        <p style="color: {{ $purchase->withdrawn > 0 ? 'green' : 'red' }}">STATUS :   <b>{{ $purchase->withdrawn > 0 ? 'Income received' : 'No income received' }} </b> </p>
                        <a class="earnings_item_btn" >earnings deposited automatically </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
</div>
</section>


@include('home.footer')
@include('home.script')

</body>
</html>



