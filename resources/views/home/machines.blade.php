
<h4 style="text-align: center;padding: 20px;background-color:#777070 ">
    I SERIES
</h4>
<div class="earnings_list" style="padding-bottom: 0px">
    <div class="earnings_item">
        <a href="{{route('productdetail', ['name'=> 'I-11 MACHINE', 'invite' => '1', 'img' =>'mac1.jpeg','totrevcy'=>'20' , 'dyin'=>'0.65', 'totin'=>'13', 'retrate'=>'7', 'totretrate'=>'110', 'mspr'=>'0.5','pur'=>7])}}">
            <div class="mycount">Invite prize $3</div>
            <div class="earnings_item_top">
                <div class="earnings_img">
                    <div class="earnings_vip"></div>
                    <img src="assets/img/mac1.jpeg" />
                </div>
                <div class="earnings_message">
                    <div class="earnings_title">I -11 MACHINE</div>
                    <div class="earnings_bq">
                        <span>Total revenue cycle</span>
                        <span>20 Days AT   <div class="earnings_p_box">
                        <span>$ 0.65</span>
                        <div>Day Income</div>
                    </div></span>
                    </div>
                    <div class="earnings_p">

                        <div class="earnings_p_box">
                            <span>$ 13</span>
                            <div>Total income</div>
                        </div>
{{--                        <div class="earnings_p_box">--}}
{{--                            <span>7%</span>--}}
{{--                            <div>return rate</div>--}}
{{--                        </div>--}}
                        <div class="earnings_p_box">
                            <span>225%</span>
                            <div>Total return rate</div>
                        </div>

                        <div class="earnings_p_box">
                            <span>1</span>
                            <div>Mysterious prize</div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <!-- Updated button text to include the product and price -->
        <a class="earnings_item_btn" href="{{ Auth::check() ? 'javascript:void(0);' : route('login') }}" onclick="{{ Auth::check() ? "Invest( 'I-11 MACHINE', '1', 'mac1.jpeg', '20', '0.65', '13', '7', '110', '0.5', '7');" : '' }}">
            {{ Auth::check() ? 'Purchase $ 7' : 'Login to Purchase' }}
        </a>
    </div>
</div>
<div class="earnings_list" style="padding-bottom: 0px">
    <div class="earnings_item">
        <a href="{{route('productdetail', ['name'=> 'I-22 MACHINE', 'invite' => '2', 'img' =>'mac2.jpeg','totrevcy'=>'20' , 'dyin'=>'1.375', 'totin'=>'27', 'retrate'=>'15', 'totretrate'=>'220', 'mspr'=>'1','pur'=>13.75])}}">
            <div class="mycount">Invite prize $6</div>
            <div class="earnings_item_top">
                <div class="earnings_img">
                    <div class="earnings_vip"></div>
                    <img src="assets/img/mac2.jpeg" />
                </div>
                <div class="earnings_message">
                    <div class="earnings_title">I-22 MACHINE</div>
                    <div class="earnings_bq">
                        <span>Total revenue cycle</span>
                        <span>20 Days AT   <div class="earnings_p_box">
                        <span>$ 1.375</span>
                        <div>Day Income</div>
                    </div></span>
                    </div>
                    <div class="earnings_p">

                        <div class="earnings_p_box">
                            <span>$ 27</span>
                            <div>Total income</div>
                        </div>
{{--                        <div class="earnings_p_box">--}}
{{--                            <span>15%</span>--}}
{{--                            <div>return rate</div>--}}
{{--                        </div>--}}

                        <div class="earnings_p_box">
                            <span>220%</span>
                            <div>Total return rate</div>
                        </div>

                        <div class="earnings_p_box">
                            <span>1</span>
                            <div>Mysterious prize</div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <!-- Updated button text to include the product and price -->
        <a class="earnings_item_btn" href="{{ Auth::check() ? 'javascript:void(0);' : route('login') }}" onclick="{{ Auth::check() ? "Invest( 'I-22 MACHINE', '2', 'mac2.jpeg', '20', '1.375', '27', '15', '220', '1', '13.75');" : '' }}">
            {{ Auth::check() ? 'Purchase $ 13.75' : 'Login to Purchase' }}
        </a>
    </div>
</div>

