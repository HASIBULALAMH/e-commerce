<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(){
        $product =Product::all();
        return view ('features.product.list',compact('product'));
    }

    public function create(){
        return view('features.product.create');
    }

    public function store(Request $request){
       // dd($request->all());
       Product::create([
        "name" =>$request->name,
        "category" =>$request->category,
        "price" =>$request->price,
        "stock" =>$request->stock,
        "image" =>$request->image
       ]);
       return redirect()->back();
    }


    public function delete($id){
        Product::find($id)->delete();
        return redirect()->back();
    }
}