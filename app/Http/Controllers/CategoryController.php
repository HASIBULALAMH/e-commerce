<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list(){

        $cat=Category::all();
        return view('backend.features.category.list',compact('cat'));
    }


    public function create(){
        return view('backend.features.category.create');
       
    } 


    public function store(Request $request){
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = date('YmdHis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('/categories', $fileName);
        }


        Category::create([
        "name" => $request->name,
        "description" => $request->description,
        "image" => $fileName,
        "display_order" => $request->display_order,
        "status" => $request->status
        
]);
        
        return redirect()->route('category.list');

}



    public function delete($id){
        $cat=Category::find($id);
        $cat->delete();
        return redirect()->back();
    }
}