<div class="earnings_list" style="padding-bottom: 0px">
    <a href="{{route('productdetail', ['name'=> 'I-70 MACHINE', 'invite' => '1', 'img' =>'mac3.jpeg','totrevcy'=>'60' , 'dyin'=>'1.75', 'totin'=>'105', 'retrate'=>'19', 'totretrate'=>'280', 'mspr'=>'1','pur'=>'43.5'])}}">
        <div class="earnings_item">
            <div class="mycount">Invite prize $1</div>
            <div class="earnings_item_top">
                <div class="earnings_img">
                    <div class="earnings_vip"></div>
                    <img src="assets/img/mac3.jpeg" />
                </div>
                <div class="earnings_message">
                    <div class="earnings_title">I-70 MACHINE</div>
                    <div class="earnings_bq">
                        <span>Total revenue cycle</span>
                        <span>60 Days AT   <div class="earnings_p_box">
                        <span>$ 1.75</span>
                        <div>Day Income</div>
                    </div></span>
                    </div>
                    <div class="earnings_p">

                        <div class="earnings_p_box">
                            <span>$ 105</span>
                            <div>Total income</div>
                        </div>
{{--                        <div class="earnings_p_box">--}}
{{--                            <span>19%</span>--}}
{{--                            <div>return rate</div>--}}
{{--                        </div>--}}

                        <div class="earnings_p_box">
                            <span>280%</span>
                            <div>Total return rate</div>
                        </div>

                        <div class="earnings_p_box">
                            <span>1</span>
                            <div>Mysterious prize</div>
                        </div>
                    </div>
                </div>
            </div>
    </a>



    <a class="earnings_item_btn" href="{{ Auth::check() ? 'javascript:void(0);' : route('login') }}" onclick="{{ Auth::check() ? "Invest( 'I-70 MACHINE', '1', 'mac3.jpeg', '60', '1.75', '105', '19', '280', '1', '43.5');" : '' }}">
        {{ Auth::check() ? 'Purchase $ 43.5' : 'Login to Purchase' }}
    </a>
</div>
</div>
<div class="earnings_list" style="padding-bottom: 0px">
    <div class="earnings_item">
        <a href="{{route('productdetail', ['name'=> 'I-200 MACHINE', 'invite' => '1', 'img' =>'mac4.jpeg','totrevcy'=>'60' , 'dyin'=>'3.7', 'totin'=>'226', 'retrate'=>'20', 'totretrate'=>'200', 'mspr'=>'1','pur'=>125])}}">
            <div class="mycount">Invite prize $1</div>
            <div class="earnings_item_top">
                <div class="earnings_img">
                    <div class="earnings_vip"></div>
                    <img src="assets/img/mac4.jpeg" />
                </div>
                <div class="earnings_message">
                    <div class="earnings_title">I-200 MACHINE</div>
                    <div class="earnings_bq">
                        <span>Total revenue cycle</span>
                        <span>60 Days AT   <div class="earnings_p_box">
                        <span>$ 3.7</span>
                        <div>Day Income</div>
                    </div></span>
                    </div>
                    <div class="earnings_p">
                        <div class="earnings_p_box">
                            <span>$ 226</span>
                            <div>Total income</div>
                        </div>
{{--                        <div class="earnings_p_box">--}}
{{--                            <span>19%</span>--}}
{{--                            <div>Return rate</div>--}}
{{--                        </div>--}}
                        <div class="earnings_p_box">
                            <span>200%</span>
                            <div>Total return rate</div>
                        </div>
                        <div class="earnings_p_box">
                            <span>1</span>
                            <div>Mysterious prize</div>
                        </div>
                    </div>
                </div>
            </div>
        </a>

        <a class="earnings_item_btn" href="{{ Auth::check() ? 'javascript:void(0);' : route('login') }}" onclick="{{ Auth::check() ? "Invest(  'I-200 MACHINE', '1', 'mac4.jpeg', '60', '3.7', '226', '20', '200', '1', '125');" : '' }}">
            {{ Auth::check() ? 'Purchase $ 125' : 'Login to Purchase' }}
        </a>

    </div>
</div>

<div class="earnings_list" style="padding-bottom: 0px">
    <div class="earnings_item">
        <a href="{{route('productdetail', ['name'=> 'I-420 MACHINE', 'invite' => '2', 'img' =>'mac5.jpeg','totrevcy'=>'60' , 'dyin'=>'5.6', 'totin'=>'339', 'retrate'=>'30', 'totretrate'=>'420', 'mspr'=>'2','pur'=>'262.5'])}}">
            <div class="mycount">Invite prize $2</div>
            <div class="earnings_item_top">
                <div class="earnings_img">
                    <div class="earnings_vip"></div>
                    <img src="assets/img/mac5.jpeg" />
                </div>
                <div class="earnings_message">
                    <div class="earnings_title">I-420 MACHINE</div>
                    <div class="earnings_bq">
                        <span>Total revenue cycle</span>
                        <span>60 Days AT</span>
                        <div class="earnings_p_box">
                            <span>$5.6</span>
                            <div>Day Income</div>
                        </div>
                    </div>
                    <div class="earnings_p">
                        <div class="earnings_p_box">
                            <span>$339</span>
                            <div>Total income</div>
                        </div>
{{--                        <div class="earnings_p_box">--}}
{{--                            <span>30%</span>--}}
{{--                            <div>Return rate</div>--}}
{{--                        </div>--}}
                        <div class="earnings_p_box">
                            <span>420%</span>
                            <div>Total return rate</div>
                        </div>

                        <div class="earnings_p_box">
                            <span>2</span>
                            <div>Mysterious prize</div>
                        </div>
                    </div>
                </div>
            </div>

            <a class="earnings_item_btn" href="{{ Auth::check() ? 'javascript:void(0);' : route('login') }}" onclick="{{ Auth::check() ? "Invest('I-420 MACHINE', '2', 'mac5.jpeg', '60', '5.6', '339', '30', '420', '2', '262.5');" : '' }}">
                {{ Auth::check() ? 'Purchase $ 262.5' : 'Login to Purchase' }}
            </a>
    </div>
