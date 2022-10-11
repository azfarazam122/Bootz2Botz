@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card ">
                    {{-- ____________________________________________ --}}
                    <div class="wholebody">

                        <!------ Include the above in your HEAD tag ---------->
                        <div class="hero-sec"
                            style="background: url(images/cash_me_outside_header.jpg); position: relative; background-size: cover; background-repeat: no-repeat; height: 90vh;">

                        </div>

                        <div class="blackline">
                            <div class="hero-text">
                                <h1 style="font-size: 3.7rem;">Cash me
                                    - <span style="color: #f79c51"> Outisde
                                    </span></h1>

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
                                    Copy token for Site below and enter it into Kado Bank, and Enter the confirmation code
                                    in CashStation Website before due time and win!



                                </p>

                            </div>

                            {{-- Page 1 --}}
                            <div id="cashMeOutsideMainDiv">
                                <div class="transactionBox mt-5">
                                    <div class="text-end m-1">
                                        <button class="btn btn-dark" onclick="restartTest()">Restart Test</button>
                                    </div>

                                    <div class="headerBlack">


                                        <p class="lead">Please Copy The Token Generated.</p>
                                    </div>

                                    <div class="bodyTransaction pb-5">
                                        <div class="row my-4">
                                            <div class="col-lg-12 mt-3">
                                                <h3>Your Token Is Below</h3>
                                                <small>you only have 5 Seconds to pick up the Value And Paste it in Kado
                                                    Bank System Otherwise Our System will Generate new value After Each 5
                                                    Seconds</small>
                                                <div id="mainDivOfToken" class="row">
                                                    <input type="text" id="uniqueTokenValue" class="form-control lead"
                                                        readonly>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="row col-md-6 ">
                                    <div class="col-md-6 text-start">
                                        <a style="text-decoration: none" style="cursor: pointer;"
                                            onclick="goToKadoBankSystem()" class="purpleButton">Go To Kado Bank</a>
                                    </div>
                                    <!-- /////////////////////// -->
                                </div>
                            </div>

                            {{-- Page 2 --}}
                            <div style="display: none;" id="kadoBankMainDiv">
                                <div class="transactionBox mt-5">

                                    <div class="text-end m-1">
                                        <button class="btn btn-dark" onclick="restartTest()">Restart Test</button>
                                    </div>
                                    <div class="headerBlack">
                                        <p class="lead">Please fill following field</p>
                                    </div>
                                    <div class="bodyTransaction pb-5">
                                        <div class="row my-4">
                                            <div class="col-lg-12 mt-3">
                                                <h3>Enter Your Generated Token</h3>
                                                <input type="text" id="enterGeneratedToken"
                                                    placeholder="Enter Your Generated Token" class="form-control"
                                                    name="" style="width:100%;" id="kadobankinput">

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="row col-md-12 ">
                                    <div class="col-md-6 text-start">
                                        <button style="cursor: pointer;" onclick="goToCashStationSystem()"
                                            class="purpleButton">Go to CashStation
                                            Website</button>
                                    </div>
                                    <div class="col-md-6 text-end">
                                        <button class="btn btn-dark" style="width: 140px;"
                                            onclick="goToCashMeOutsidePage()">Previous</button>
                                    </div>
                                    <!-- /////////////////////// -->
                                </div>
                            </div>

                            {{-- Page 3 --}}
                            <div style="display: none;" id="cashStationMainDiv">
                                <div class="transactionBox mt-5">

                                    <div class="text-end m-1">
                                        <button class="btn btn-dark" onclick="restartTest()">Restart Test</button>
                                    </div>
                                    <div class="headerBlack">
                                        <p class="lead">Please fill following field</p>
                                    </div>

                                    <div class="bodyTransaction pb-5">
                                        <div class="row my-4">
                                            <div class="col-lg-12 mt-3">
                                                <div class="text-end">
                                                    <button class="btn btn-secondary" onclick="seeYourConfimationCode()">See
                                                        Your Confirmation
                                                        Code</button>
                                                </div>
                                                <h3>Please Enter Confirmaion Code from Kado Bank</h3>
                                                <input type="text" id="confirmationCodeValue"
                                                    placeholder="Enter Confirmation Code" class="form-control"
                                                    name="" style="width:100%;" id="confirmationcode">

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="row col-md-6 ">
                                    <div class="col-md-6 text-start">
                                        <button style="text-decoration: none" style="cursor: pointer;"
                                            onclick="checkConfirmationCode()" class="purpleButton">Check
                                            Result</button>
                                    </div>
                                    <!-- /////////////////////// -->
                                </div>
                            </div>






                        </div>

                        <!--  _____________________FOOTER______________________________ -->

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
                        <!--  _____________________FOOTER______________________________ -->

                    </div>
                    {{-- ____________________________________________ --}}
                </div>
            </div>
        </div>
    </div>
    <script>
        var uniq;
        generateTokenAfterEach5Seconds()
        uniq = 'ut232SdrDfsGFGSDDWEsqWd1122ee' + (new Date()).getTime();
        document.getElementById('uniqueTokenValue').value = uniq;


        function generateTokenAfterEach5Seconds() {
            setTimeout(() => {
                uniq = 'ut232SdrDfsGFGSDDWEsqWd1122ee' + (new Date()).getTime();
                document.getElementById('uniqueTokenValue').value = uniq;
                document.getElementById('uniqueTokenValue').style.fontWeight = "bold";
                setTimeout(() => {
                    document.getElementById('uniqueTokenValue').style.fontWeight = "normal";
                }, "200")

                generateTokenAfterEach5Seconds()
            }, "5000")
        }


        function goToKadoBankSystem() {
            $('#cashMeOutsideMainDiv').hide();
            $('#kadoBankMainDiv').show();
        }

        function goToCashMeOutsidePage() {
            $('#cashMeOutsideMainDiv').show();
            $('#kadoBankMainDiv').hide();
        }

        var confirmationCode;

        function goToCashStationSystem() {
            if (document.getElementById('enterGeneratedToken').value == uniq) {
                $('#kadoBankMainDiv').hide();
                $('#cashStationMainDiv').show();
                confirmationCode = 'cC23123AVSRAsTGsGhsDWEsQWd1W22eE' + (new Date()).getTime();

                Swal.fire({
                    title: '<strong>Transaction Successful !</strong>',
                    icon: 'success',
                    html: `<p class="lead"> Your Transaction Confirmation Number is : </p>` +
                        `<input readonly type="text" class="form-control" value="` + confirmationCode + `">` +
                        ``,
                    showCloseButton: true,
                    focusConfirm: false,
                    confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
                    confirmButtonAriaLabel: 'Thumbs up, great!',
                })
            } else {
                Swal.fire(
                    'Unsuccessful !',
                    "Try Again. Token Don't match.",
                    'error'
                )
            }
        }

        function seeYourConfimationCode() {
            Swal.fire({
                title: '<strong>Transaction Confirmation Number!</strong>',
                icon: 'success',
                html: `<p class="lead"> Your Transaction Confirmation Number is : </p>` +
                    `<input readonly type="text" class="form-control" value="` + confirmationCode + `">` +
                    ``,
                showCloseButton: true,
                focusConfirm: false,
                confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
                confirmButtonAriaLabel: 'Thumbs up, great!',
            })
        }

        function checkConfirmationCode() {
            stop()
            var a = document.getElementById('stopwatch').innerHTML
            var b = a.split(':');
            let minute = numeral(b[0]).value();
            let seconds = numeral(b[1]).value();
            if (minute == 0 && seconds < 31) {
                if (document.getElementById('confirmationCodeValue').value == confirmationCode) {
                    Swal.fire(
                        'Result : ' + '100' + '% Accuracy , <br>  Total Time : ' +
                        a,
                        "Excellent. It looks like All fields were filled correctly.",
                        'success'
                    )
                } else {
                    Swal.fire(
                        'Unsuccessful !',
                        "Try Again. Confirmation Code Doesn't match. Restart the Test",
                        'error'
                    )
                }
            } else {
                Swal.fire(
                    'Unsuccessful !',
                    "Try Again. You have Exceed's the Time Limit. Restart the Test",
                    'error'
                )

            }
        }
        var noOfTimesSubmitButtonClick = 0;
        var noOfCorrectAnswers = [];
        start();



        function restartTest() {
            window.location.href = window.location.href;
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
