<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('backend.auth.login');
    }

    public function loginsubmit(Request $request)
    {
        //validation
        $validator=Validator::make($request->all(), [
            'email' => 'required|email',
             ]);
        if ($validator->fails()) {
            notify()->error($validator->getMessageBag());
            return redirect()->back();
        }

        
        // dd($request->all());
        $credentials = $request->except('_token');
        
        $check = Auth::attempt($credentials);
        if ($check) {
            notify()->success('successfully login');
            return redirect()->route('deshboard');
        } else {
            notify()->error('invalid credentials');
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();
        notify()->success('successfully logout');
        return redirect()->route('login');
    }
}