</div>

{{--<h4 style="text-align: center;padding: 20px;background-color:#777070 ">--}}
{{--    M SERIES--}}
{{--</h4>--}}
{{--<div class="earnings_list" style="padding-bottom: 0px">--}}
{{--    <div class="earnings_item">--}}
{{--        <a href="{{route('productdetail', ['name'=> 'M-42 MACHINE', 'invite' => '3', 'img' =>'machine1.jpeg','totrevcy'=>'15' , 'dyin'=>'3.9375', 'totin'=>'59.0625', 'retrate'=>'15', 'totretrate'=>'225', 'mspr'=>'1','pur'=>26.25])}}">--}}
{{--        <div class="mycount">Invite prize $3</div>--}}
{{--        <div class="earnings_item_top">--}}
{{--            <div class="earnings_img">--}}
{{--                <div class="earnings_vip"></div>--}}
{{--                <img src="assets/img/machine1.jpeg" />--}}
{{--            </div>--}}
{{--            <div class="earnings_message">--}}
{{--                <div class="earnings_title">M -42 MACHINE</div>--}}
{{--                <div class="earnings_bq">--}}
{{--                    <span>Total revenue cycle</span>--}}
{{--                    <span>15 Days AT   <div class="earnings_p_box">--}}
{{--                        <span>$ 3.933</span>--}}
{{--                        <div>Day Income</div>--}}
{{--                    </div></span>--}}
{{--                </div>--}}
{{--                <div class="earnings_p">--}}

{{--                    <div class="earnings_p_box">--}}
{{--                        <span>$ 59</span>--}}
{{--                        <div>Total income</div>--}}
{{--                    </div>--}}
{{--                    <div class="earnings_p_box">--}}
{{--                        <span>15%</span>--}}
{{--                        <div>return rate</div>--}}
{{--                    </div>--}}
{{--                    <div class="earnings_p_box">--}}
{{--                        <span>225%</span>--}}
{{--                        <div>Total return rate</div>--}}
{{--                    </div>--}}

{{--                    <div class="earnings_p_box">--}}
{{--                        <span>1</span>--}}
{{--                        <div>Mysterious prize</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        </a>--}}
{{--        <!-- Updated button text to include the product and price -->--}}
{{--        <a class="earnings_item_btn" href="{{ Auth::check() ? 'javascript:void(0);' : route('login') }}" onclick="{{ Auth::check() ? "Invest('M-42 MACHINE', '3', 'machine1.jpeg', '15', '3.9335', '59.0625', '15', '225', '1', 26.25);" : '' }}">--}}
{{--            {{ Auth::check() ? 'Purchase $26.25' : 'Login to Purchase' }}--}}
{{--        </a>--}}

{{--    </div>--}}
{{--</div>--}}






{{--<div class="earnings_list" style="padding-bottom: 0px">--}}
{{--    <div class="earnings_item">--}}
{{--        <a href="{{route('productdetail', ['name'=> 'M-200 MACHINE', 'invite' => '6', 'img' =>'machine2.jpeg','totrevcy'=>'15' , 'dyin'=>'22.5', 'totin'=>'337.5', 'retrate'=>'18', 'totretrate'=>'225', 'mspr'=>'2','pur'=>125])}}">--}}
{{--        <div class="mycount">Invite prize $6</div>--}}
{{--        <div class="earnings_item_top">--}}
{{--            <div class="earnings_img">--}}
{{--                <div class="earnings_vip"></div>--}}
{{--                <img src="assets/img/machine2.jpeg" />--}}
{{--            </div>--}}
{{--            <div class="earnings_message">--}}
{{--                <div class="earnings_title">M -200 MACHINE</div>--}}
{{--                <div class="earnings_bq">--}}
{{--                    <span>Total revenue cycle</span>--}}
{{--                    <span>15 Days AT   <div class="earnings_p_box">--}}
{{--                        <span>$ 22.5</span>--}}
{{--                        <div>Day Income</div>--}}
{{--                    </div></span>--}}
{{--                </div>--}}
{{--                <div class="earnings_p">--}}

