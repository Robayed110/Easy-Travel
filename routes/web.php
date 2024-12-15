<?php

use App\Http\Controllers\AdminPanel;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\ScheduleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [CustomAuthController::class, 'login']);
Route::get('/registration', [CustomAuthController::class, 'registration']);
Route::post('/register-user',[CustomAuthController::class,'registerUser'])->name 
('register-user');
Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name ('login-user');
Route::get('/dashboard',[CustomAuthController::class,'dashboard']);
Route::get('/logout',[CustomAuthController::class,'logout']);
Auth::routes();

Route::get('/homepage',[CustomAuthController::class,'homepage']);
Route::get('/admin-panel',[CustomAuthController::class,'adminpanel']);
Route::get('/show-data',[ScheduleController::class,'showData']);
Route::get('/show-booked',[ScheduleController::class,'showBooked']);

Route::get('/add-bus',[ScheduleController::class,'addBus']);
Route::post('/store-data',[ScheduleController::class,'storeData']);
Route::get('/edit-data/{id}',[ScheduleController::class,'editData']);
Route::post('/update-data/{id}',[ScheduleController::class,'updateData']);
Route::get('/delete-data/{id}',[ScheduleController::class,'deleteData']);

Route::get('/show-user',[ScheduleController::class,'showUser']);
Route::get('/edit-user/{id}',[ScheduleController::class,'editUser']);
Route::post('/update-user/{id}',[ScheduleController::class,'updateUser']);
Route::get('/delete-user/{id}',[ScheduleController::class,'deleteUser']);


Route::get('/buy-ticket',[BookingController::class,'buyTicket']);
Route::post('/show-bus',[BookingController::class,'showBus']);
Route::get('/booking/{id}/{bookingDate}', [BookingController::class, 'book']);

Route::post('/save-selected-seats', [BookingController::class,'saveSelectedSeats']);

// Route::post('/process-seat-selection', 'BookingController@processSeatSelection')->name('processSeatSelection');

Route::post('/booking-process/{id}', [BookingController::class,'processBooking'])->name('processBooking');
Route::get('/confirmation/{id}', [BookingController::class, 'showConfirmation'])->name('confirmation');


// Route::get('/booking/confirmation', [BookingController::class,'confirmation']);


Route::get('/buy/{id}', [BookingController::class, 'seatConfirm'])->name('seatConfirm');

Route::post('/seats/select', [SeatController::class, 'selectSeat'])->name('seats.selectSeat');








Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



