<!DOCTYPE html>
<html lang="en">

@include('home.header')

<body style="background:#f8f0f0">


@include('home.preloader')
@include('home.nav')
@include('home.slider')

<section class="section padding-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="center-heading">
                    <h5 class="section-title">Invite Link</h5>
                </div>
            </div>
            <div class="offset-lg-3 col-lg-6">
                <div class="center-text">
                    <p id="invite-link">
                        @if (!empty($link))
                            {{$link}}
                        @else
                            Log in first
                        @endif
                    </p>
                    @if (!empty($link))
                        <button class="main-button" id="copy-button" onclick="copyToClipboard()">Copy Link</button>
                    @endif
                </div>
            </div>
        </div>

        <script>
            function copyToClipboard() {
                var inviteLink = document.getElementById("invite-link");
                var tempInput = document.createElement("input");
                tempInput.value = inviteLink.textContent;
                document.body.appendChild(tempInput);
                tempInput.select();
                document.execCommand("copy");
                document.body.removeChild(tempInput);
                alert("Link copied to clipboard!");
            }
        </script>
    </div>
</section>
{{--@include('home.blog')--}}



@include('home.footer')
@include('home.script')

</body>
</html>

