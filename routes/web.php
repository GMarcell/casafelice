<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\bookingController;
use App\Http\Controllers\financeController;
use App\Http\Controllers\inventoryActionController;
use App\Http\Controllers\inventoryController;
use App\Http\Controllers\occupancyController;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\trafficController;
use App\Models\finance;

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
    return view('home');
});

Route::get('home', [pagesController::class, 'index'])->name('home');
Route::get('booking_detail', [pagesController::class, 'booking_detail'])->name('booking_detail');

Route::get('book_room', [bookingController::class, 'showBookingForm'])->name('book_room');
Route::post('book_room', [bookingController::class, 'bookingroom']);

Route::get('checkInForm/{id}', [bookingController::class, 'edit']);
Route::post('checkInForm/update/{id}', [bookingController::class, 'update']);
Route::delete('booking/delete/{id}', [bookingController::class, 'destroy']);

Route::get('occupancyList', [occupancyController::class, 'occupancyList'])->name('occupancyList');
Route::get('checkInFormEmpty', [occupancyController::class, 'showCheckInForm'])->name('showCheckInForm');
Route::post('checkIn', [occupancyController::class, 'checkIn']);
Route::delete('checkin/cancel/{id}', [occupancyController::class, 'delete']);

Route::get('trafficList', [trafficController::class, 'trafficList'])->name('trafficList');

Route::get('inventoryList', [inventoryController::class, 'inventoryList'])->name('inventoryList');

Route::get('inventoryActionList', [inventoryActionController::class, 'inventoryActionList'])->name('inventoryActionList');
Route::get('addInventoryAction', [inventoryActionController::class, 'showAddInventoryActionForm'])->name('addInventoryAction');
Route::post('addaction', [inventoryActionController::class, 'addaction']);

Route::get('bookkeeping', [financeController::class, 'bookkeeping'])->name('bookkeeping');

Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('bookingList', [bookingController::class, 'bookingList'])->name('bookingList');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
