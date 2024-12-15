<?php

namespace App\Http\Controllers;
use App\Models\Booked;
use App\Models\Schedule;


use Illuminate\Http\Request;
use App\Models\Seat;

class SeatController extends Controller
{
    // public function index()
    // {

    //     $availableSeats = Seat::where('status', 'available')->pluck('seat_number')->toArray();
    //     $soldSeats = Seat::where('status', 'sold')->pluck('seat_number')->toArray();
    //     $selectedSeats = session()->get('selectedSeats', []);

    //     return view('seats.index', compact('availableSeats', 'soldSeats', 'selectedSeats'));
    // }

    public function seatConfirm(Request $request,$id=null)
    {

        $showData = Schedule::find($id);
        $loginiId = $request->session()->get('loginId');
        $seat = $request->session()->get('selectedSeats');
        $bookingDate= $request->session()->get('bookingDate');

        $booked = new Booked();

        $booked->loginiId= $loginiId;
        $booked->seat_number=$seat;
        $booked->bus_code=$showData->bus_code;
        $booked->booking_date=$bookingDate;
        $booked->save();

        return view("buy");


        

        

        // Check if the seat is available
        // $seat = Seat::where('seat_number', $seatNumber)->first();
        // if ($seat && $seat->status === 'available') {
        //     // Update seat status to 'selected'
        //     $seat->status = 'selected';
        //     $seat->save();

        //     // Add the seat to the selected seats in the session
        //     $selectedSeats = session()->get('selectedSeats', []);
        //     $selectedSeats[] = $seatNumber;
        //     session()->put('selectedSeats', $selectedSeats);
        // }

        
    }
}
