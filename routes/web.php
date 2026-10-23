<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ContactController;

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
Route::post('/contact/store', [ContactController::class, 'store'])
    ->name('contact.store');
Route::get('/' , [IndexController:: class , 'index'])->name('index');
Route::get('/about' , [IndexController:: class , 'about'])->name('about');
Route::get('/gallery' , [IndexController:: class , 'gallery'])->name('gallery');
Route::get('/contact' , [IndexController:: class , 'contact'])->name('contact');
Route::get('/services' , [IndexController:: class , 'service'])->name('service');
Route::get('/members', [IndexController::class, 'members'])
    ->name('members');

Route::get('/donate' , [IndexController:: class , 'donate'])->name('donate');
// Create Razorpay Order (Form POST)
Route::post('/donation/create-order', [DonationController::class, 'createOrder'])
    ->name('donation.create');

// Verify Payment Signature (Razorpay POST callback)
Route::post('/donation/verify', [DonationController::class, 'verifyPayment'])
    ->name('donation.verify');

// Mark Failed — modal dismissed / page closed / payment failed
Route::get('/donation/failed/{orderId}', [DonationController::class, 'markFailed'])
    ->name('donation.failed');

// Receipt Page (paid + failed both)
Route::get('/donation/receipt/{orderId}', [DonationController::class, 'receipt'])
    ->name('donation.receipt');


Route::get('/cancellation_refund' , [IndexController::class  , 'cancellation_refund'])->name('cancellation_refund');
Route::get('/disclaimer' , [IndexController:: class , 'disclaimer'])->name('disclaimer');
Route::get('/privacy_policy' , [IndexController:: class , 'privacy_policy'])->name('privacy_policy');
Route::get('/shipping' , [IndexController:: class , 'shipping'])->name('shipping');
Route::get('/terms_condition' , [IndexController:: class , 'terms_condition'])->name('terms_condition');




require __DIR__.'/admin.php';