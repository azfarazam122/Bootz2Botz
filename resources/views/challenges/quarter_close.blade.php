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
                            style="background: url(images/quarterClose.jpg); position: relative; background-size: cover; background-repeat: no-repeat; height: 90vh;">

                        </div>

                        <div class="blackline">
                            <div class="hero-text">
                                <h1 style="font-size: 3.7rem;">End of Quarter 
 - <span style="color: #f79c51"> Review
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
                                You’ve been designated as the one person that can make an improvement in the review process by automating a function of our review. Check for confirmed matches. Where there is a match, mark it as “verified.” If there is no match, label it as “unverified” so that the team can look into the line item a little deeper. Saving this many man hours would make any parent proud! 

                                    <br>
                                    
                                    <br> <br>
                                <p class="my-0"> <b> Kado BankUsername:</b> Jeremy@gmail.com </p>
                                <p> <b> Kado Bank Password:</b> Jeremy1234! </p>
                                <a style="text-decoration: none" target="blank" href="Bank" class="purpleButton">Kado
                                    Bank

                                    Login</a>

                                </p>
                            </div>

                            @php
                                $challenge1 = DB::table('quarter_close')
                                    ->get()
                                    ->random(12);
                            @endphp

                            @for ($i = 0; $i < count($challenge1); $i++)
                                {{-- {{ $challenge1[$i]->PO_Number }} --}}
                                <div class="transactionBox mt-5">
                                    <div class="headerBlack">
                                        <h3> Transaction {{ $i + 1 }}</h3>
                                    </div>

                                    <div class="bodyTransaction">
                                        <div class="row my-4">
                                            <div class="col-lg-3">
                                                <label for="">
                                                    PO Number
                                                </label> <br>
                                                <input type="text" class="form-control PO_NumberValues"
                                                    style="background-color: #dbd9d9;" readonly
                                                    value="{{ $challenge1[$i]->PO_Number }}" name="" id="po_Number">
                                            </div>

                                            <div class="col-lg-3">
                                                <label for="">
                                                    Purchase Type
                                                </label> <br>
                                                <input type="text" class="form-control"
                                                    style="background-color: #dbd9d9;" readonly
                                                    value="{{ $challenge1[$i]->Purchase_Type }}" name=""
                                                    id="purchase_type">
                                            </div>

                                            <div class="col-lg-3">
                                                <label for="">
                                                    Supplier ID
                                                </label> <br>
                                                <input type="text" class="form-control"
                                                    style="background-color: #dbd9d9;" readonly
                                                    value="{{ $challenge1[$i]->Supplier_ID }}" name=""
                                                    id="supplier_id">
                                            </div>

                                            <div class="col-lg-3">
                                                <label for="">
                                                    Supplier Name
                                                </label> <br>
                                                <input type="text" class="form-control"
                                                    style="background-color: #dbd9d9;" readonly
                                                    value="{{ $challenge1[$i]->Supplier_Name }}" name=""
                                                    id="supplier_name">
                                            </div>
                                        </div>

                                        <div class="row my-4">
                                            <div class="col">
                                                <label for="">
                                                    Payment Due Date
                                                </label> <br>
                                                <input type="text" class="form-control"
                                                    value="{{ $challenge1[$i]->Payment_Due_Date }}" name=""
                                                    id="payment_due_date">
                                            </div>

                                            <div class="col">
                                                <label for="">
                                                    Payment Account
                                                </label> <br>
                                                <input type="text" class="form-control"
                                                    value="{{ $challenge1[$i]->Payment_Account }}" name=""
                                                    id="payment_account">
                                            </div>

                                            <div class="col">
                                                <label for="">
                                                    Payment Type
                                                </label> <br>
                                                <input type="text" class="form-control"
                                                    value="{{ $challenge1[$i]->Payment_Type }}" name=""
                                                    id="payment_type">
                                            </div>

                                            <div class="col">
                                                <label for="">
                                                    Payment Amount
                                                </label> <br>
                                                <input type="text" class="form-control"
                                                    value="{{ $challenge1[$i]->Payment_Amount }}" name=""
                                                    id="payment_amount">
                                            </div>
                                            <div class="col">
                                                <label for="">
                                                    Transaction Status
                                                </label> <br>
                                                <select style="height:36px; width:100%;"
                                                    class="form-control transactionStatusSelectBoxes" name=""
                                                    id="status">
                                                    <option value="Status">Status</option>
                                                    <option selected value="Verified">Verified</option>
                                                    <option value="Not Verified">Not Verified</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            @endfor

                            <div>
                                <a onclick="challenge_1_CalculateResult()"
                                    class="btn btn-dark btn-lg text-decoration-none col-md-3 fs-4">Submit</a>
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
        start();

        function challenge_1_CalculateResult() {
            var PONumber_array = [];
            var TransactionStatus_array = [];
            // document.getElementsByClassName('PO_NumberValues')[0].value
            for (let index = 0; index < document.getElementsByClassName('PO_NumberValues').length; index++) {
                PONumber_array.push(document.getElementsByClassName('PO_NumberValues')[index].value);
                TransactionStatus_array.push(document.getElementsByClassName('transactionStatusSelectBoxes')[index].value);

            }
            this.axios.post("{{ route('quarterCloseResult') }}", {
                    array_1: PONumber_array,
                    array_2: TransactionStatus_array,
                })
                .then(function(response) {
                    stop()

                    let totalTime = document.getElementById('stopwatch').innerHTML;
                    let resultInPercentage = response.data / 12;
                    resultInPercentage = resultInPercentage * 100;
                    resultInPercentage = resultInPercentage.toFixed(0);
                    if (response.data < 6) {
                        Swal.fire(
                            'Result : ' + resultInPercentage + '% Accuracy , <br>  Total Time : ' +
                            totalTime + '',
                            "Try Again. It looks like some fields were filled incorrectly.",
                            'success'
                        )
                        // Swal.fire({
                        //     icon: 'error',
                        //     title: 'Oops...',
                        //     text: 'Something went wrong!',
                        //     footer: '<a href="">Why do I have this issue?</a>'
                        // })
                    } else if (response.data >= 6) {
                        Swal.fire(
                            'Result : ' + resultInPercentage + '% Accuracy , <br>  Total Time : ' +
                            totalTime + '',
                            "Well Done. It looks like more than half of the fields were filled correctly.",
                            'success'
                        )
                    } else if (response.data == 12) {
                        Swal.fire(
                            'Result : ' + resultInPercentage + '% Accuracy , <br>  Total Time : ' +
                            totalTime + '',
                            "Excellent. It looks like All fields were filled correctly.",
                            'success'
                        )
                    }

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