{{--                    <div class="earnings_p_box">--}}
{{--                        <span>$ 337.5</span>--}}
{{--                        <div>Total income</div>--}}
{{--                    </div>--}}
{{--                    <div class="earnings_p_box">--}}
{{--                        <span>18%</span>--}}
{{--                        <div>return rate</div>--}}
{{--                    </div>--}}

{{--                    <div class="earnings_p_box">--}}
{{--                        <span>270%</span>--}}
{{--                        <div>Total return rate</div>--}}
{{--                    </div>--}}

{{--                    <div class="earnings_p_box">--}}
{{--                        <span>2</span>--}}
{{--                        <div>Mysterious prize</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        </a>--}}
{{--        <!-- Updated button text to include the product and price -->--}}
{{--        <a class="earnings_item_btn" href="{{ Auth::check() ? 'javascript:void(0);' : route('login') }}" onclick="{{ Auth::check() ? "Invest('M-200 MACHINE', '6', 'machine2.jpeg', '15', '22.5', '337.5', '18', '225', '2', 125);" : '' }}">--}}
{{--            {{ Auth::check() ? 'Purchase $ 125' : 'Login to Purchase' }}--}}
{{--        </a>--}}

{{--    </div>--}}
{{--</div>--}}




{{--<div class="earnings_list" style="padding-bottom: 0px">--}}
{{--    <a href="{{route('productdetail', ['name'=> 'M-730 MACHINE', 'invite' => '8', 'img' =>'machine3.jpeg','totrevcy'=>'15' , 'dyin'=>'95.81', 'totin'=>'1437.18', 'retrate'=>'21', 'totretrate'=>'315', 'mspr'=>'3','pur'=>456.5])}}">--}}
{{--    <div class="earnings_item">--}}
{{--        <div class="mycount">Invite prize $18</div>--}}
{{--        <div class="earnings_item_top">--}}
{{--            <div class="earnings_img">--}}
{{--                <div class="earnings_vip"></div>--}}
{{--                <img src="assets/img/machine3.jpeg" />--}}
{{--            </div>--}}
{{--            <div class="earnings_message">--}}
{{--                <div class="earnings_title">M -730 MACHINE</div>--}}
{{--                <div class="earnings_bq">--}}
{{--                    <span>Total revenue cycle</span>--}}
{{--                    <span>15 Days AT   <div class="earnings_p_box">--}}
{{--                        <span>$ 95</span>--}}
{{--                        <div>Day Income</div>--}}
{{--                    </div></span>--}}
{{--                </div>--}}
{{--                <div class="earnings_p">--}}

{{--                    <div class="earnings_p_box">--}}
{{--                        <span>$ 1437</span>--}}
{{--                        <div>Total income</div>--}}
{{--                    </div>--}}
{{--                    <div class="earnings_p_box">--}}
{{--                        <span>21%</span>--}}
{{--                        <div>return rate</div>--}}
{{--                    </div>--}}

{{--                    <div class="earnings_p_box">--}}
{{--                        <span>315%</span>--}}
{{--                        <div>Total return rate</div>--}}
{{--                    </div>--}}

{{--                    <div class="earnings_p_box">--}}
{{--                        <span>3</span>--}}
{{--                        <div>Mysterious prize</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </a>--}}

{{--    <a class="earnings_item_btn" href="{{ Auth::check() ? 'javascript:void(0);' : route('login') }}" onclick="{{ Auth::check() ? "Invest('M-730 MACHINE', '18', 'machine3.jpeg', '15', '95.81', '1437.18', '21', '315','4', 456.5);" : '' }}">--}}
{{--        {{ Auth::check() ? 'Purchase $ 465' : 'Login to Purchase' }}--}}
{{--    </a>--}}
{{--    <!-- Updated button text to include the product and price -->--}}
{{--    <a class="earnings_item_btn" href="javascript:void(0);" onclick="Invest( 'M-730 MACHINE', '18', 'machine3.jpeg', '15', '95', '1347', '21', '315', 465);">Purchase $ 465</a>--}}


