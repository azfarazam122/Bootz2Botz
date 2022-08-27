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
    Route::view('/Bank', 'bank_system');

    // Challenges
    Route::post('/quarterCloseResult', [ChallengeResult::class, 'quarterClose_Result_Fun'])->name('quarterCloseResult');
    Route::post('/customerOnboardingResult', [ChallengeResult::class, 'customerOnboarding_Result_Fun'])->name('customerOnboardingResult');
    Route::post('/invoiceProcessingResult', [ChallengeResult::class, 'invoiceProcessing'])->name('invoiceProcessingResult');
    Route::post('/lunchOrderingResult', [ChallengeResult::class, 'lunchOrdering'])->name('lunchOrderingResult');

});