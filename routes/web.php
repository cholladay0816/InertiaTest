<?php

use App\Http\Controllers\CommissionController;
use App\Http\Controllers\NotificationController;
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
    return Inertia\Inertia::render('Welcome');
});

Route::get('/tos', function () {
    return Inertia\Inertia::render('TOS');
})->name('tos');

Route::get('/privacy', function () {
    return Inertia\Inertia::render('Privacy');
})->name('privacy');

Route::get('/about', function () {
    return Inertia\Inertia::render('About');
})->name('about');



Route::middleware(['auth:sanctum', 'verified'])->group(function() {

    Route::get('/dashboard', function () {
        return Inertia\Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('/notifications', [NotificationController::class, 'list'])->name('notifications');
    Route::get('/commissions', [CommissionController::class, 'list'])->name('commissions');
    Route::get('/commissions/{commission}', [CommissionController::class, 'list'])->name('commissions.show');

    Route::put('/notifications/{notification}', [NotificationController::class, 'markRead']);
    Route::delete('/notifications/{notification}', [NotificationController::class, 'destroy']);

});