{{--</div>--}}
{{--</div>--}}
{{--<div class="earnings_list" style="padding-bottom: 0px">--}}
{{--    <div class="earnings_item">--}}
{{--        <a href="{{route('productdetail', ['name'=> 'M-1400 MACHINE', 'invite' => '31', 'img' =>'machine4.jpeg','totrevcy'=>'15' , 'dyin'=>'218', 'totin'=>'1437.18', 'retrate'=>'25', 'totretrate'=>'375', 'mspr'=>'4','pur'=>875])}}">--}}
{{--        <div class="mycount">Invite prize $31</div>--}}
{{--        <div class="earnings_item_top">--}}
{{--            <div class="earnings_img">--}}
{{--                <div class="earnings_vip"></div>--}}
{{--                <img src="assets/img/machine4.jpeg" />--}}
{{--            </div>--}}
{{--            <div class="earnings_message">--}}
{{--                <div class="earnings_title">M -1400 MACHINE</div>--}}
{{--                <div class="earnings_bq">--}}
{{--                    <span>Total revenue cycle</span>--}}
{{--                    <span>15 Days AT   <div class="earnings_p_box">--}}
{{--                        <span>$ 218</span>--}}
{{--                        <div>Day Income</div>--}}
{{--                    </div></span>--}}
{{--                </div>--}}
{{--                <div class="earnings_p">--}}
{{--                    <div class="earnings_p_box">--}}
{{--                        <span>$ 3281</span>--}}
{{--                        <div>Total income</div>--}}
{{--                    </div>--}}
{{--                    <div class="earnings_p_box">--}}
{{--                        <span>25%</span>--}}
{{--                        <div>Return rate</div>--}}
{{--                    </div>--}}
{{--                    <div class="earnings_p_box">--}}
{{--                        <span>375%</span>--}}
{{--                        <div>Total return rate</div>--}}
{{--                    </div>--}}
{{--                    <div class="earnings_p_box">--}}
{{--                        <span>4</span>--}}
{{--                        <div>Mysterious prize</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        </a>--}}
{{--        <a class="earnings_item_btn" href="javascript:void(0);" onclick="Invest( );"> Purchase $ 875</a>--}}
{{--        <a class="earnings_item_btn" href="{{ Auth::check() ? 'javascript:void(0);' : route('login') }}" onclick="{{ Auth::check() ? "Invest('M-1400 MACHINE', '31', 'machine4.jpeg', '15', '218.75', '3281.25', '25', '375', '4', 875);" : '' }}">--}}
{{--            {{ Auth::check() ? 'Purchase $ 875' : 'Login to Purchase' }}--}}
{{--        </a>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<div class="earnings_list" style="padding-bottom: 0px">--}}
{{--    <div class="earnings_item">--}}
{{--        <a href="{{route('productdetail', ['name'=> 'M-2500 MACHINE', 'invite' => '5', 'img' =>'machine5.jpeg','totrevcy'=>'15' , 'dyin'=>'468.75', 'totin'=>'7031.25', 'retrate'=>'30', 'totretrate'=>'450', 'mspr'=>'5','pur'=>'1562.5'])}}">--}}
{{--        <div class="mycount">Invite prize $52</div>--}}
{{--        <div class="earnings_item_top">--}}
{{--            <div class="earnings_img">--}}
{{--                <div class="earnings_vip"></div>--}}
{{--                <img src="assets/img/machine5.jpeg" />--}}
{{--            </div>--}}
{{--            <div class="earnings_message">--}}
{{--                <div class="earnings_title">M -2500 MACHINE</div>--}}
{{--                <div class="earnings_bq">--}}
{{--                    <span>Total revenue cycle</span>--}}
{{--                    <span>15 Days AT</span>--}}
{{--                    <div class="earnings_p_box">--}}
{{--                        <span>$468</span>--}}
{{--                        <div>Day Income</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="earnings_p">--}}
{{--                    <div class="earnings_p_box">--}}
{{--                        <span>$7031</span>--}}
{{--                        <div>Total income</div>--}}
{{--                    </div>--}}
{{--                    <div class="earnings_p_box">--}}
{{--                        <span>30%</span>--}}
{{--                        <div>Return rate</div>--}}
{{--                    </div>--}}
{{--                    <div class="earnings_p_box">--}}
{{--                        <span>450%</span>--}}
{{--                        <div>Total return rate</div>--}}
{{--                    </div>--}}

{{--                    <div class="earnings_p_box">--}}
{{--                        <span>5</span>--}}
{{--                        <div>Mysterious prize</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--            <a class="earnings_item_btn" href="javascript:void(0);" onclick="Invest( 'M-2500 MACHINE', '52', 'machine5.jpeg', '15', '468', '7031', '30', '450','5', '1562');">Purchase $ 1562 </a>--}}
{{--            <a class="earnings_item_btn" href="{{ Auth::check() ? 'javascript:void(0);' : route('login') }}" onclick="{{ Auth::check() ? "Invest('M-2500 MACHINE', '52', 'machine5.jpeg', '15', '468.75', '7031.25', '30', '450','5', 1562.5);" : '' }}">--}}
{{--                {{ Auth::check() ? 'Purchase $ 1562.5' : 'Login to Purchase' }}--}}
{{--            </a>--}}

