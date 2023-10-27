<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TourController;
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
    return view('welcome');
});
Route::get('/admin', function () {
    return view('welcomeadmin');
});

Route::get('/', [TourController::class, 'indexUser']);
Route::get('/detailtour/{id}', [TourController::class, 'showTour']);

Route::get('/book/manage', function(){
    
    //return view('customer.create');
});
Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::resource('customer', CustomerController::class);
    Route::resource('flight', FlightController::class);
    Route::resource('tour', TourController::class);
    Route::resource('schedule', ScheduleController::class);
    Route::resource('book', BookingController::class);
    Route::get('/booking/{id}', [BookingController::class, 'showSchedule']);
});

