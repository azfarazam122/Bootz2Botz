@extends('layouts.app')
<style>
    .wrapper {
        display: inline-flex;
        background: #fff;
        height: 100px;
        width: 400px;
        align-items: center;
        justify-content: space-evenly;
        border-radius: 5px;
        padding: 20px 15px;
        box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.2);
    }

    .wrapper .option {
        background: #fff;
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        margin: 0 10px;
        border-radius: 5px;
        cursor: pointer;
        padding: 0 10px;
        border: 2px solid lightgrey;
        transition: all 0.3s ease;
    }

    .wrapper .option .dot {
        height: 20px;
        width: 20px;
        background: #d9d9d9;
        border-radius: 50%;
        position: relative;
    }

    .wrapper .option .dot::before {
        position: absolute;
        content: "";
        top: 4px;
        left: 4px;
        width: 12px;
        height: 12px;
        background: #000000;
        border-radius: 50%;
        opacity: 0;
        transform: scale(1.5);
        transition: all 0.3s ease;
    }

    input[type="radio"] {
        display: none;
    }

    #option-1:checked:checked~.option-1,
    #option-2:checked:checked~.option-2 {
        border-color: #000000;
        background: #000000;
    }

    #option-1:checked:checked~.option-1 .dot,
    #option-2:checked:checked~.option-2 .dot {
        background: #fff;
    }

    #option-1:checked:checked~.option-1 .dot::before,
    #option-2:checked:checked~.option-2 .dot::before {
        opacity: 1;
        transform: scale(1);
    }

    .wrapper .option span {
        font-size: px;
        color: #808080;
    }

    #option-1:checked:checked~.option-1 span,
    #option-2:checked:checked~.option-2 span {
        color: #fff;
    }
</style>
@section('content')
    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card ">
                    {{-- ____________________________________________ --}}
                    <div class="wholebody">

                        <!------ Include the above in your HEAD tag ---------->
                        <div class="hero-sec"
                            style="background: url(images/pexels-pixabay-264636.jpg); position: relative; background-size: cover; background-repeat: no-repeat; height: 90vh;">

                        </div>

                        <div class="blackline">
                            <div class="hero-text">
                                <h1 style="font-size: 3.7rem;">Bootz2Botz - <span style="color: #f79c51"> Lunch Order
                                    </span></h1>

                            </div>
                        </div>





                        <!-- all challnmges  -->

                        <div class="container mt-5" style="margin-top: 100px !important;">

                            <div class="headertext">
                                <h2>Shopping List
                                </h2>
                                <p>
                                    We have a spreadsheet with everyone's favorite foods. Download the spreadsheet and make
                                    sure that
                                    all of the food is added to the shopping list before submitting the order.



                                    <br> <br>
                                    <a style="text-decoration: none" href="" class="purpleButton">Download
                                        Favourite
                                        Food Spreadsheet</a>

                                </p>
                            </div>


                            <div class="transactionBox mt-5">
                                <div class="headerBlack">
                                    <h3> Shopping List
                                        </h2>
                                </div>

                                <div class="bodyTransaction pb-5">
                                    <div class="row my-4">


                                        <div class="col-lg-12">
                                            <label for="">
                                                Enter Grocery Item to List
                                            </label> <br>
                                            <input type="text" class="form-control" name="" style="width:100%;"
                                                id="addedZItem">
                                        </div>
                                        <div class="col-lg-4 mt-3">

                                            <a onclick="addingItem()"
                                                style="text-decoration: none; background-color: black; color: #ffffff;"
                                                class="purpleButton">Add Item</a>
                                        </div>

                                    </div>


                                    <div class="row">


                                        <div class="col-lg-12">
                                            <h2> Send My Order </h2>
                                            <p>
                                                Once all items have been added to your shopping list, press the submit
                                                button and one of
                                                our friendly robotic shoppers will go find all items you've entered in your
                                                list and
                                                assemble your order. That robot will then hand the bagged groceries over to
                                                another
                                                robot who will drive them to your house and deliver them to you. We're still
                                                working on
                                                a robot that can cook the food for you, expect that next quarter.
                                                <br>

                                                Please acknowledge that you agree to the terms above:

                                            </p>


                                        </div>
                                        <br>
                                        <div class="wrapper col-md-6" style="background: none;box-shadow: none;">
                                            <input type="radio" name="select" id="option-1" checked>
                                            <input type="radio" name="select" id="option-2">
                                            <label for="option-1" class="option option-1">
                                                <div class="dot"></div>
                                                <span>Yes</span>
                                            </label>
                                            <label for="option-2" class="option option-2">
                                                <div class="dot"></div>
                                                <span>No</span>
                                            </label>
                                        </div>
                                    </div>



                                </div>
                            </div>
                            <br>
                            <a class="btn btn-dark btn-lg col-md-3 fs-4 ">Submit order</a>

                        </div>

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
                                            <li><a href="#">Signup</a></li>
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
                    {{-- ____________________________________________ --}}
                </div>
            </div>
        </div>
    </div>
@endsection
