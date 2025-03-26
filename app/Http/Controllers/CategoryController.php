<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list(){

        $cat=Category::all();
        return view('features.category.list',compact('cat'));
    }


    public function create(){
        return view('features.category.create');
       
    } 


    public function store(Request $request){
     
       Category::create([
        "name" => $request->name,
        "description" => $request->description,
        "image" => $request->image,
        "display_order" => $request->display_order,
        "status" => $request->status
        
]);
        
        return redirect()->back();

}



    public function delete($id){
        $cat=Category::find($id);
        $cat->delete();
        return redirect()->back();
    }
}