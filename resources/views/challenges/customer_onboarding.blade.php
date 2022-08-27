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
                            style="background: url(images/customer_onboarding.jpg); position: relative; background-size: cover; background-repeat: no-repeat; height: 90vh;">

                        </div>

                        <div class="blackline">
                            <div class="hero-text">
                                <h1 style="font-size: 3.7rem;">Bootz2Botz - <span style="color: #f79c51"> CUSTOMER ONBOARDING
                                    </span></h1>

                            </div>
                        </div>





                        <!-- all challnmges  -->

                        <div class="container mt-5" style="margin-top: 100px !important;">

                            <div class="headertext">

                                <p>
                                    New corporate customers need to be added to The Cable Co's customer relationship
                                    management system. Download the CSV below and enter each missing customer's information.
                                    Click 'Register' after entering each customer's details to commit them to the CRM. Once
                                    all 7 customers' details have been entered, your score for the exercise will be
                                    displayed.









                                    <br> <br>
                                    <a style="text-decoration: none" href="images/Missing Customers.csv" download
                                        class="purpleButton">Download
                                        CSV </a>

                                </p>
                            </div>


                            <div class="transactionBox mt-5">
                                <div class="headerBlack">
                                    <h3>Customer OnBoarding

                                        </h2>
                                        <p>Please fill in customer details to add each new customer to the customer
                                            relationship management system.



                                        </p>
                                </div>

                                <div class="bodyTransaction pb-5">

                                    <div class="row my-4">


                                        <div class="col-lg-6 mt-3">
                                            <label for="">
                                                Customer Name
                                            </label> <br>
                                            <input type="text" placeholder="Customer Name" class="form-control"
                                                name="" style="width:100%;" id="customer_name">
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <label for="">
                                                Customer ID
                                            </label> <br>
                                            <input type="text" placeholder="Customer ID" class="form-control"
                                                name="" style="width:100%;" id="customer_id">
                                        </div>

                                    </div>
                                    <!--  -->

                                    <div class="row my-4">


                                        <div class="col-lg-6 >
    <label for="">
                                            Primary Contact
                                            </label> <br>
                                            <input type="text" placeholder="Primary Contact" class="form-control"
                                                name="" style="width:100%;" id="primary_contact">
                                        </div>
                                        <div class="col-lg-6 >
    <label for="">
                                            Street Address
                                            </label> <br>
                                            <input type="text" placeholder="Street Address" class="form-control"
                                                name="" style="width:100%;" id="street_address">
                                        </div>

                                    </div>



                                    <!--  -->



                                    <div class="row my-4">


                                        <div class="col-lg-6 ">
                                            <label for="">
                                                City
                                            </label> <br>
                                            <input type="text" placeholder="City" class="form-control" name=""
                                                style="width:100%;" id="city">
                                        </div>
                                        <div class="col-lg-6 ">
                                            <label for="">
                                                State
                                            </label> <br>
                                            <select class="form-control" id="state" name="state">
                                                <option value="State">State</option>
                                                <option value="AL">AL</option>
                                                <option value="AK">AK</option>
                                                <option value="AR">AR</option>
                                                <option value="AZ">AZ</option>
                                                <option value="CA">CA</option>
                                                <option value="CO">CO</option>
                                                <option value="CT">CT</option>
                                                <option value="DC">DC</option>
                                                <option value="DE">DE</option>
                                                <option value="FL">FL</option>
                                                <option value="GA">GA</option>
                                                <option value="HI">HI</option>
                                                <option value="IA">IA</option>
                                                <option value="ID">ID</option>
                                                <option value="IL">IL</option>
                                                <option value="IN">IN</option>
                                                <option value="KS">KS</option>
                                                <option value="KY">KY</option>
                                                <option value="LA">LA</option>
                                                <option value="MA">MA</option>
                                                <option value="MD">MD</option>
                                                <option value="ME">ME</option>
                                                <option value="MI">MI</option>
                                                <option value="MN">MN</option>
                                                <option value="MO">MO</option>
                                                <option value="MS">MS</option>
                                                <option value="MT">MT</option>
                                                <option value="NC">NC</option>
                                                <option value="NE">NE</option>
                                                <option value="NH">NH</option>
                                                <option value="NJ">NJ</option>
                                                <option value="NM">NM</option>
                                                <option value="NV">NV</option>
                                                <option value="NY">NY</option>
                                                <option value="ND">ND</option>
                                                <option value="OH">OH</option>
                                                <option value="OK">OK</option>
                                                <option value="OR">OR</option>
                                                <option value="PA">PA</option>
                                                <option value="RI">RI</option>
                                                <option value="SC">SC</option>
                                                <option value="SD">SD</option>
                                                <option value="TN">TN</option>
                                                <option value="TX">TX</option>
                                                <option value="UT">UT</option>
                                                <option value="VT">VT</option>
                                                <option value="VA">VA</option>
                                                <option value="WA">WA</option>
                                                <option value="WI">WI</option>
                                                <option value="WV">WV</option>
                                                <option value="WY">WY</option>
                                            </select>
                                        </div>

                                    </div>

                                    <!--  -->


                                    <div class="row my-4">


                                        <div class="col-lg-6 ">
                                            <label for="">
                                                Zipcode
                                            </label> <br>
                                            <input type="text" placeholder="Zipcode" class="form-control"
                                                name="" style="width:100%;" id="zipcode">
                                        </div>
                                        <div class="col-lg-6 ">
                                            <label for="">
                                                Email
                                            </label> <br>
                                            <input type="text" placeholder="Email" class="form-control"
                                                name="" style="width:100%;" id="email">
                                        </div>

                                    </div>



                                    {{-- <div class="row">



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
                                    </div> --}}



                                </div>
                            </div>
                            <br>
                            <div class="row col-md-6">
                                <div class="col-md-6 text-start">
                                    <a style="text-decoration: none" id="SubmitButton"
                                        onclick="customerOnBoardingSubmit()"
                                        class="btn btn-dark btn-lg col-md-9 fs-4">Submit</a>
                                    <a style="text-decoration: none; display: none" id="RestartTestButton"
                                        onclick="restartTest()" class="btn btn-dark btn-lg col-md-9 fs-4">Restart Test</a>
                                </div>
                                <div class="col-md-6 text-end lead fs-2">
                                    <div style="display: none" id="resultBoxMainDiv">Result : <span class="lead fs-2"
                                            id="noOfTimesSubmitButtonClickAndAnswer"></span>
                                    </div>
                                </div>
                            </div>



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
                    {{-- ____________________________________________ --}}
                </div>
            </div>
        </div>
    </div>
    <script>
        var noOfTimesSubmitButtonClick = 0;
        var noOfCorrectAnswers = [];
        var startTime;

        function customerOnBoardingSubmit() {
            if (noOfTimesSubmitButtonClick == 0) {
                startTime = new Date();
            }
            if (noOfTimesSubmitButtonClick < 8) {
                let resultBox = document.getElementById('noOfTimesSubmitButtonClickAndAnswer');
                let resultBoxMainDiv = document.getElementById('resultBoxMainDiv');
                resultBoxMainDiv.style.display = "";
                // // ________________________________
                this.axios.post("{{ route('customerOnboardingResult') }}", {
                        no_of_time_submit_btn_click: (noOfTimesSubmitButtonClick + 1),
                        customer_name: document.getElementById('customer_name').value,
                        customer_id: document.getElementById('customer_id').value,
                        primary_contact: document.getElementById('primary_contact').value,
                        street_address: document.getElementById('street_address').value,
                        city: document.getElementById('city').value,
                        state: document.getElementById('state').value,
                        zipcode: document.getElementById('zipcode').value,
                        email: document.getElementById('email').value,
                    })
                    .then(function(response) {
                        noOfCorrectAnswers.push(numeral(response.data).value());
                        let totalCorrectAnswers = noOfCorrectAnswers.reduce((partialSum, a) => partialSum + a, 0);
                        noOfTimesSubmitButtonClick++;
                        resultBox.innerHTML = totalCorrectAnswers + "/" + (noOfTimesSubmitButtonClick * 10);
                        //     // Swal.fire({
                        //     //     icon: 'error',
                        //     //     title: 'Oops...',
                        //     //     text: 'Something went wrong!',
                        //     //     footer: '<a href="">Why do I have this issue?</a>'
                        //     // })

                    })
                    .catch(function(error) {
                        console.log(error.response);
                    });
                // ________________________________

            } else if (noOfTimesSubmitButtonClick == 8) {
                let endTime = new Date()
                let totalTime = (endTime - startTime) / 1000;
                totalTime = totalTime.toFixed(2);

                let totalCorrectAnswers = noOfCorrectAnswers.reduce((partialSum, a) => partialSum + a, 0);
                let resultInPercentage = totalCorrectAnswers / 64;
                resultInPercentage = resultInPercentage * 100;
                resultInPercentage = resultInPercentage.toFixed(0);
                if (resultInPercentage <= 50) {
                    Swal.fire(
                        'Result : ' + resultInPercentage + '% Accuracy , <br>  Total Time : ' +
                        totalTime + 's',
                        "Try Again. It looks like some fields were filled incorrectly.",
                        'success'
                    )
                } else if (resultInPercentage > 50 && resultInPercentage < 76) {
                    Swal.fire(
                        'Result : ' + resultInPercentage + '% Accuracy , <br>  Total Time : ' +
                        totalTime + 's',
                        "Well Done. It looks like more than half of the fields were filled correctly.",
                        'success'
                    )

                } else if (resultInPercentage > 75) {
                    Swal.fire(
                        'Result : ' + resultInPercentage + '% Accuracy , <br>  Total Time : ' +
                        totalTime + 's',
                        "Excellent. It looks like All fields were filled correctly.",
                        'success'
                    )

                }

                document.getElementById('SubmitButton').style.display = "none"
                document.getElementById('RestartTestButton').style.display = ""
            }
        }

        function restartTest() {
            window.location.href = window.location.href;
        }
    </script>
@endsection
