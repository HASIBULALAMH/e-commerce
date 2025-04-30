<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function register(){
        return view('frontend.auth.register');
    }

    public function store(Request $request){
       // dd($request->all());

        Customer::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "phone"=>$request->phone,
            "password"=>bcrypt($request->password),
        ]);
        return redirect()->route('Home');

    }
    public function login(Request $request){
        $credentials = $request->except('_token');
        $check = auth('customerg')->attempt($credentials);
        if($check){
            return redirect()->route('Home');
        }
        else{
            return redirect()->back();
        }

    }

}
