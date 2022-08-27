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





                        <!-- all challnmges  -->
                        <!-- all challnmges  -->
                        <!-- all challnmges  -->
                        <!-- all challnmges  -->
                        <!-- all challnmges  -->
                        <!-- all challnmges  -->
                        <!-- all challnmges  -->
                        <!-- all challnmges  -->
                        <!-- all challnmges  -->
                        <!-- all challnmges  -->
                        <!-- all challnmges  -->
                        <!-- all challnmges  -->
                        <!-- all challnmges  -->
                        <!-- all challnmges  -->
                        <!-- all challnmges  -->
                        <!-- all challnmges  -->
                        <!-- all challnmges  -->
                        <!-- all challnmges  -->

                        <div class="container mt-5" style="margin-top: 100px !important;">
                            <!-- chal 1 -->
                            <div class="challenge">
                                <div class="header-chal">
                                    <h1>
                                        Quarter Close- Review Transaction
                                    </h1>
                                </div>

                                <div class="body-chal">
                                    <div class="row">
                                        <div class="col-lg-3 p-3 pt-4 ps-5">
                                            <img src="images/QuarterClose.png" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="row col-lg-9 p-3">
                                            <div class="col-10">
                                                <p>
                                                    Many automation use cases require researching and validating data across
                                                    multiple systems. In this challenge, the finance department of Peters
                                                    Manufacturing spends a significant amount of time doing very important
                                                    work: making sure that all of the financial obligations were met, they
                                                    were invoiced on time, that they paid on time and that, all payments
                                                    cleared in the expected time period. For each listed transaction,
                                                    validate that the transaction appears/cleared in the company’s bank.
                                                    <br>
                                                    <hr>
                                                    Arcadia Bank Username: tammy.peters@petersmfg.com <br>Arcadia Bank
                                                    Password: arcadiabank!
                                                </p>
                                                <a style="text-decoration: none" href="Challenge_1"
                                                    class="purpleButton">View More</a>
                                            </div>
                                            <div class="col-2">
                                                <img width="100%" src="images/dif.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- chal 3 -->

                            <div class="challenge">
                                <div class="header-chal">
                                    <h1>

                                        Online Grocery Ordering
                                    </h1>
                                </div>

                                <div class="body-chal">
                                    <div class="row">
                                        <div class="col-lg-3 p-3 pt-4 ps-5">
                                            <img src="images/gro.png" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="row col-lg-9 p-3">
                                            <div class="col-10">
                                                <p>
                                                    Learning to interact with both web objects and data sources is key to
                                                    being a successful RPA developer. In this challenge, you’ll need to
                                                    download the provided shopping list and add each item from the list to
                                                    the shopping order before acknowledging the terms and submitting the
                                                    order. Once the order has been submitted, the scoring modal will display
                                                    your results.

                                                </p>
                                                <a style="text-decoration: none" href="Challenge_2"
                                                    class="purpleButton">View More</a>
                                            </div>
                                            <div class="col-2">
                                                <img width="100%" src="images/dif.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- chal 3 -->

                            <div class="challenge">
                                <div class="header-chal">
                                    <h1>




                                        Invoice Processing – Accounts Payable
                                    </h1>
                                </div>

                                <div class="body-chal">
                                    <div class="row">
                                        <div class="col-lg-3 p-3 pt-4 ps-5">
                                            <img src="images/QuarterClose.png" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="row col-lg-9 p-3">
                                            <div class="col-10">
                                                <p>
                                                    Almost all organizations have an Accounts Payable department –
                                                    responsible for vendor/partner invoice processing among other tasks. In
                                                    this challenge, invoice details from various vendors need to be entered
                                                    into the Integrated Invoicing Solutions web app. Download the provided
                                                    zip of invoices and extract all invoice data (invoice number, invoice
                                                    date, invoice total, as well as quantity, item description, and total
                                                    price for each line item). With all data extracted, enter all invoice
                                                    data into the provided web app before uploading and submitting each
                                                    invoice. Process all invoices to display the scoring modal with your
                                                    challenge results.


                                                </p>
                                                <a style="text-decoration: none" href="Challenge_3"
                                                    class="purpleButton">View More</a>
                                            </div>
                                            <div class="col-2">
                                                <img width="100%" src="images/dif.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <!-- chal 4 -->

                            <div class="challenge">
                                <div class="header-chal">
                                    <h1>


                                        Customer Onboarding – Front Office
                                    </h1>
                                </div>

                                <div class="body-chal">
                                    <div class="row">
                                        <div class="col-lg-3 p-3 pt-4 ps-5">
                                            <img src="images/gro.png" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="row col-lg-9 p-3">
                                            <div class="col-10">
                                                <p>
                                                    Almost all production bots will require some use of selection statements
                                                    (if/else) and repetition (looping). In this challenge, new corporate
                                                    customers need to be added to The Cable Co’s customer relationship
                                                    management system. Download the new customers CSV and correctly enter
                                                    the customer onboarding details for each new customer. Once all new
                                                    customers have been added, the scoring modal will display your results.

                                                </p>
                                                <a style="text-decoration: none" href="Challenge_4"
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



                        <!-- footer -->
                        <!-- footer -->
                        <!-- footer -->
                        <!-- footer -->
                        <!-- footer -->
                        <!-- footer -->
                        <!-- footer -->
                        <!-- footer -->
                        <!-- footer -->
                        <!-- footer -->
                        <!-- footer -->
                        <!-- footer -->
                        <!-- footer -->
                        <!-- footer -->
                        <!-- footer -->
                        <!-- footer -->
                        <!-- footer -->
                        <!-- footer -->
                        <!-- footer -->
                        <!-- footer -->
                        <!-- footer -->
                        <!-- footer -->
                        <!-- footer -->
                        <!-- footer -->
                        <!-- footer -->
                        <!-- footer -->
                        <!-- footer -->
                        <!-- footer -->
                        <!-- footer -->
                        <!-- footer -->

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
                                            <li><a href="#">SingUp</a></li>
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
