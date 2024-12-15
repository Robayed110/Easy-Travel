<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Schedule;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class CustomAuthController extends Controller
{
    //


    public function homepage(){
        $data= array();
        if(Session::has('loginId')){
            $data= User::where('id','=',Session::get('loginId'))->first();
        }
        return view("homepage");
    }
    public function login(){
        return view("auth.login");
    }
    public function registration(){
        return view("auth.registration");
    }
    public function adminpanel(){
        $showData = Schedule::simplePaginate(5);
        $showUser = User::simplePaginate(5);

        return view("admin.admin-panel",compact('showUser','showData'));
    }
    public function registerUser(Request $request)  {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:12',
            'user_type'=>'required'
        ]); 
        $user =new User();
        $user->name =$request->name;
        $user->email =$request->email;
        $user->password = Hash::make($request->password);
        $user->user_type=$request->user_type;
        $res = $user->save();
        if($res){
            return back()->with('success','You have registered successfully');

        }
        else{
            return back()->with('fail','something went wrong');
        }

    }
    public function loginUser(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12',
            
        ]); 

        $user = User::where('email','=',$request->email)->first();

        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginId',$user->id);
                if($user->user_type=="user")
                return redirect('homepage');
                else
                return redirect('admin-panel');
                
            }
            else{
                return back()->with('fail','password not matches.');
            }
            
        }
        else{
            return back()->with('fail','this email is not registered.');
            
        }


    }
    public function dashboard(){
        $data= array();
        if(Session::has('loginId')){
            $data= User::where('id','=',Session::get('loginId'))->first();
        }
        return view('dashboard',compact('data'));
    }

    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }

}
