<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function view($id)
    {
        $product = Product::findOrFail($id);
        return view('frontend.pages.Productdetails', compact('product'));
    }

    public function listview()
    {
        $products = Product::paginate(50);
        return view('frontend.pages.productpage', compact('products'));
    }
}
