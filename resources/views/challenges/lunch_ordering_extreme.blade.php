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
                                <h1 style="font-size: 3.7rem;">Grocery Store
                                    - <span style="color: #f79c51"> Extreme Version
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
                                <h2>Shopping List
                                </h2>
                                <p>
                                    Everyone’s got different food they want from the store. They have entered their choices
                                    into a spreadsheet. Download their list and be sure their food gets added to the
                                    order……or they could get angry and leave you out of the next round.




                                    <br> <br>
                                    {{-- <a style="text-decoration: none" href="{{ asset('images/Lunch Order List.xlsx') }}"
                                        download='Favourite Food.csv' class="purpleButton">Download
                                        Favourite
                                        Food Spreadsheet</a> --}}

                                    <a style="text-decoration: none" id="linkForCSV_fileDownloadForLunchOrderingExtreme"
                                        href="{{ asset('images/Lunch Order Extreme List.xlsx') }}"
                                        download='Lunch Order Extreme List.xlsx' class="purpleButton ">
                                        Download Favourite Food Spreadsheet
                                    </a>

                                </p>
                            </div>


                            <div class="transactionBox mt-5">
                                <div class="headerBlack">
                                    <h3> Shopping List
                                        </h2>
                                </div>

                                <div class="bodyTransaction pb-5">
                                    <div class="row my-4">

                                        <div id="totalListOfAllTheItems">
                                            <div class="col-lg-12" id="addAndDeleteItemFromList_1">
                                                <label class="lead mb-1" for="itemName_1">
                                                    Favourite Food
                                                </label> <br>
                                                <input type="text" class="form-control items" name=""
                                                    style="width:100%;" id="itemName_1">
                                            </div>
                                            <div class="col-lg-12" style="display: none" id="addAndDeleteItemFromList_2">
                                                <label class="lead mb-1 mt-2" for="itemName_2">
                                                    Family Member Name
                                                </label> <br>
                                                <input type="text" class="form-control items" name=""
                                                    style="width:100%;" id="itemName_2">
                                            </div>
                                            <div class="col-lg-12" style="display: none" id="addAndDeleteItemFromList_3">
                                                <label class="lead mb-1 mt-2" for="itemName_3">
                                                    Quantity
                                                </label> <br>
                                                <input type="number" class="form-control items" name=""
                                                    style="width:100%;" id="itemName_3">
                                            </div>
                                            <div class="col-lg-12" style="display: none" id="addAndDeleteItemFromList_4">
                                                <label class="lead mb-1 mt-2" for="itemName_4">
                                                    Price Per Item ($)
                                                </label> <br>
                                                <input type="number" class="form-control items" name=""
                                                    style="width:100%;" id="itemName_4">
                                            </div>
                                            <div class="col-lg-12" style="display: none" id="addAndDeleteItemFromList_5">
                                                <label class="lead mb-1 mt-2" for="itemName_5">
                                                    Total Price ($)
                                                </label> <br>
                                                <input type="number" class="form-control items" name=""
                                                    style="width:100%;" id="itemName_5">
                                            </div>
                                        </div>


                                    </div>


                                    <div class="row">


                                        <div class="col-lg-12">
                                            <h2> Send My Order </h2>
                                            <p>
                                                After you make sure that everyone’s favorites are entered, make sure the bot
                                                clicks on the submit button and you will find out how you did!



                                                <br>
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
                            <div class="row col-md-6">
                                <div class="col-md-6 text-start">
                                    <a style="text-decoration: none" id="SubmitButton"
                                        onclick="lunchOrderingExtremeSubmit()"
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
        var noOfTimesSubmitButtonClick = 0;
        var noOfCorrectAnswers = [];
        start();

        function lunchOrderingExtremeSubmit() {

            if (noOfTimesSubmitButtonClick < 25) {
                if (noOfTimesSubmitButtonClick == 4) {
                    document.getElementById('addAndDeleteItemFromList_2').style.display = "";
                }
                if (noOfTimesSubmitButtonClick == 9) {
                    document.getElementById('addAndDeleteItemFromList_3').style.display = "";
                }
                if (noOfTimesSubmitButtonClick == 14) {
                    document.getElementById('addAndDeleteItemFromList_4').style.display = "";
                }
                if (noOfTimesSubmitButtonClick == 19) {
                    document.getElementById('addAndDeleteItemFromList_5').style.display = "";
                }
                let resultBox = document.getElementById('noOfTimesSubmitButtonClickAndAnswer');
                let countBox = document.getElementById('noOfTimesSubmitButtonClick');
                let resultBoxMainDiv = document.getElementById('resultBoxMainDiv');
                resultBoxMainDiv.style.display = "";
                // ________________________________
                this.axios.post("{{ route('lunchOrderingExtremeResult') }}", {
                        no_of_time_submit_btn_click: (noOfTimesSubmitButtonClick + 1),
                        favourite_food: document.getElementById('itemName_1').value,
                        family_member_name: document.getElementById('itemName_2').value,
                        quantity: document.getElementById('itemName_3').value,
                        price_per_item: "$" + document.getElementById('itemName_4').value.toString(),
                        total_price: "$" + document.getElementById('itemName_5').value.toString(),
                    })
                    .then(function(response) {
                        noOfCorrectAnswers.push(numeral(response.data).value());
                        let totalCorrectAnswers = noOfCorrectAnswers.reduce((partialSum, a) => partialSum + a, 0);
                        resultBox.innerHTML = totalCorrectAnswers + "/" + (
                            (noOfTimesSubmitButtonClick + 1) * 1);
                        noOfTimesSubmitButtonClick++;
                        countBox.innerHTML = noOfTimesSubmitButtonClick;
                        if (noOfTimesSubmitButtonClick == 25) {
                            document.getElementById('SubmitButton').innerHTML = "Check Result"
                        }

                    })
                    .catch(function(error) {
                        console.log(error.response);
                    });
                // ________________________________

            } else if (noOfTimesSubmitButtonClick == 25) {
                stop();
                let totalTime = document.getElementById('stopwatch').innerHTML;
                let totalCorrectAnswers = noOfCorrectAnswers.reduce((partialSum, a) => partialSum + a, 0);
                let resultInPercentage = totalCorrectAnswers / 25;
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
