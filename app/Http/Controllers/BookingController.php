<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\User;
use App\Models\Seat;
use App\Models\Booked;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BookingController extends Controller
{
    public function buyTicket(){
        $pickupAddress = ".";
        $dropoffAddress = ".";
        $showData = Schedule::where('pickup_address', 'LIKE', "%$pickupAddress%")
        ->where('dropoff_address', 'LIKE', "%$dropoffAddress%")
        ->get();

        return view('buy-ticket', compact('showData'));
    }

    public function showBus(Request $request){
        $pickupAddress = $request->from;
        $dropoffAddress = $request->to;
        $bookingDate = $request->journydate;
        if($dropoffAddress==null) $dropoffAddress=".";
        if($pickupAddress==null) $pickupAddress=".";

        $request->session()->put('bookingDate',$bookingDate);
        // $pickupAddress = $request->input('pickup_address');
        // $dropoffAddress = $request->input('dropoff_address');
        $showData = Schedule::where('pickup_address', 'LIKE', "%$pickupAddress%")
        ->where('dropoff_address', 'LIKE', "%$dropoffAddress%")
        ->get();

        return view('buy-ticket', compact('showData','bookingDate'));
    }

    public function book($id=null,$bookingDate){
         $showData = Schedule::find($id);
         
        //  $seats = ['A1', 'A2', 'A3', 'B1', 'B2', 'B3', 'C1', 'C2', 'C3', 'D1', 'D2', 'D3'];
        //  $seats = Seat::where('status', 'available')->pluck('seat_number')->toArray();
        $seats = Seat::where('status', 'available')->where('booking_date','=',$bookingDate)->where('bus_code','LIKE',"%$showData->bus_code%")->pluck('seat_number')->toArray();
       
        //  $seats = Seat::where('status','=',"available");

         if(Session::has('loginId')){
            $data= User::where('id','=',Session::get('loginId'))->first();
        }
          return view('booking',compact('showData','seats'));
        
    }
   
    // public function processSeatSelection(Request $request)
    // {
    //     // Retrieve the selected seat list from the request
    //     $selectedSeats = $request->input('selectedSeats');
    
    //     // Store the selected seat list in a session variable
    //     session()->put('selectedSeats', $selectedSeats);
    
    //     // Redirect to another page or perform further actions
    //     return redirect()->route('confirmation');
    // }
    
//     public function showConfirmation($id=null)
// {
    
//     // Retrieve the selected seat list from the session variable
//     $selectedSeats[] = session()->get('selectedSeats', []);

//     // Count the number of selected seats
//     $selectedSeatCount = count($selectedSeats);

//     // Pass the selected seat list and count to the view
//     return view('confirmation', compact('selectedSeats', 'selectedSeatCount'));
// }


    public function processBooking(Request $request, $id=null)
    {
        $showData = Schedule::find($id);
        $selectedSeats[] = $request->input('selectedSeats');

        // // Store the selected seat list in a session variable
        session()->put('selectedSeats', $selectedSeats);

        // // Redirect to the confirmation page
        // // return redirect()->route('confirmation/{id}');
        // $selectedSeats[] = session()->get('selectedSeats', []);

        // Count the number of selected seats
        $selectedSeatCount = count($selectedSeats);
    
        // Pass the selected seat list and count to the view
        return view('confirmation', compact('selectedSeats', 'selectedSeatCount','showData'));
    }

    // public function showConfirmation()
    // {
    //     // Retrieve the selected seat list from the session variable
    //     $selectedSeats = session()->get('selectedSeats', []);

    //     // Count the number of selected seats
    //     $selectedSeatCount = count($selectedSeats);

    //     // Pass the selected seat list and count to the view
    //     return view('confirmation', compact('selectedSeats', 'selectedSeatCount'));
    // }
    public function seatConfirm(Request $request,$id=null)
    {

        $showData = Schedule::find($id);
        $loginiId = $request->session()->get('loginId');
        $seat = $request->session()->get('selectedSeats');
        $bookingDate= $request->session()->get('bookingDate');
        $seat1 = Seat::find($id);
        $seat1->status="sold";
        $seat1->save();
        $booked = new Booked();
        

        $booked->loginiId= $loginiId;
        $booked->seat_number = implode(',', $seat);
        $booked->bus_code=$showData->bus_code;
        $booked->booking_date=$bookingDate;
        $booked->save();




        // return $showData->fare;
        return view('buy',compact('showData'));
    }

}
