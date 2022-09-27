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
                            style="background: url(images/movie_night.jpg); position: relative; background-size: cover; background-repeat: no-repeat; height: 90vh;">

                        </div>

                        <div class="blackline">
                            <div class="hero-text">
                                <h1 style="font-size: 3.7rem;">Movie
                                    - <span style="color: #f79c51"> Night
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
                                    You will be asked some questions about movie shown below and accuracy of your answer
                                    will effect the marks you got!



                                </p>
                                <a style="text-decoration: none" id="linkForCSV_fileDownloadForMovieNight"
                                    href="{{ asset('images/movie_night.csv') }}" download='movie_night.csv'
                                    class="purpleButton ">
                                    Download All Movie Data
                                </a>
                            </div>

                            <div id="movieNightMainDiv">
                                <div class="transactionBox mt-5">
                                    <div class="headerBlack">
                                        @php
                                            $movieNightData = DB::table('movie_night')
                                                ->inRandomOrder()
                                                ->first();
                                        @endphp

                                        <p class="display-6"> {{ $movieNightData->avatar }}</p>
                                        <p class="lead">Please fill following field about the {movie}.</p>
                                    </div>

                                    <div class="bodyTransaction pb-5">
                                        <div class="row my-4">
                                            <div class="col-lg-12 mt-3">
                                                <label class="lead mb-1" for="moneyMadeByMovie">
                                                    <!-- Every movie name shown will be matched with its revenue in database and right or wrong will predict the answer -->
                                                    Money Above Movie Made ($) ?
                                                </label> <br>
                                                <input type="text" placeholder="$" class="form-control" name=""
                                                    style="width:100%;" id="moneyMadeByMovie">
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="row col-md-6 ">
                                    <div class="col-md-6 text-start">
                                        <a style="text-decoration: none" id="SubmitButton"
                                            onclick="movieNightSubmit('{{ $movieNightData->avatar }}' , '{{ $movieNightData->money_made }}' )"
                                            class="btn btn-dark btn-lg col-md-9 fs-4">Submit</a>
                                        <a style="text-decoration: none; display: none" id="RestartTestButton"
                                            onclick="restartTest()" class="btn btn-dark btn-lg col-md-9 fs-4">Restart
                                            Test</a>
                                    </div>
                                    <!-- /////////////////////// -->
                                </div>
                            </div>

                            <div class="col-md-6 text-end lead fs-2">
                                <div style="display: none" id="resultBoxMainDiv">
                                    <div> Result : <span class="lead fs-2" id="noOfTimesSubmitButtonClickAndAnswer"></span>
                                    </div>
                                    <div> Count : <span class="lead fs-2" id="noOfTimesSubmitButtonClick"></span>
                                    </div>
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
        var noOfTimesSubmitButtonClick = 0;
        var noOfCorrectAnswers = [];
        start();

        function movieNightSubmit(movieName, moneyMadeByMovie) {
            var moneyMadeByMovieAccordingToUser = document.getElementById('moneyMadeByMovie').value;
            if (moneyMadeByMovieAccordingToUser != "") {

                if (noOfTimesSubmitButtonClick < 10) {
                    let resultBox = document.getElementById('noOfTimesSubmitButtonClickAndAnswer');
                    let countBox = document.getElementById('noOfTimesSubmitButtonClick');
                    let resultBoxMainDiv = document.getElementById('resultBoxMainDiv');
                    resultBoxMainDiv.style.display = "";
                    // ________________________________
                    moneyMadeByMovieAccordingToUser = "$" + numeral(moneyMadeByMovieAccordingToUser).value()
                        .toLocaleString();
                    var answer = 0;
                    if (moneyMadeByMovie == moneyMadeByMovieAccordingToUser) {
                        answer = 1;
                    } else {
                        answer = 0;
                    }

                    noOfCorrectAnswers.push(answer);
                    let totalCorrectAnswers = noOfCorrectAnswers.reduce((partialSum, a) => partialSum + a, 0);
                    resultBox.innerHTML = totalCorrectAnswers + "/" + (
                        (noOfTimesSubmitButtonClick + 1) * 1);
                    noOfTimesSubmitButtonClick++;
                    countBox.innerHTML = noOfTimesSubmitButtonClick;


                    $("#movieNightMainDiv").load(window.location.href + " #movieNightMainDiv");


                    if (noOfTimesSubmitButtonClick == 10) {
                        setTimeout(() => {
                            document.getElementById('moneyMadeByMovie').style.display = 'none';
                            document.getElementById('moneyMadeByMovie').value = '1234';
                            document.getElementById('SubmitButton').innerHTML = "Check Result"
                        }, "300")
                    }

                    // ________________________________

                } else if (noOfTimesSubmitButtonClick == 10) {
                    stop();
                    let totalTime = document.getElementById('stopwatch').innerHTML;
                    let totalCorrectAnswers = noOfCorrectAnswers.reduce((partialSum, a) => partialSum + a, 0);
                    let resultInPercentage = totalCorrectAnswers / 10;
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
                    'Error!',
                    "Please Enter the Money Made By Movie.",
                    'error'
                )
            }


        }

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
