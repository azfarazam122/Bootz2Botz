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

    // ________________________________________Generate CSV With Random Data For Invoice Processing__________________________
    public function generateCSVWithRandomDataForInvoiceProcessing(Request $req)
    {
        // echo 'Hello';

        $invoiceChallengeData = DB::table('invoice_processing')
            ->get()
            ->random(6);
        // echo json_encode($invoiceChallengeData[0]->id);
        $list = array(
            array("Invoice Number", "Invoice Date", "Invoice Total", "Quantity", "Description", "Total Price"),
            array($invoiceChallengeData[0]->invoice_number, $invoiceChallengeData[0]->invoice_date, $invoiceChallengeData[0]->invoice_total, $invoiceChallengeData[0]->quantity, $invoiceChallengeData[0]->description, $invoiceChallengeData[0]->total_price),
            array($invoiceChallengeData[1]->invoice_number, $invoiceChallengeData[1]->invoice_date, $invoiceChallengeData[1]->invoice_total, $invoiceChallengeData[1]->quantity, $invoiceChallengeData[1]->description, $invoiceChallengeData[1]->total_price),
            array($invoiceChallengeData[2]->invoice_number, $invoiceChallengeData[2]->invoice_date, $invoiceChallengeData[2]->invoice_total, $invoiceChallengeData[2]->quantity, $invoiceChallengeData[2]->description, $invoiceChallengeData[2]->total_price),
            array($invoiceChallengeData[3]->invoice_number, $invoiceChallengeData[3]->invoice_date, $invoiceChallengeData[3]->invoice_total, $invoiceChallengeData[3]->quantity, $invoiceChallengeData[3]->description, $invoiceChallengeData[3]->total_price),
            array($invoiceChallengeData[4]->invoice_number, $invoiceChallengeData[4]->invoice_date, $invoiceChallengeData[4]->invoice_total, $invoiceChallengeData[4]->quantity, $invoiceChallengeData[4]->description, $invoiceChallengeData[4]->total_price),
            array($invoiceChallengeData[5]->invoice_number, $invoiceChallengeData[5]->invoice_date, $invoiceChallengeData[5]->invoice_total, $invoiceChallengeData[5]->quantity, $invoiceChallengeData[5]->description, $invoiceChallengeData[5]->total_price),
        );

        $file = fopen("assets/RandomCSV/sample-invoices.csv", "w");

        foreach ($list as $line) {
            fputcsv($file, $line);
        }

        fclose($file);
    }
    // ________________________________________Generate CSV With Random Data For Invoice Processing__________________________

    // generateCSVWithRandomDataForCustomerOnboarding
    // ________________________________________Generate CSV With Random Data For Customer Onboarding__________________________
    public function generateCSVWithRandomDataForCustomerOnboarding(Request $req)
    {
        // echo 'Hello';

        $customerOnboardingData = DB::table('customer_onboarding')
            ->get()
            ->random(8);
        // echo json_encode($customerOnboardingData[0]->id);
        $list = array(
            array("Customer Name", "Customer ID", "Primary Contact", "Street Address", "City", "State", "Zipcode", "Email"),
            array($customerOnboardingData[0]->customer_name, $customerOnboardingData[0]->customer_id, $customerOnboardingData[0]->primary_contact, $customerOnboardingData[0]->street_address, $customerOnboardingData[0]->city, $customerOnboardingData[0]->state, $customerOnboardingData[0]->zipcode, $customerOnboardingData[0]->email),
            array($customerOnboardingData[1]->customer_name, $customerOnboardingData[1]->customer_id, $customerOnboardingData[1]->primary_contact, $customerOnboardingData[1]->street_address, $customerOnboardingData[1]->city, $customerOnboardingData[1]->state, $customerOnboardingData[1]->zipcode, $customerOnboardingData[1]->email),
            array($customerOnboardingData[2]->customer_name, $customerOnboardingData[2]->customer_id, $customerOnboardingData[2]->primary_contact, $customerOnboardingData[2]->street_address, $customerOnboardingData[2]->city, $customerOnboardingData[2]->state, $customerOnboardingData[2]->zipcode, $customerOnboardingData[2]->email),
            array($customerOnboardingData[3]->customer_name, $customerOnboardingData[3]->customer_id, $customerOnboardingData[3]->primary_contact, $customerOnboardingData[3]->street_address, $customerOnboardingData[3]->city, $customerOnboardingData[3]->state, $customerOnboardingData[3]->zipcode, $customerOnboardingData[3]->email),
            array($customerOnboardingData[4]->customer_name, $customerOnboardingData[4]->customer_id, $customerOnboardingData[4]->primary_contact, $customerOnboardingData[4]->street_address, $customerOnboardingData[4]->city, $customerOnboardingData[4]->state, $customerOnboardingData[4]->zipcode, $customerOnboardingData[4]->email),
            array($customerOnboardingData[5]->customer_name, $customerOnboardingData[5]->customer_id, $customerOnboardingData[5]->primary_contact, $customerOnboardingData[5]->street_address, $customerOnboardingData[5]->city, $customerOnboardingData[5]->state, $customerOnboardingData[5]->zipcode, $customerOnboardingData[5]->email),
            array($customerOnboardingData[6]->customer_name, $customerOnboardingData[6]->customer_id, $customerOnboardingData[6]->primary_contact, $customerOnboardingData[6]->street_address, $customerOnboardingData[6]->city, $customerOnboardingData[6]->state, $customerOnboardingData[6]->zipcode, $customerOnboardingData[6]->email),
            array($customerOnboardingData[7]->customer_name, $customerOnboardingData[7]->customer_id, $customerOnboardingData[7]->primary_contact, $customerOnboardingData[7]->street_address, $customerOnboardingData[7]->city, $customerOnboardingData[7]->state, $customerOnboardingData[7]->zipcode, $customerOnboardingData[7]->email),
        );

        $file = fopen("assets/RandomCSV/missing-customer.csv", "w");

        foreach ($list as $line) {
            fputcsv($file, $line);
        }

        fclose($file);
    }
    // ________________________________________Generate CSV With Random Data For Customer Onboarding__________________________

    public function invoiceProcessing(Request $req)
    {

        // Getting CSV FILE DATA
        $data = array();
        $file = fopen('assets/RandomCSV/sample-invoices.csv', 'r');
        while (($result = fgetcsv($file)) !== false) {
            $data[] = $result;
        }
        fclose($file);

        $result = 0;
        $invoiceProcessing_Data = $data[$req->no_of_time_submit_btn_click];
        if ($invoiceProcessing_Data[0] == $req->invoice_number) {
            $result++;
        }

        $invoiceProcessing_Data[1] = strtotime($invoiceProcessing_Data[1]);
        $invoiceProcessing_Data[1] = getDate($invoiceProcessing_Data[1]);
        $req->invoice_date = strtotime($req->invoice_date);
        $req->invoice_date = getDate($req->invoice_date);
        if ($invoiceProcessing_Data[1] == $req->invoice_date) {
            $result++;
        }
        if ($invoiceProcessing_Data[2] == $req->invoice_total) {
            $result++;
        }

        if ($invoiceProcessing_Data[3] == $req->quantity_1) {
            $result++;
        }

        if ($invoiceProcessing_Data[4] == $req->description_1) {
            $result++;
        }

        if ($invoiceProcessing_Data[5] == $req->totalPrice_1) {
            $result++;
        }
        echo $result;

    }
    public function customerOnboarding_Result_Fun(Request $req)
    {
        // Getting CSV FILE DATA
        $data = array();
        $file = fopen('assets/RandomCSV/missing-customer.csv', 'r');
        while (($result = fgetcsv($file)) !== false) {
            $data[] = $result;
        }
        fclose($file);

        $result = 0;
        $customerOnboarding_Data = $data[$req->no_of_time_submit_btn_click];
        if ($customerOnboarding_Data[0] == $req->customer_name) {
            $result++;
        }
        if ($customerOnboarding_Data[1] == $req->customer_id) {
            $result++;
        } else {
            echo $customerOnboarding_Data[1];
            echo $req->customer_id;
            echo "customer_id Not Matched";
        }
        if ($customerOnboarding_Data[2] == $req->primary_contact) {
            $result++;
        }
        if ($customerOnboarding_Data[3] == $req->street_address) {
            $result++;
        }
        if ($customerOnboarding_Data[4] == $req->city) {
            $result++;
        }
        if ($customerOnboarding_Data[5] == $req->state) {
            $result++;
        }
        if ($customerOnboarding_Data[6] == $req->zipcode) {
            $result++;
        }
        if ($customerOnboarding_Data[7] == $req->email) {
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