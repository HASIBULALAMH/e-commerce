<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\orderdetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function addtocart($product_id)
    {


       //dd($product);
       $mycart = Session::get('cart');


        if(empty($mycart)){
            $product = Product::find($product_id);

            //jodi cart empty hoy tahole ekta array banabo
                $cart[$product_id] = [
                    'id'=>$product->id,
                    'name'=>$product->name,
                    'price'=>$product->price,
                    'quantity'=>1,
                    'image'=>$product->image,
                    'subtotal'=>$product->price*1,
                ];

                Session::put('cart',$cart);
                toastr()->title('add cart')->success('add item in cart');
                return redirect()->back();
            }

            if(array_key_exists($product_id,$mycart)){
                //[quantity *1], [price * quantity]
                $mycart[$product_id]['quantity']= $mycart[$product_id]['quantity'] + 1;
                $mycart[$product_id]['subtotal'] = $mycart[$product_id]['price'] * $mycart[$product_id]['quantity'];

             Session::put('cart',$mycart);
            toastr()->title('add cart')->success('add quantity in cart');
            return redirect()->back();
        }


            else
            $product=product::find($product_id);

            $mycart[$product_id] =[
                'id'=>$product->id,
                'name'=>$product->name,
                'price'=>$product->price,
                'quantity'=>1,
                'image'=>$product->image,
                'subtotal'=>$product->price*1,
            ];

            Session::put('cart',$mycart);
             toastr()->title('add cart')->success('add new item in cart');
            return redirect()->back();


   }

    public function view(){
        $mycart = Session::get('cart') ?? [];

        return view('frontend.shopping.cart',compact('mycart'));

    }



    public function checkout(){
        $mycart = Session::get('cart') ?? [];
        return view('frontend.shopping.checkout',compact('mycart'));

    }

        public function storeaddorder(Request $request){

            //dd($request)->all();

            $myorder = Order::create([
                'customer_id'=>auth('customerg')->user()->id,
                'receiver_name'=>$request->name,
                'receiver_email'=>$request->email,
                'receiver_mobile'=>$request->number,
                'receiver_address'=>$request->address,
                'receiver_city'=>$request->city,
                'subtotal'=>$request->total_amount,
                'total'=>$request->total_amount +1 ,
                'payment_method'=>$request->pay,


            ]);
        $mycart = Session::get('cart');

        foreach ($mycart as $cartdata) {
            orderdetail::create([

                'order_id' => $myorder->id,
                'product_id' => $cartdata['id'],
                'pro_quentity' => $cartdata['quantity'],
                'unit_price' => $cartdata['price'],
                'subtotal' => $cartdata['subtotal'],
            ]);
        }

        toastr()->title('Place Order')->success(' Place Order successfully!');
        $mycart = Session::forget('cart');
        return redirect()->route('Home');

        }


}
