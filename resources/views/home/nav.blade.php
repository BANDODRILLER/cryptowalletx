
<!-- ***** Header Area Start ***** -->
<header  class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        <h6 style="color: black;font-size: 1.3rem">Crypto Walletx Mining </h6>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li  style="font-size: 1rem"><a href="/">Home</a></li>
                        <li  style="font-size: 1rem"><a href="/about">About</a></li>
                        <li  style="font-size: 1rem"><a href="/myproducts">My Products</a></li>
                        <li  style="font-size: 1rem"><a href="/myteam">My Team</a></li>

                                                @if (Route::has('login'))
                                                    @auth()
                                                    @endauth
                                                        @endif
                        </a>
                        </li>
                                                            <?php
                                                            $user = Illuminate\Support\Facades\Auth::user();
                                                            ?>
                                                        @if (Route::has('login'))
                                                            @auth
                                <li  style="font-size: 1rem"><a href="/myteam">My Team</a></li>

                                <li  style="font-size: 1rem"><a href="/personal" >{{ $user->name }}
                                                                    </a></li>
                                                                <li style="font-size: 1rem"> <a class="dropdown-item" href="{{ route('logout') }}"
                                                                                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                                        {{ __('Logout') }}
                                                                    </a>
                                                                </li>
                                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                    @csrf
                                                                </form>
                                                            @else
                        <li style="font-size: 1rem">
                                        <span class="nav-item">
            <a class="btn-outline-sm" href="/login">LOG IN</a>
        </span>
                        </li>
                                                                @if (Route::has('register'))
                        <li style="font-size: 1rem"><span class="nav-item">
                <a class="btn-outline-sm" href="/register">SIGN UP</a>
            </span>
                        </li>
                                                                @endif
                                                            @endauth
                                                        @endif

                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
