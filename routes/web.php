<?php

use App\Http\Controllers\ChallengeResult;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('auth.login');
});
Route::view('/login', 'auth.login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['checkLogin']], function () {
    Route::view('/Challenge_1', 'challenges.quarter_close');
    Route::view('/Challenge_2', 'challenges.lunch_ordering');
    Route::view('/Challenge_3', 'challenges.invoice_accounts');
    Route::view('/Challenge_4', 'challenges.customer_onboarding');
    Route::view('/Challenge_5', 'challenges.rpa_challenge');
    Route::view('/Challenge_6', 'challenges.lunch_ordering_extreme');
    Route::view('/Challenge_7', 'challenges.movie_night');

    Route::view('/Bank', 'bank_system');

    // Challenges
    Route::post('/quarterCloseResult', [ChallengeResult::class, 'quarterClose_Result_Fun'])->name('quarterCloseResult');
    Route::post('/customerOnboardingResult', [ChallengeResult::class, 'customerOnboarding_Result_Fun'])->name('customerOnboardingResult');
    Route::post('/invoiceProcessingResult', [ChallengeResult::class, 'invoiceProcessing'])->name('invoiceProcessingResult');
    Route::post('/lunchOrderingResult', [ChallengeResult::class, 'lunchOrdering'])->name('lunchOrderingResult');
    Route::post('/rpaChallengeResult', [ChallengeResult::class, 'rpaChallenge_Result_Fun'])->name('rpaChallengeResult');
    Route::post('/lunchOrderingExtremeResult', [ChallengeResult::class, 'lunchOrderingExtreme'])->name('lunchOrderingExtremeResult');

    // Creating CSV with Random Data
    Route::post('/invoiceProcessingResult/generateCSV', [ChallengeResult::class, 'generateCSVWithRandomDataForInvoiceProcessing'])->name('generateCSVWithRandomDataForInvoiceProcessing');
    Route::post('/customerOnboardingResult/generateCSV', [ChallengeResult::class, 'generateCSVWithRandomDataForCustomerOnboarding'])->name('generateCSVWithRandomDataForCustomerOnboarding');
    Route::post('/rpaChallenge/generateCSV', [ChallengeResult::class, 'generateCSVWithRandomDataForRpaChallenge'])->name('generateCSVWithRandomDataForRpaChallenge');

});