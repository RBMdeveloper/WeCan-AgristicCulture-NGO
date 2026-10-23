<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\MemberController;

Route::prefix('admin')->name('admin.')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Guest Routes
    |--------------------------------------------------------------------------
    */

    Route::middleware('guest:admin')->group(function () {

        // Route::get('/login', [LoginController::class, 'showLoginForm'])
        //     ->name('login');
        Route::get('/login', [LoginController::class, 'showLoginForm'])
            ->name('login_form');

        Route::post('/login', [LoginController::class, 'login'])
            ->name('login.submit');
    });

    /*
    |--------------------------------------------------------------------------
    | Protected Routes
    |--------------------------------------------------------------------------
    */

    Route::middleware('auth:admin')->group(function () {

        /*
        |--------------------------------------------------------------------------
        | Dashboard
        |--------------------------------------------------------------------------
        */

        Route::get('/dashboard', [DashboardController::class, 'dashboardView'])
            ->name('dashboard');

        /*
        |--------------------------------------------------------------------------
        | Logout
        |--------------------------------------------------------------------------
        */

        Route::post('/logout', [LoginController::class, 'logout'])
            ->name('logout');

        /*
        |--------------------------------------------------------------------------
        | Change Password
        |--------------------------------------------------------------------------
        */

        Route::get('/change/password/form', [DashboardController::class, 'changePasswordForm'])
            ->name('change_password_form');

        Route::post('/change/password', [DashboardController::class, 'changePassword'])
            ->name('change_password');

        /*
        |--------------------------------------------------------------------------
        | Donations
        |--------------------------------------------------------------------------
        */

        Route::delete('/donations/{id}', [DashboardController::class, 'destroy'])
            ->name('donations.destroy');

        /*
        |--------------------------------------------------------------------------
        | Gallery
        |--------------------------------------------------------------------------
        */

        Route::get('/gallery', [GalleryController::class, 'index'])
            ->name('gallery.index');

        Route::post('/gallery/store', [GalleryController::class, 'store'])
            ->name('gallery.store');

        Route::delete('/gallery/delete/{id}', [GalleryController::class, 'destroy'])
            ->name('gallery.destroy');

        /*
        |--------------------------------------------------------------------------
        | Contact Messages
        |--------------------------------------------------------------------------
        */

        Route::get('/contact/messages', [ContactMessageController::class, 'index'])
            ->name('contact_messages.index');

        Route::delete('/contact/messages/delete/{id}', [ContactMessageController::class, 'destroy'])
            ->name('contact_messages.destroy');

        /*
        |--------------------------------------------------------------------------
        | Banners
        |--------------------------------------------------------------------------
        */

        Route::get('/banners', [BannerController::class, 'index'])
            ->name('banners.index');

        Route::post('/banners/store', [BannerController::class, 'store'])
            ->name('banners.store');

        Route::get('/banners/edit/{id}', [BannerController::class, 'edit'])
            ->name('banners.edit');

        Route::post('/banners/update/{id}', [BannerController::class, 'update'])
            ->name('banners.update');

        Route::delete('/banners/delete/{id}', [BannerController::class, 'destroy'])
            ->name('banners.destroy');

        Route::post('/banners/update-order', [BannerController::class, 'updateOrder'])
            ->name('banners.update_order');

        Route::get('/banners/change-status/{id}', [BannerController::class, 'changeStatus'])
            ->name('banners.change_status');

        /*
        |--------------------------------------------------------------------------
        | Members
        |--------------------------------------------------------------------------
        */

        Route::get('/members', [MemberController::class, 'index'])
            ->name('members.index');

        Route::post('/members/store', [MemberController::class, 'store'])
            ->name('members.store');

        Route::post('/members/update/{id}', [MemberController::class, 'update'])
            ->name('members.update');

        Route::delete('/members/delete/{id}', [MemberController::class, 'destroy'])
            ->name('members.destroy');

        Route::get('/members/change-status/{id}', [MemberController::class, 'changeStatus'])
            ->name('members.change_status');

        Route::post('/members/update-order', [MemberController::class, 'updateOrder'])
            ->name('members.update_order');
    });
});