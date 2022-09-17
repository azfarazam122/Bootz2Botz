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
                            style="background: url(images/rpa_challenge.jpg); position: relative; background-size: cover; background-repeat: no-repeat; height: 90vh;">

                        </div>

                        <div class="blackline">
                            <div class="hero-text">
                                <h1 style="font-size: 3.7rem;">
                                    RPA CHallenge
                                    <span style="color: #f79c51">
                                    </span>
                                </h1>

                            </div>
                        </div>





                        <!-- STOP WATCH CALCULATE TOTAL TIME OF CHALLENGE  -->
                        <p class="stopwatch display-3 text-center" id="stopwatch">
                            <!-- stopwatch goes here -->
                        </p>
                        <button class="btn-start d-none" id="startBtn">Start</button>
                        <button class="btn-stop d-none" id="stopBtn">Stop</button>
                        <button class="btn-reset d-none" id="resetBtn">Reset</button>


                        <div class="container mt-5">

                            <div class="headertext">

                                <p>
                                    Download the csv with all your new corporate intelligence and enter the missing
                                    information into our system. Make sure to click “register” after entering each customers
                                    details or you won’t be given credit for all your hard work. You also won’t move onto
                                    the next round. Dagger.

                                    <br> <br>
                                    {{-- <a style="text-decoration: none" href="{{ asset('images/Missing Customers.csv') }}"
                                        download='Missing Customers.csv' class="purpleButton">Download
                                        CSV </a> --}}
                                    <a style="text-decoration: none" id="linkForCSV_fileDownloadForRpaChallenge"
                                        href="{{ asset('assets/RandomCSV/rpa-challenge.csv') }}"
                                        download='rpa-challenge.csv' class="purpleButton d-none">Download
                                        CSV</a>
                                    <button style="text-decoration: none" onclick="downloadCsvWithRandomData()"
                                        class="purpleButton">Download
                                        CSV</button>

                                </p>
                            </div>


                            <div class="transactionBox mt-5">
                                <div class="headerBlack">
                                    <h3>RPA Challenge

                                        </h2>
                                        <p>Please fill in customer details to add each new customer to the customer
                                            relationship management system.



                                        </p>
                                </div>

                                <div class="bodyTransaction pb-5">

                                    <div class="row my-4">
                                        <div class="col-lg-6 mt-3">
                                            <label for="">
                                                First Name
                                            </label> <br>
                                            <input type="text" placeholder="first Name" class="form-control"
                                                name="" style="width:100%;" id="first_name">
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <label for="">
                                                last Name I
                                            </label> <br>
                                            <input type="text" placeholder="Last Name" class="form-control"
                                                name="" style="width:100%;" id="last_name">
                                        </div>
                                    </div>
                                    <!--  -->


                                    <div class="row my-4">
                                        <div class="col-lg-6 mt-3">
                                            <label for="">
                                                Phone Number
                                            </label> <br>
                                            <input type="text" placeholder="Phone Number" class="form-control"
                                                name="" style="width:100%;" id="phone_number">
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <label for="">
                                                Email
                                            </label> <br>
                                            <input type="text" placeholder="Email" class="form-control" name=""
                                                style="width:100%;" id="email">
                                        </div>
                                    </div>
                                    <!--  -->



                                    <div class="row my-4">
                                        <div class="col-lg-6 mt-3">
                                            <label for="">
                                                Address
                                            </label> <br>
                                            <input type="text" placeholder="Address" class="form-control" name=""
                                                style="width:100%;" id="address">
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <label for="">
                                                Role In Company
                                            </label> <br>
                                            <input type="text" placeholder="Role In Company" class="form-control"
                                                name="" style="width:100%;" id="role_in_company">
                                        </div>
                                    </div>



                                    <!--  -->

                                    <div class="row my-4">
                                        <div class="col-lg-6 mt-3">
                                            <label for="">
                                                Company Name
                                            </label> <br>
                                            <input type="text" placeholder="Company Name" class="form-control"
                                                name="" style="width:100%;" id="company_name">
                                        </div>

                                    </div>

                                    <!--  -->









                                </div>
                            </div>
                            <br>
                            <div class="row col-md-6">
                                <div class="col-md-6 text-start">
                                    <a style="text-decoration: none" id="SubmitButton" onclick="rpaChallengesSubmit()"
                                        class="btn btn-dark btn-lg col-md-9 fs-4">Submit</a>
                                    <a style="text-decoration: none; display: none" id="RestartTestButton"
                                        onclick="restartTest()" class="btn btn-dark btn-lg col-md-9 fs-4">Restart Test</a>
                                </div>
                                <!-- /////////////////////// -->
                                <div class="col-md-6 text-end lead fs-2">
                                    <div style="display: none" id="resultBoxMainDiv">
                                        <div> Result : <span class="lead fs-2"
                                                id="noOfTimesSubmitButtonClickAndAnswer"></span>
                                        </div>
                                        <div> Count : <span class="lead fs-2" id="noOfTimesSubmitButtonClick"></span>
                                        </div>
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
    <script>
        function randomPositions() {

            var bodyTransaction = document.querySelector('.bodyTransaction');
            for (var i = bodyTransaction.children.length; i >= 0; i--) {
                bodyTransaction.appendChild(bodyTransaction.children[Math.random() * i | 0]);
            }
        }
        var noOfTimesSubmitButtonClick = 0;
        var noOfCorrectAnswers = [];
        start();

        function rpaChallengesSubmit() {
            if (checkIfDownloadCSVButtonIsClicked == true) {
                if (noOfTimesSubmitButtonClick == 0) {
                    startTime = new Date();
                }
                if (noOfTimesSubmitButtonClick < 10) {
                    let resultBox = document.getElementById('noOfTimesSubmitButtonClickAndAnswer');
                    let countBox = document.getElementById('noOfTimesSubmitButtonClick');
                    let resultBoxMainDiv = document.getElementById('resultBoxMainDiv');
                    resultBoxMainDiv.style.display = "";
                    // // ________________________________
                    this.axios.post("{{ route('rpaChallengeResult') }}", {
                            no_of_time_submit_btn_click: (noOfTimesSubmitButtonClick + 1),
                            first_name: document.getElementById('first_name').value,
                            last_name: document.getElementById('last_name').value,
                            phone_number: document.getElementById('phone_number').value,
                            email: document.getElementById('email').value,
                            address: document.getElementById('address').value,
                            role_in_company: document.getElementById('role_in_company').value,
                            company_name: document.getElementById('company_name').value,
                        })
                        .then(function(response) {
                            noOfCorrectAnswers.push(numeral(response.data).value());
                            let totalCorrectAnswers = noOfCorrectAnswers.reduce((partialSum, a) => partialSum + a, 0);
                            noOfTimesSubmitButtonClick++;
                            resultBox.innerHTML = totalCorrectAnswers + "/" + (noOfTimesSubmitButtonClick * 7);
                            countBox.innerHTML = noOfTimesSubmitButtonClick;
                            if (noOfTimesSubmitButtonClick == 10) {
                                document.getElementById('SubmitButton').innerHTML = "Check Result"
                            }
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

                } else if (noOfTimesSubmitButtonClick == 10) {
                    stop();
                    let totalTime = document.getElementById('stopwatch').innerHTML;
                    let totalCorrectAnswers = noOfCorrectAnswers.reduce((partialSum, a) => partialSum + a, 0);
                    let resultInPercentage = totalCorrectAnswers / 64;
                    resultInPercentage = resultInPercentage * 100;
                    resultInPercentage = resultInPercentage.toFixed(0);
                    if (resultInPercentage <= 50) {
                        Swal.fire(
                            'Result : ' + resultInPercentage + '% Accuracy , <br>  Total Time : ' +
                            totalTime,
                            "Try Again. It looks like some fields were filled incorrectly.",
                            'success'
                        )
                    } else if (resultInPercentage > 50 && resultInPercentage < 76) {
                        Swal.fire(
                            'Result : ' + resultInPercentage + '% Accuracy , <br>  Total Time : ' +
                            totalTime,
                            "Well Done. It looks like more than half of the fields were filled correctly.",
                            'success'
                        )

                    } else if (resultInPercentage > 75) {
                        Swal.fire(
                            'Result : ' + resultInPercentage + '% Accuracy , <br>  Total Time : ' +
                            totalTime,
                            "Excellent. It looks like All fields were filled correctly.",
                            'success'
                        )

                    }

                    document.getElementById('SubmitButton').style.display = "none"
                    document.getElementById('RestartTestButton').style.display = ""
                }
            } else {
                Swal.fire(
                    'Download CSV First: ',
                    "You have to Download The CSV First From the Top Of The Page Than Match the Values With It Than Submit",
                    'error'
                )
            }

        }

        function restartTest() {
            window.location.href = window.location.href;
        }
        var checkIfDownloadCSVButtonIsClicked = false;

        function downloadCsvWithRandomData() {
            this.axios.post("{{ route('generateCSVWithRandomDataForRpaChallenge') }}", {})
                .then(function(response) {
                    checkIfDownloadCSVButtonIsClicked = true;
                    document.getElementById('linkForCSV_fileDownloadForRpaChallenge').click();
                })
                .catch(function(error) {
                    console.log(error.response);
                });
        }

        // Calculate Total Time Challenge Take
        const startBtn = document.getElementById('startBtn');
        const stopBtn = document.getElementById('stopBtn');
        const resetBtn = document.getElementById('resetBtn');

        startBtn.addEventListener('click', start, false);
        stopBtn.addEventListener('click', stop, false);
        resetBtn.addEventListener('click', reset, false);

        let output = document.getElementById('stopwatch');
        let ms = 0;
        let sec = 0;
        let min = 0;

        function timer() {
            ms++;
            if (ms >= 100) {
                sec++
                ms = 0
            }
            if (sec === 60) {
                min++
                sec = 0
            }
            if (min === 60) {
                ms,
                sec,
                min = 0;
            }

            //Doing some string interpolation
            let milli = ms < 10 ? `0` + ms : ms;
            let seconds = sec < 10 ? `0` + sec : sec;
            let minute = min < 10 ? `0` + min : min;

            let timer = `${minute}:${seconds}:${milli}`;
            output.innerHTML = timer;
        };
        //Start timer
        function start() {
            time = setInterval(timer, 10);
        }
        //stop timer
        function stop() {
            clearInterval(time)
        }
        //reset timer
        function reset() {
            ms = 0;
            sec = 0;
            min = 0;

            output.innerHTML = `00:00:00`
        }
    </script>
@endsection
