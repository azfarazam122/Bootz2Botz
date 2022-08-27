<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChallengeResult extends Controller
{
    //

    public function quarterClose_Result_Fun(Request $req)
    {
        $PONumber_array = $req->array_1;
        $TransactionStatus_array = $req->array_2;
        // echo json_encode($req->newData[0]['PO_Number']);
        $challenge1 = DB::table('quarter_close')->get();
        // echo $challenge1;
        $result = 0;
        for ($x = 0; $x < count($req->array_1); $x++) {
            # code...
            $data = DB::table('quarter_close')->where('PO_Number', '=', $req->array_1[$x])->get();

            // $myData = $data[0]['Transaction_Status'];
            if ($req->array_2[$x] == $data[0]->Transaction_Status) {
                $result = $result + 1;
            }

            // echo json_encode($data[$i]->PO_Number);
            // $result = $result + 1;
        }
        echo $result;

    }
    public function invoiceProcessing(Request $req)
    {
        $result = 0;
        $data = DB::table('invoice_processing')->where('id', '=', $req->no_of_time_submit_btn_click)->get();
        $customerOnboarding_Data = json_decode($data);
        if ($customerOnboarding_Data[0]->invoice_number == $req->invoice_number) {
            $result++;
        }
        if ($customerOnboarding_Data[0]->invoice_date == $req->invoice_date) {
            $result++;
        }
        if ($customerOnboarding_Data[0]->invoice_total == $req->invoice_total) {
            $result++;
        }
        if ($customerOnboarding_Data[0]->quantity == $req->quantity_1) {
            $result++;
        }
        if ($customerOnboarding_Data[0]->description == $req->description_1) {
            $result++;
        }
        if ($customerOnboarding_Data[0]->total_price == $req->totalPrice_1) {
            $result++;
        }
        echo $result;

    }
    public function customerOnboarding_Result_Fun(Request $req)
    {
        $result = 0;
        $data = DB::table('customer_onboarding')->where('id', '=', $req->no_of_time_submit_btn_click)->get();
        $customerOnboarding_Data = json_decode($data);
        if ($customerOnboarding_Data[0]->customer_name == $req->customer_name) {
            $result++;
        }
        if ($customerOnboarding_Data[0]->customer_id == $req->customer_id) {
            $result++;
        }
        if ($customerOnboarding_Data[0]->primary_contact == $req->primary_contact) {
            $result++;
        }
        if ($customerOnboarding_Data[0]->street_address == $req->street_address) {
            $result++;
        }
        if ($customerOnboarding_Data[0]->city == $req->city) {
            $result++;
        }
        if ($customerOnboarding_Data[0]->state == $req->state) {
            $result++;
        }
        if ($customerOnboarding_Data[0]->zipcode == $req->zipcode) {
            $result++;
        }
        if ($customerOnboarding_Data[0]->email == $req->email) {
            $result++;
        }
        echo $result;

    }
    public function lunchOrdering(Request $req)
    {
        // echo count($req->items_array);
        $totalFoodMatch = 0;
        for ($i = 0; $i < count($req->items_array); $i++) {
            $data = DB::table('lunch_ordering')->where('favorite_food', '=', $req->items_array[$i])->get();
            if (count($data) > 0) {
                # code...
                $totalFoodMatch++;
            }
        }
        echo $totalFoodMatch;
        // $result = 0;
        // $data = DB::table('customer_onboarding')->where('id', '=', $req->no_of_time_submit_btn_click)->get();
        // $customerOnboarding_Data = json_decode($data);
        // if ($customerOnboarding_Data[0]->customer_name == $req->customer_name) {
        //     $result++;
        // }

        // echo $result;

    }
}