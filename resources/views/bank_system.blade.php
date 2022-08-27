@extends('layouts.app')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css">
@section('content')
    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card ">
                    {{-- ____________________________________________ --}}
                    <table class="m-5 table table-striped" id="challenge1List">
                        <thead>
                            <tr>
                                <th>PO Number</th>
                                <th>Purchase Type</th>
                                <th>Supplier ID</th>
                                <th>Payment Due Date</th>
                                <th>Payment Account</th>
                                <th>Payment Type</th>
                                <th>Transaction Status</th>
                                <th>Payment Amount</th>
                                <th>Supplier Name</th>
                            </tr>
                        </thead>
                        <tbody id="challenge1List_Body">
                            @php
                                $challenge1_List = DB::table('quarter_close')->get();
                            @endphp

                            @for ($i = 0; $i < count($challenge1_List); $i++)
                                <tr>
                                    <th>{{ $challenge1_List[$i]->PO_Number }}</th>
                                    <th>{{ $challenge1_List[$i]->Purchase_Type }}</th>
                                    <th>{{ $challenge1_List[$i]->Supplier_ID }}</th>
                                    <th>{{ $challenge1_List[$i]->Payment_Due_Date }}</th>
                                    <th>{{ $challenge1_List[$i]->Payment_Account }}</th>
                                    <th>{{ $challenge1_List[$i]->Payment_Type }}</th>
                                    <th>{{ $challenge1_List[$i]->Transaction_Status }}</th>
                                    <th>{{ $challenge1_List[$i]->Payment_Amount }}</th>
                                    <th>{{ $challenge1_List[$i]->Supplier_Name }}</th>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                    {{-- ____________________________________________ --}}
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#challenge1List').DataTable();
        });
    </script>
@endsection
