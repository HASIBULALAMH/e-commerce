<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function register(){
        return view('frontend.auth.register');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:25',
            'email' => 'required|email|unique:customers,email',
            'phone' => 'required|digits:11|unique:customers,phone',
            'password' => 'required|string|min:6|confirmed'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        Customer::create([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "password" => bcrypt($request->password),
        ]);

        toastr()->success('Registration successful! Please login.');
        return redirect()->route('customer.login');
    }

    // Show login form
    public function login(){
        return view('frontend.auth.register');
    }

    // Handle login submission
    public function loginSubmit(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        if ($validator->fails()) {
            toastr()->error('Invalid credentials');
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $credentials = $request->only('email', 'password');

        if(auth('customerg')->attempt($credentials)){
            toastr()->success('Successfully logged in');
            return redirect()->route('customer.profile');
        } else {
            toastr()->error('Invalid email or password');
            return redirect()->back()->withInput();
        }
    }

    public function logout(){
        auth('customerg')->logout();
        toastr()->success('Successfully logged out');
        return redirect()->route('Home');
    }

    public function profile(){
        return view('frontend.customer.profile');
    }
    
}
