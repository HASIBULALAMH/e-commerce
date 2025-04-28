<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(){
        $product =Product::with('category','brand')->paginate(10);
        return view ('backend.features.product.list',compact('product'));
    }


    public function create(){
        $brand = Brand::all();
       $category = Category::all();
        return view('backend.features.product.create',compact('category','brand'));
        return view('backend.features.product.create', compact('category'));
    }

   

    public function store(Request $request){
       dd($request->all());
       Product::create([
        "name" =>$request->name,
        "category_id" =>$request->category_id,
        "brand_id"=>$request->brand_id,
        "description"=>$request->description,
        "price" =>$request->price,
        "stock" =>$request->stock,
        "image" =>$request->image
       ]);
       notify()->success('product added successfully');
       return redirect() ->route('product.list');
    }


    public function delete($id){
        Product::find($id)->delete();
        return redirect()->back();
    }

    public function view($id){
    
        $product = Product::find($id);
        return view('backend.features.product.view',compact('product'));
    }
}