{{--    </div>--}}
{{--</div>--}}

{{--<h4 style="text-align: center;padding-top: 20px">--}}
{{--    J SERIES--}}
{{--</h4>--}}
{{--<div class="earnings_list" style="padding-bottom: 0px">--}}
{{--    <div class="earnings_item">--}}
{{--        <a href="{{route('productdetail', ['name'=> 'J-8 MACHINE', 'invite' => '1', 'img' =>'mach1.jpeg','totrevcy'=>'15' , 'dyin'=>'0.5', 'totin'=>'7.5', 'retrate'=>'15', 'totretrate'=>'180', 'mspr'=>'1','pur'=>5])}}">--}}
{{--            <div class="mycount">Invite prize $1</div>--}}
{{--            <div class="earnings_item_top">--}}
{{--                <div class="earnings_img">--}}
{{--                    <div class="earnings_vip"></div>--}}
{{--                    <img src="assets/img/mach1.jpeg" />--}}
{{--                </div>--}}
{{--                <div class="earnings_message">--}}
{{--                    <div class="earnings_title">J -8 MACHINE</div>--}}
{{--                    <div class="earnings_bq">--}}
{{--                        <span>Total revenue cycle</span>--}}
{{--                        <span>60 Days AT   <div class="earnings_p_box">--}}
{{--                        <span>$ 0.5</span>--}}
{{--                        <div>Day Income</div>--}}
{{--                    </div></span>--}}
{{--                    </div>--}}
{{--                    <div class="earnings_p">--}}

{{--                        <div class="earnings_p_box">--}}
{{--                            <span>$ 7.5</span>--}}
{{--                            <div>Total income</div>--}}
{{--                        </div>--}}
{{--                        <div class="earnings_p_box">--}}
{{--                            <span>15%</span>--}}
{{--                            <div>return rate</div>--}}
{{--                        </div>--}}
{{--                                            <div class="earnings_p_box">--}}
{{--                                                <span>180%</span>--}}
{{--                                                <div>Total return rate</div>--}}
{{--                                            </div>--}}

{{--                        <div class="earnings_p_box">--}}
{{--                            <span>1</span>--}}
{{--                            <div>Mysterious prize</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </a>--}}
{{--        <!-- Updated button text to include the product and price -->--}}
{{--        <a class="earnings_item_btn" href="javascript:void(0);" onclick="Invest();">Purchase $ 5</a>--}}
{{--        <a class="earnings_item_btn" href="{{ Auth::check() ? 'javascript:void(0);' : route('login') }}" onclick="{{ Auth::check() ? "Invest('J-8 MACHINE', '1', 'mach1.jpeg', '15', '0.5', '7.5', '15', '180', '1', '5');" : '' }}">--}}
{{--            {{ Auth::check() ? 'Purchase $ 5' : 'Login to Purchase' }}--}}
{{--        </a>--}}

{{--    </div>--}}
{{--</div>--}}
{{--<div class="earnings_list" style="padding-bottom: 0px">--}}
{{--    <div class="earnings_item">--}}
{{--        <a href="{{route('productdetail', ['name'=> 'J- 100 MACHINE', 'invite' => '1', 'img' =>'mach2.jpeg','totrevcy'=>'15' , 'dyin'=>'1.8', 'totin'=>'112.5', 'retrate'=>'18', 'totretrate'=>'300', 'mspr'=>'1','pur'=>65.5])}}">--}}
{{--            <div class="mycount">Invite prize $1</div>--}}
{{--            <div class="earnings_item_top">--}}
{{--                <div class="earnings_img">--}}
{{--                    <div class="earnings_vip"></div>--}}
{{--                    <img src="assets/img/mach2.jpeg" />--}}
{{--                </div>--}}
{{--                <div class="earnings_message">--}}
{{--                    <div class="earnings_title">J -100 MACHINE</div>--}}
{{--                    <div class="earnings_bq">--}}
{{--                        <span>Total revenue cycle</span>--}}
{{--                        <span>60 Days AT   <div class="earnings_p_box">--}}
{{--                        <span>$ 1.8</span>--}}
{{--                        <div>Day Income</div>--}}
{{--                    </div></span>--}}
{{--                    </div>--}}
{{--                    <div class="earnings_p">--}}

{{--                        <div class="earnings_p_box">--}}
{{--                            <span>$ 112.5</span>--}}
{{--                            <div>Total income</div>--}}
{{--                        </div>--}}
{{--                        <div class="earnings_p_box">--}}
{{--                            <span>20%</span>--}}
{{--                            <div>return rate</div>--}}
{{--                        </div>--}}

{{--                                            <div class="earnings_p_box">--}}
{{--                                                <span>300%</span>--}}
{{--                                                <div>Total return rate</div>--}}
{{--                                            </div>--}}

