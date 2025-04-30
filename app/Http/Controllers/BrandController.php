<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function list() {
        $brand=Brand::all();
        return view('backend.features.Brand.list',compact('brand'));
    }


public function create(){
return view('backend.features.Brand.create');
}


public function store(Request $request) {

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $fileName = date('YmdHis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('/brands', $fileName);
        }


        //dd($request->all());
        Brand::create([
     "name"=>$request->name,
        "description"=>$request->description,
        "logo"=>$fileName,
        "status"=>$request->status
    ]);
    return redirect()->back();
}



}