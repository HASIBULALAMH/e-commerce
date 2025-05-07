<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function brand(){
        $brand = Brand::all();
        return view('frontend.pages.Brand',compact('brand'));
    }
    
    //query

    public function brands($id){
            $brand =Product::find($id);
            $mybrand = Product::with ('brand','category')->where('brand_id',$id)->get();
            return view('frontend.pages.BrandItem',compact('mybrand'));
    }
}
