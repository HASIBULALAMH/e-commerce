<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Contracts\Service\Attribute\Required;

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

        
        //category validation
        $validation = Validator::make($request->all(),[

            'name' => 'required|string|',
            'description' => 'required|string|',
            'display_order' => 'required|',
            'image' => 'required|file|max:10240'
        ]);
        if($validation->fails()){
            toastr()->title('category form')->sccess($validation->getMessageBag());
            return redirect()->back();
        }

        //dd($request->all());

        //image file uplpad
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