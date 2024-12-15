<?php

namespace App\Http\Controllers;

use App\Models\Booked;
use App\Models\Schedule;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\User;


class ScheduleController extends Controller
{
    //
    public function showData(){
        // $showData = Schedule::all();
        $showData = Schedule::simplePaginate(5);


        return view('admin.show-data',compact('showData'));
    }
    public function showBooked(){
        // $showData = Schedule::all();
        $showData = Booked::simplePaginate(5);


        return view('admin.show-booked',compact('showData'));
    }
    public function addBus(){
        return view('admin.add-bus');
    }
    public function storeData(Request $request) {
        $rules =[
            'bus_code' =>'required',
            'bus_name' =>'required|max:30',
            'bus_type' =>'required',
            'dep_time' =>'required',
            'arv_time' =>'required',
            'pickup_address' =>'required',
            'dropoff_address' =>'required',
            'seat'=> 'required',
            'fare'=>'required',
        ];
        $cm =[
            'bus_name.required'=>'enter bus name',
            'bus_name.max'=>'bus name contains not more than 30 character'
        ];
        $this->validate($request,$rules,$cm);
        
        $schedule = new Schedule();
        
        $schedule->bus_code= $request->bus_code;
        $schedule->bus_name= $request->bus_name;
        $schedule->bus_type= $request->bus_type;
        $schedule->dep_time= $request->dep_time;
        $schedule->arv_time= $request->arv_time;
        $schedule->pickup_address= $request->pickup_address;
        $schedule->dropoff_address= $request->dropoff_address;
        $schedule->seat= $request->seat;
        $schedule->fare= $request->fare;
        $schedule->save();
        Session:: flash('msg','Data successfully added.');




        return redirect('/show-data');
    }
    public function editData($id=null) {

        $editData = Schedule::find($id);
        return view('admin.edit-data',compact('editData'));
    }
    
    public function updateData(Request $request,$id) {
        $rules =[
            'bus_code' =>'required',
            'bus_name' =>'required|max:30',
            'bus_type' =>'required',
            'dep_time' =>'required',
            'arv_time' =>'required',
            'pickup_address' =>'required',
            'dropoff_address' =>'required',
            'seat'=> 'required',
            'fare'=>'required',
        ];
        $cm =[
            'bus_name.required'=>'enter bus name',
            'bus_name.max'=>'bus name contains not more than 30 character'
        ];
        $this->validate($request,$rules,$cm);
        
        $schedule = Schedule::find($id);
        
        $schedule->bus_code= $request->bus_code;
        $schedule->bus_name= $request->bus_name;
        $schedule->bus_type= $request->bus_type;
        $schedule->dep_time= $request->dep_time;
        $schedule->arv_time= $request->arv_time;
        $schedule->pickup_address= $request->pickup_address;
        $schedule->dropoff_address= $request->dropoff_address;
        $schedule->seat= $request->seat;
        $schedule->fare= $request->fare;
        $schedule->save();
        Session:: flash('msg','Data successfully updated.');




        return redirect('/show-data');
    }

    public function deleteData($id=null) {
        $deleteData = Schedule::find($id);
        $deleteData->delete();
        Session:: flash('msg','Data successfully deleted.');

        return redirect('/show-data');

    }

    public function showUser(){
        $showUser = User::simplePaginate(5);
        

        return view('admin.show-user',compact('showUser'));
    }

    public function editUser($id=null) {

        $editUser = User::find($id);
        return view('admin.edit-user',compact('editUser'));
    }

    public function updateUser(Request $request,$id) {
        $rules =[
            'name'=>'required',
            'email'=>'required|email|unique:users',
        ];
       
        $this->validate($request,$rules);
        
        $user = User::find($id);
        $user->name= $request->name;
        $user->email= $request->email;
        
        $user->save();
        Session:: flash('msg','Data successfully updated.');




        return redirect('/show-user');
    }
    public function deleteUser($id=null) {
        $deleteUser = User::find($id);
        $deleteUser->delete();
        Session:: flash('msg','Data successfully deleted.');

        return redirect('/show-user');

    }

}
