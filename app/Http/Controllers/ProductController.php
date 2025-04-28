<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function list()
    {
        $product = Product::paginate(10);
        return view('backend.features.product.list', compact('product'));
    }

    public function create()
    {
        $category = Category::all();
        $brand = Brand::all();
        return view('backend.features.product.create', compact('category', 'brand'));
        
    }

    public function store(Request $request)
    {
        // dd($request->all());
            //file upload
        if($request->hasFile('image')){
            $file=$request->file('image');
            $fileName = date('YmdHis').'.'. $file->getClientOriginalExtension();
            $file->storeAs('/products',$fileName);
        }

        //eloquent orm model create method
        Product::create([
            "name" => $request->name,
            "category_id" => $request->category_id,
            "brand_id" => $request->brand_id,
            "price" => $request->price,
            "stock" => $request->stock,
            "image" => $fileName 
        ]);
        return redirect()->route('product.list');
    }


    public function delete($id)
    {
        Product::find($id)->delete();
        return redirect()->back();
    }
}