{{--                        <div class="earnings_p_box">--}}
{{--                            <span>2</span>--}}
{{--                            <div>Mysterious prize</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </a>--}}
{{--        <!-- Updated button text to include the product and price -->--}}
{{--        <a class="earnings_item_btn" href="javascript:void(0);" onclick="Invest();">Purchase $ 62.5 </a>--}}
{{--        <a class="earnings_item_btn" href="{{ Auth::check() ? 'javascript:void(0);' : route('login') }}" onclick="{{ Auth::check() ? "Invest( 'J-100 MACHINE', '1', 'mach2.jpeg', '15', '1.8', '112.5', '18', '300', '1', '65.5');" : '' }}">--}}
{{--            {{ Auth::check() ? 'Purchase $ 65.5' : 'Login to Purchase' }}--}}
{{--        </a>--}}

{{--    </div>--}}
{{--</div>--}}

{{--<div class="earnings_list" style="padding-bottom: 0px">--}}
{{--    <a href="{{route('productdetail', ['name'=> 'J -200 MACHINE', 'invite' => '1', 'img' =>'mach3.jpeg','totrevcy'=>'60' , 'dyin'=>'12.8', 'totin'=>'768.7', 'retrate'=>'21', 'totretrate'=>'230', 'mspr'=>'2','pur'=>'450'])}}">--}}
{{--        <div class="earnings_item">--}}
{{--            <div class="mycount">Invite prize $1</div>--}}
{{--            <div class="earnings_item_top">--}}
{{--                <div class="earnings_img">--}}
{{--                    <div class="earnings_vip"></div>--}}
{{--                    <img src="assets/img/mach3.jpeg" />--}}
{{--                </div>--}}
{{--                <div class="earnings_message">--}}
{{--                    <div class="earnings_title">J -200 MACHINE</div>--}}
{{--                    <div class="earnings_bq">--}}
{{--                        <span>Total revenue cycle</span>--}}
{{--                        <span>60 Days AT   <div class="earnings_p_box">--}}
{{--                        <span>$ 12.8</span>--}}
{{--                        <div>Day Income</div>--}}
{{--                    </div></span>--}}
{{--                    </div>--}}
{{--                    <div class="earnings_p">--}}

{{--                        <div class="earnings_p_box">--}}
{{--                            <span>$ 768.7</span>--}}
{{--                            <div>Total income</div>--}}
{{--                        </div>--}}
{{--                        <div class="earnings_p_box">--}}
{{--                            <span>21%</span>--}}
{{--                            <div>return rate</div>--}}
{{--                        </div>--}}

{{--                                            <div class="earnings_p_box">--}}
{{--                                                <span>230%</span>--}}
{{--                                                <div>Total return rate</div>--}}
{{--                                            </div>--}}

{{--                        <div class="earnings_p_box">--}}
{{--                            <span>1</span>--}}
{{--                            <div>Mysterious prize</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--    </a>--}}
{{--    <!-- Updated button text to include the product and price -->--}}
{{--    <a class="earnings_item_btn" href="javascript:void(0);" onclick="Invest();">Purchase $ 450</a>--}}
{{--    <a class="earnings_item_btn" href="{{ Auth::check() ? 'javascript:void(0);' : route('login') }}" onclick="{{ Auth::check() ? "Invest( 'J-200 MACHINE', '1', 'mach3.jpeg', '60', '12.8', '768.7', '21', '230', '2', '450');" : '' }}">--}}
{{--        {{ Auth::check() ? 'Purchase $ 450' : 'Login to Purchase' }}--}}
{{--    </a>--}}

{{--</div>--}}
{{--</div>--}}
{{--<div class="earnings_list" style="padding-bottom: 0px">--}}
{{--    <div class="earnings_item">--}}
{{--        <a href="{{route('productdetail', ['name'=> 'J-260 MACHINE', 'invite' => '1', 'img' =>'mach4.jpeg','totrevcy'=>'50' , 'dyin'=>'8.1', 'totin'=>'406.2', 'retrate'=>'25', 'totretrate'=>'200', 'mspr'=>'1','pur'=>162.5])}}">--}}
{{--            <div class="mycount">Invite prize $1</div>--}}
{{--            <div class="earnings_item_top">--}}
{{--                <div class="earnings_img">--}}
{{--                    <div class="earnings_vip"></div>--}}
{{--                    <img src="assets/img/mach4.jpeg" />--}}
{{--                </div>--}}
{{--                <div class="earnings_message">--}}
{{--                    <div class="earnings_title">J-260 MACHINE</div>--}}
{{--                    <div class="earnings_bq">--}}
{{--                        <span>Total revenue cycle</span>--}}
{{--                        <span>50 Days AT   <div class="earnings_p_box">--}}
{{--                        <span>$ 8.1</span>--}}
{{--                        <div>Day Income</div>--}}
{{--                    </div></span>--}}
{{--                    </div>--}}
{{--                    <div class="earnings_p">--}}
{{--                        <div class="earnings_p_box">--}}
{{--                            <span>$ 406.2</span>--}}
{{--                            <div>Total income</div>--}}
{{--                        </div>--}}
{{--                        <div class="earnings_p_box">--}}
{{--                            <span>25%</span>--}}
{{--                            <div>Return rate</div>--}}
{{--                        </div>--}}
{{--                                            <div class="earnings_p_box">--}}
{{--                                                <span>200%</span>--}}
{{--                                                <div>Total return rate</div>--}}
{{--                                            </div>--}}
{{--                        <div class="earnings_p_box">--}}
{{--                            <span>2</span>--}}
{{--                            <div>Mysterious prize</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </a>--}}
{{--        <a class="earnings_item_btn" href="javascript:void(0);" onclick="Invest();">Purchase $ 162.5 VIA MPESA</a>--}}

