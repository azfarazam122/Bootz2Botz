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
                            style="background: url(images/pexels-kuncheek-210990.jpg); position: relative; background-size: cover; background-repeat: no-repeat; height: 90vh;">

                        </div>

                        <div class="blackline">
                            <div class="hero-text">
                                <h1 style="font-size: 3.7rem;">Bootz2Botz - <span style="color: #f79c51"> Invoice Entry
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

                                <p class="lead">
                                    Invoices received from various company vendors must be entered into the Integrated
                                    Invoicing Solutions accounting app. Download the zip of the invoices below for
                                    processing. Add each invoice's details to the form below, pressing submit between each
                                    entry. Once all invoices have been entered, the challenge is complete.






                                    <br> <br>
                                    <a style="text-decoration: none" href="{{ asset('images/Simple Invoices.csv') }}"
                                        download class="purpleButton">Download
                                        CSV</a>

                                </p>
                            </div>


                            <div class="transactionBox mt-5">
                                <div class="headerBlack">
                                    <h3>Invoice Processing

                                        </h2>
                                        <p class="lead">Add invoice details below for proper accounting and reporting.
                                            Invoices are paid
                                            upon invoice approval

                                        </p>
                                </div>

                                <div class="bodyTransaction pb-5">

                                    <h3>Invoice Processing

                                        </h2>
                                        <div class="row my-4">


                                            <div class="col-lg-6 mt-3">
                                                <label for="">
                                                    Invoice Number
                                                </label> <br>
                                                <input type="text" class="form-control" name=""
                                                    style="width:100%;" id="invoice_number">
                                            </div>
                                            <div class="col-lg-6 mt-3">
                                                <label for="">
                                                    Invoice Date
                                                </label> <br>
                                                <input type="text" class="form-control" name=""
                                                    style="width:100%;" id="invoice_date">
                                            </div>

                                        </div>

                                        <div class="row my-4">


                                            <div class="col-lg-12 ">
                                                <label for="">
                                                    Invoice total
                                                </label> <br>
                                                <input type="text" class="form-control" name=""
                                                    style="width:100%;" id="invoice_total">
                                            </div>


                                        </div>
                                        <div id="totalListOfAllTheItems">
                                            <div id="addAndDeleteItemFromList_1" class="row my-4">
                                                <div class="col-lg-4 ">
                                                    <label for="">
                                                        Quantity
                                                    </label> <br>
                                                    <input type="text" class="form-control quantity" name=""
                                                        style="width:100%;" id="quantity_1">
                                                </div>
                                                <div class="col-lg-4 ">
                                                    <label for="">
                                                        Description
                                                    </label> <br>
                                                    <input type="text" class="form-control description" name=""
                                                        style="width:100%;" id="description_1">
                                                </div>
                                                <div class="col-lg-4 ">
                                                    <label for="">
                                                        Total Price
                                                    </label> <br>
                                                    <input type="text" class="form-control totalPrice" name=""
                                                        style="width:100%;" id="totalPrice_1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-lg-6">
                                                <a style="text-decoration: none;" onclick="addItemInTheList()"
                                                    class=" btn btn-success col-md-3 text-center "><i
                                                        class="fa-solid fa-plus me-2"></i>Add
                                                    Item</a>
                                            </div>

                                            <div class="col-lg-6 p-0 text-end">
                                                <a style="text-decoration: none;" onclick="resetListItems()"
                                                    class="btn btn-dark  col-md-3 me-3  text-center"><i
                                                        class="fa-solid fa-arrow-rotate-right me-2"></i>Reset
                                                    List</a>
                                            </div>
                                        </div>


                                        <div class="row py-4">

                                            <h3>File Upload

                                                </h2>

                                                <p>
                                                    Each invoice detail must also be submitted with the invoice file
                                                    itself for tax purposes. Please select the accompying invoice
                                                    image
                                                    as PDF, TIF/TIFF, JPEG/JPG or PNG.


                                                </p>
                                                <input type="file" class="form-control w-50 ms-2" id="myFile"
                                                    name="filename">


                                        </div>


                                        <div class="row">


                                            <div class="col-lg-12">
                                                <h2> Submit Invoice
                                                </h2>
                                                <p>
                                                    By submitting the invoice above, I acknowledge that the invoice details
                                                    are true to the best of my knowledge. Once the invoice is submitted, it
                                                    will go through an approval process before payment is submitted. For
                                                    immediate payment or questions, please contact the Accounts Payable team
                                                    at AP_Processing@FakeCompany.com
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
                                        onclick="invoiceProcessingSubmit()"
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
        function addItemInTheList() {
            var mainList = document.getElementById('totalListOfAllTheItems');
            indexOfList = mainList.children.length + 1;
            // Main Div
            let mainDiv = document.createElement('div');
            mainDiv.id = "addAndDeleteItemFromList_" + indexOfList;
            mainDiv.classList = "row my-4";

            // Sub Div 1
            let subDiv_1 = document.createElement('div');
            subDiv_1.classList = "col-lg-4";

            // Label 1
            let sublabel_1 = document.createElement('label');
            sublabel_1.setAttribute("for", "quantity" + indexOfList);
            sublabel_1.innerHTML = "Quantity";
            subDiv_1.appendChild(sublabel_1);
            // Input 2
            let subinput_1 = document.createElement('input');
            subinput_1.type = "text";
            subinput_1.classList = "form-control quantity";
            subinput_1.id = "quantity" + indexOfList;
            subinput_1.style.width = "100%";
            subDiv_1.appendChild(subinput_1);
            mainDiv.appendChild(subDiv_1);

            // Sub Div 2
            let subDiv_2 = document.createElement('div');
            subDiv_2.classList = "col-lg-4";

            // Label 2
            let sublabel_2 = document.createElement('label');
            sublabel_2.setAttribute("for", "description" + indexOfList);
            sublabel_2.innerHTML = "Description";
            subDiv_2.appendChild(sublabel_2);
            // Input 2
            let subinput_2 = document.createElement('input');
            subinput_2.type = "text";
            subinput_2.classList = "form-control description";
            subinput_2.id = "description" + indexOfList;
            subinput_2.style.width = "100%";
            subDiv_2.appendChild(subinput_2);
            mainDiv.appendChild(subDiv_2);

            // Sub Div 3
            let subDiv_3 = document.createElement('div');
            subDiv_3.classList = "col-lg-4";

            // Label 3
            let sublabel_3 = document.createElement('label');
            sublabel_3.setAttribute("for", "totalPrice" + indexOfList);
            sublabel_3.innerHTML = "Description";
            subDiv_3.appendChild(sublabel_3);
            // Input 3
            let subinput_3 = document.createElement('input');
            subinput_3.type = "text";
            subinput_3.classList = "form-control totalPrice";
            subinput_3.id = "totalPrice" + indexOfList;
            subinput_3.style.width = "100%";
            subDiv_3.appendChild(subinput_3);
            mainDiv.appendChild(subDiv_3);


            mainList.appendChild(mainDiv);

        }

        function resetListItems() {
            var mainList = document.getElementById('totalListOfAllTheItems');
            lengthOfList = mainList.children.length;
            for (let index = lengthOfList - 1; index > 0; index--) {
                mainList.children[index].remove()
            }
        }
        var noOfTimesSubmitButtonClick = 0;
        var noOfCorrectAnswers = [];
        start()

        function invoiceProcessingSubmit() {
            if (noOfTimesSubmitButtonClick < 6) {
                let resultBox = document.getElementById('noOfTimesSubmitButtonClickAndAnswer');
                let resultBoxMainDiv = document.getElementById('resultBoxMainDiv');
                resultBoxMainDiv.style.display = "";
                // // ________________________________
                this.axios.post("{{ route('invoiceProcessingResult') }}", {
                        no_of_time_submit_btn_click: (noOfTimesSubmitButtonClick + 1),
                        invoice_number: document.getElementById('invoice_number').value,
                        invoice_date: document.getElementById('invoice_date').value,
                        invoice_total: document.getElementById('invoice_total').value,
                        quantity_1: document.getElementById('quantity_1').value,
                        description_1: document.getElementById('description_1').value,
                        totalPrice_1: document.getElementById('totalPrice_1').value,
                    })
                    .then(function(response) {
                        noOfCorrectAnswers.push(numeral(response.data).value());
                        let totalCorrectAnswers = noOfCorrectAnswers.reduce((partialSum, a) => partialSum + a, 0);
                        noOfTimesSubmitButtonClick++;
                        resultBox.innerHTML = totalCorrectAnswers + "/" + (noOfTimesSubmitButtonClick * 6);
                        if (noOfTimesSubmitButtonClick == 6) {
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

            } else if (noOfTimesSubmitButtonClick == 6) {
                stop();
                let totalTime = document.getElementById('stopwatch').innerHTML;


                let totalCorrectAnswers = noOfCorrectAnswers.reduce((partialSum, a) => partialSum + a, 0);
                let resultInPercentage = totalCorrectAnswers / 36;
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
