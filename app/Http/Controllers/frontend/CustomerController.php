<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Symfony\Contracts\Service\Attribute\Required;

class CustomerController extends Controller
{
    public function register(){
        return view('frontend.auth.register');
    }

    public function store(Request $request){
            

        $customer = Validator::make($request->all(), [
            'name' => 'required|string|max:25',
            'email' => 'required|email',
            'phone' => 'required|numeric|min:11',
            'password' => 'required|string|min:8|max:16|regex:/^(?=.*[a-zA-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'
        ]);
            //  dd($customer->getMessageBag());
           
             if ($customer->fails()){
             dd($customer->getMessageBag());
            toastr()->error($customer->getMessageBag());
                return redirect()->back();
            }
        
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

        $customer = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:8|max:16|regex:/^(?=.*[a-zA-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'
        ]);

         if ($customer->fails()) {
        // dd($customer->getMessageBag());
            toastr()->error($customer->getMessageBag());
            return redirect()->back();
     }


        $credentials = $request->except('_token');
        $check = auth('customerg')->attempt($credentials);
        if($check){
            toastr()->success('successfully login');
            return redirect()->route('customer.profile');
        }
        else{
            toastr()->error('invalid credentials');
            return redirect()->route('Home');
        }

    }

    public function profile(){
        return view('frontend.customer.profile');
    }

}