{{--        <a class="earnings_item_btn" href="{{ Auth::check() ? 'javascript:void(0);' : route('login') }}" onclick="{{ Auth::check() ? "Invest( 'J-260 MACHINE', '1', 'mach4.jpeg', '50', '8.1', '406.2', '25', '200', '1', '162.5');" : '' }}">--}}
{{--            {{ Auth::check() ? 'Purchase $ 162.5' : 'Login to Purchase' }}--}}
{{--        </a>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<div class="earnings_list" style="padding-bottom: 0px">--}}
{{--    <div class="earnings_item">--}}
{{--        <a href="{{route('productdetail', ['name'=> 'J-53MACHINE', 'invite' => '2', 'img' =>'mach5.jpeg','totrevcy'=>'40' , 'dyin'=>'1.3', 'totin'=>'33', 'retrate'=>'30', 'totretrate'=>'210', 'mspr'=>'1','pur'=>'3.2'])}}">--}}
{{--            <div class="mycount">Invite prize $2</div>--}}
{{--            <div class="earnings_item_top">--}}
{{--                <div class="earnings_img">--}}
{{--                    <div class="earnings_vip"></div>--}}
{{--                    <img src="assets/img/mach5.jpeg" />--}}
{{--                </div>--}}
{{--                <div class="earnings_message">--}}
{{--                    <div class="earnings_title">J- 53 MACHINE</div>--}}
{{--                    <div class="earnings_bq">--}}
{{--                        <span>Total revenue cycle</span>--}}
{{--                        <span>40 Days AT</span>--}}
{{--                        <div class="earnings_p_box">--}}
{{--                            <span>$1.3</span>--}}
{{--                            <div>Day Income</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="earnings_p">--}}
{{--                        <div class="earnings_p_box">--}}
{{--                            <span>$33</span>--}}
{{--                            <div>Total income</div>--}}
{{--                        </div>--}}
{{--                        <div class="earnings_p_box">--}}
{{--                            <span>30%</span>--}}
{{--                            <div>Return rate</div>--}}
{{--                        </div>--}}
{{--                        <div class="earnings_p_box">--}}
{{--                            <span>210%</span>--}}
{{--                            <div>Total return rate</div>--}}
{{--                        </div>--}}
{{--                        <div class="earnings_p_box">--}}
{{--                            <span>1</span>--}}
{{--                            <div>Mysterious prize</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </a>--}}
{{--        <a class="earnings_item_btn" href="javascript:void(0);" onclick="Invest('J-53 MACHINE', '2', 'mach5.jpeg', '40', '1.3', '33', '30', '210', '1', '3.2');">Purchase $ 3.2 VIA MPESA</a>--}}
{{--    </div>--}}
{{--</div>--}}
<h2 style="text-align: center">
    <a href="/products" class="main-button">View More Products</a>
</h2>

<script>
    function Invest(name, invite, img, totrevcy, dyin, totin, retrate, totrerate, mspr, pur) {
        // Check if the user is authenticated
        @if(Auth::check())
        // Get the user's available balance from the backend
        var userBalance = {{ Auth::user()->amount }};
        // Check if the user's balance is sufficient for the purchase
        if (userBalance < pur) {
            // If the balance is insufficient, display an error message
            alert('Insufficient balance. Please top up your account.');
            return; // Exit the function early
        }
        @endif

        // If the user is authenticated and has sufficient balance, proceed with the purchase confirmation
        var submit = true; // Set submit to true
        if (submit == true) { // Check if submit is true
            var confirmPurchase = confirm('Confirm purchase of ' + name + '?');
            if (confirmPurchase) {
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
                window.location.href = postUrl;
            } else {
                return false;
            }
        }
    }
</script>


