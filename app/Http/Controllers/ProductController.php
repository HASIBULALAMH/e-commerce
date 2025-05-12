<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Symfony\Contracts\Service\Attribute\Required;

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
        //product form validation
        $validation = Validator::make($request->all(),[
            'name' => 'Required|string|max:55' ,
            
            'description' => 'Required|string|max:555' ,
            'price' =>'Required' ,
            'stock' => 'Required',
            'image' => 'Required|file|max:1024'
        ]);
            if($validation->fails()){
                toastr()->title('product form')->success($validation->getMessageBag());
                return redirect()->back();
            }


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
            "description" => $request->description,
            "price" => $request->price,
            "stock" => $request->stock,
            "discount" =>$request->discount,
            "status" => $request->status,
            "image" => $fileName 

        ]);
        return redirect()->route('product.list');
    }


    public function delete($id)
    {
        Product::find($id)->delete();
        return redirect()->back();
    }

    public function view($id)
    {
        try {
            $product = Product::findOrFail($id);
            return view('backend.features.product.view', compact('product'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Product not found');
        }
    }

}


