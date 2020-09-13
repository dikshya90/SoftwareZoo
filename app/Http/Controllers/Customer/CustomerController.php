<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Customer\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function loginPage(){

        return view('frontend.loginCustomer');

    }

    public function registerIndex(){
        return view('frontend.registerCustomer');
    }

    public function registerUser(Request $request){

        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'max:11'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

            ]);
            $input_data=$request->all();
            $input_data['password']=Hash::make($input_data['password']);
            Customer::create($input_data);
            return redirect()->back()->with('message','Registration successful! You are a member now!!');
    }

    public function login(Request $request){

        $input_data=$request->all();

        // if(Auth::)

        if(Auth::guard('customers')->attempt(['email'=>$input_data['email'],'password'=>$input_data['password']]))
        {
            Session::put('frontSession',$input_data['email']);
            return redirect('/cart');
        }
        else{
            return back()->with('message','Invalid Username or Password!');
        }

        // return view('frontend.loginCustomer');

    }

    public function logoutCus(){

        Auth::guard('customers')->logout();
        Session::forget('frontSession');
        Session::forget('session_id');
        return redirect('/');

    }

}
