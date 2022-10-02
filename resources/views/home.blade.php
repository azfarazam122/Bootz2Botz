@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    {{-- <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div> --}}
                    {{-- COMMENT --}}
                    {{-- __________________________________________________________ --}}
                    {{-- Main Challenges Page --}}
                    <div class="wholebody">

                        <!------ Include the above in your HEAD tag ---------->
                        <div class="hero-sec"
                            style="background: url(images/pexels-designecologist-1779487.jpg); position: relative; background-size: cover; background-repeat: no-repeat; height: 90vh;">

                        </div>

                        <div class="blackline">
                            <div>
                                <h1 class="display-1">All Challenges</h1>

                            </div>
                        </div>

                        {{-- ALL CHALLENGES LIST --}}
                        {{-- ALL CHALLENGES LIST --}}
                        {{-- ALL CHALLENGES LIST --}}
                        <div class="container mt-5" style="margin-top: 100px !important;">

                            <!-- END OF QUARTER REVIEW-->
                            <div class="challenge">
                                <div class="header-chal">
                                    <h1>
                                        End of Quarter Review

                                    </h1>
                                </div>

                                <div class="body-chal">
                                    <div class="row">
                                        <div class="col-lg-3 p-3 pt-4 ps-5">
                                            <img src="images/quarter.png" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="row col-lg-9 p-3">
                                            <div class="col-10">
                                                <p>
                                                    It’s that time of the quarter, review time! We all know how fun it
                                                    is to
                                                    crunch all those numbers. We all just wish it were that time of the
                                                    quarter every day……right? No way. That’s why we are going to
                                                    automate
                                                    this task.

                                                    <br>
                                                    <hr>

                                                </p>
                                                <a style="text-decoration: none" target="blank" href="Challenge_1"
                                                    class="purpleButton">View More</a>
                                            </div>
                                            <div class="col-2">
                                                <img width="100%" src="images/dif.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            {{-- GROCERY STORE --}}
                            <div class="challenge">
                                <div class="header-chal">
                                    <h1>

                                        Grocery Store? I don’t think so!

                                    </h1>
                                </div>

                                <div class="body-chal">
                                    <div class="row">
                                        <div class="col-lg-3 p-3 pt-4 ps-5">
                                            <img src="images/grocery.png" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="row col-lg-9 p-3">
                                            <div class="col-10">
                                                <p>
                                                    If you want to win this one, you will have to download the shopping
                                                    list
                                                    from the page and then add each item from the provided list onto
                                                    your
                                                    order. If you want your food, don’t forget to acknowledge the site’s
                                                    terms and complete your order!

                                                    <br>
                                                    <hr>
                                                </p>
                                                <a style="text-decoration: none" target="blank" href="Challenge_2"
                                                    class="purpleButton">View More</a>
                                            </div>
                                            <div class="col-2">
                                                <img width="100%" src="images/dif.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            {{-- ALL THE INVOICES --}}
                            <div class="challenge">
                                <div class="header-chal">
                                    <h1>
                                        All the Invoices
                                    </h1>
                                </div>

                                <div class="body-chal">
                                    <div class="row">
                                        <div class="col-lg-3 p-3 pt-4 ps-5">
                                            <img src="images/invoice.png" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="row col-lg-9 p-3">
                                            <div class="col-10">
                                                <p>
                                                    Every company wants to make money, it’s how you get paid. But to do
                                                    that, the company needs to have a good system of entering its
                                                    invoices
                                                    into their newly designed web app. Automation is the key to
                                                    simplifying
                                                    this process. Let’s see what you can do.


                                                    <br>
                                                    <hr>
                                                </p>
                                                <a style="text-decoration: none" target="blank" href="Challenge_3"
                                                    class="purpleButton">View More</a>
                                            </div>
                                            <div class="col-2">
                                                <img width="100%" src="images/dif.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <!-- CLIE-INTEL -->
                            <div class="challenge">
                                <div class="header-chal">
                                    <h1>



                                        Clie-Intel

                                    </h1>
                                </div>

                                <div class="body-chal">
                                    <div class="row">
                                        <div class="col-lg-3 p-3 pt-4 ps-5">
                                            <img src="images/customer.png" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="row col-lg-9 p-3">
                                            <div class="col-10">
                                                <p>
                                                    You have such a great personality that you were able to establish
                                                    new
                                                    friendships…..or at least business relationships. Take all the
                                                    information you were able to pull out of your new “friends” and put
                                                    them
                                                    into our information collection system…..errr……customer relationship
                                                    management tool.

                                                    <br>
                                                    <hr>
                                                </p>
                                                <a style="text-decoration: none" target="blank" href="Challenge_4"
                                                    class="purpleButton">View More</a>
                                            </div>
                                            <div class="col-2">
                                                <img width="100%" src="images/dif.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>












                            <!-- phase 2 start here  -->


                            {{-- RPA CHALLENGE --}}
                            <div class="challenge">
                                <div class="header-chal">
                                    <h1>


                                        RPA challenge
                                    </h1>
                                </div>

                                <div class="body-chal">
                                    <div class="row">
                                        <div class="col-lg-3 p-3 pt-4 ps-5">
                                            <img src="images/rpa.png" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="row col-lg-9 p-3">
                                            <div class="col-10">
                                                <p>
                                                    You have such a great personality that you were able to establish
                                                    new
                                                    friendships…..or at least business relationships. Take all the
                                                    information you were able to pull out of your new “friends” and put
                                                    them
                                                    into our information collection system…..errr……customer relationship
                                                    management tool.

                                                    <br>
                                                    <hr>
                                                </p>
                                                <a style="text-decoration: none" target="blank" href="/Challenge_5"
                                                    class="purpleButton">View More</a>
                                            </div>
                                            <div class="col-2">
                                                <img width="100%" src="images/dif.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>






                            {{-- GROCERY STORE EXTREME --}}
                            <div class="challenge">
                                <div class="header-chal">
                                    <h1>

                                        Grocery Store Extreme Version!

                                    </h1>
                                </div>

                                <div class="body-chal">
                                    <div class="row">
                                        <div class="col-lg-3 p-3 pt-4 ps-5">
                                            <img src="images/grocery.png" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="row col-lg-9 p-3">
                                            <div class="col-10">
                                                <p>
                                                    So, This one is similiar to Grocery Store that you have playe above
                                                    but
                                                    guess what? We have
                                                    a little twist for you. After some iterations new fields will be
                                                    added
                                                    and let's see how you
                                                    tackle it, Interested? Click and play now!

                                                    <br>
                                                    <hr>
                                                </p>
                                                <a style="text-decoration: none" target="blank" href="Challenge_6"
                                                    class="purpleButton">View More</a>
                                            </div>
                                            <div class="col-2">
                                                <img width="100%" src="images/dif.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            {{-- MOVIE NIGHT CHALLENGE --}}
                            <div class="challenge">
                                <div class="header-chal">
                                    <h1>

                                        Movie Night

                                    </h1>
                                </div>

                                <div class="body-chal">
                                    <div class="row">
                                        <div class="col-lg-3 p-3 pt-4 ps-5">
                                            <img src="images/movie.jpg" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="row col-lg-9 p-3">
                                            <div class="col-10">
                                                <p>
                                                    Tell Us some Information about the movie shown to you and win!

                                                    <br>
                                                    <hr>
                                                </p>
                                                <a style="text-decoration: none" target="blank" href="/Challenge_7"
                                                    class="purpleButton">View More</a>
                                            </div>
                                            <div class="col-2">
                                                <img width="100%" src="images/dif.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            
                            {{--Backward Data mine Assisted --}}
                            <div class="challenge">
                                <div class="header-chal">
                                    <h1>

                                    Backward Data mine Assisted

                                    </h1>
                                </div>

                                <div class="body-chal">
                                    <div class="row">
                                        <div class="col-lg-3 p-3 pt-4 ps-5">
                                            <img src="images/backwardpic.jpg" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="row col-lg-9 p-3">
                                            <div class="col-10">
                                                <p>
                                                    Tell Us some Information about the random data shown to you and win!

                                                    <br>
                                                    <hr>
                                                </p>
                                                <a style="text-decoration: none" target="blank" href="/Challenge_8"
                                                    class="purpleButton">View More</a>
                                            </div>
                                            <div class="col-2">
                                                <img width="100%" src="images/dif.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        {{-- ALL CHALLENGES LIST --}}
                        {{-- ALL CHALLENGES LIST --}}
                        {{-- ALL CHALLENGES LIST --}}



                        {{-- FOOTER --}}
                        <footer class="footer" style="margin-top: 200px">
                            <div class="container bottom_border">
                                <div class="row">
                                    <div class=" col-sm-4 col-md col-sm-4  col-12 col">
                                        <h5 class="headin5_amrc purpletext col_white_amrc pt2">Find us</h5>
                                        <!--headin5_amrc-->

                                        <p><i class="fa fa-location-arrow"></i> 9878/25 sec 9 rohini 35 </p>
                                        <p><i class="fa fa-phone"></i> +91-9999878398 </p>
                                        <p><i class="fa fa fa-envelope"></i> info@example.com </p>


                                    </div>


                                    <div class=" col-sm-4 col-md  col-6 col">
                                        <h5 class="headin5_amrc purpletext col_white_amrc pt2">Quick links</h5>
                                        <!--headin5_amrc-->
                                        <ul class="footer_ul_amrc">
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">About US</a></li>
                                            <li><a href="#">Challenges</a></li>
                                            <li><a href="#">Subscription</a></li>
                                        </ul>
                                        <!--footer_ul_amrc ends here-->
                                    </div>


                                    <div class=" col-sm-4 col-md  col-6 col">
                                        <h5 class="headin5_amrc purpletext col_white_amrc pt2">Quick links</h5>
                                        <!--headin5_amrc-->
                                        <ul class="footer_ul_amrc">
                                            <li><a href="#">Login</a></li>
                                            <li><a href="#">SignUp</a></li>
                                            <li><a href="#">Challenges</a></li>

                                        </ul>
                                        <!--footer_ul_amrc ends here-->
                                    </div>


                                    <div class=" col-sm-4 col-md  col-12 col">
                                        <h5 class="headin5_amrc purpletext col_white_amrc pt2">Follow us</h5>
                                        <!--headin5_amrc ends here-->
                                        <img src="images/logo.png" height="80" alt="" loading="lazy" />
                                        </a>
                                        <!--footer_ul2_amrc ends here-->
                                    </div>
                                </div>
                            </div>


                            <div class="container">

                                <!--foote_bottom_ul_amrc ends here-->


                                <ul class="social_footer_ul">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>

                                <br>
                                <p class="text-center">Copyright @2017 | Bootz2botz</p>
                                <!--social_footer_ul ends here-->
                            </div>

                        </footer>
                        {{-- FOOTER --}}
                    </div>
                    {{-- __________________________________________________________ --}}

                </div>
            </div>
        </div>
    </div>
    <script>
        function stillWorking() {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'This Challenge is in Development Phase !',
            })
        }
    </script>
@endsection
