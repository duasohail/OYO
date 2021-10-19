<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class AdminController extends Controller
{
    //
    public function products(){
        return view('admin.products');
    }

    public function uploadproducts(Request $request){
        
        $data= new product; //database table name from model
        $image=$request->file;
        
        $image_name=$image->getClientOriginalName();
        // $image_custName=pathinfo($image, PATHINFO_FILENAME).','.pathinfo($image, PATHINFO_EXTENSION);
        // print_r($image_name);
        $request->file->move('productimage', $image_name);

        $data->image=$image_name;

        $data->title=$request->p_title;
        $data->description=$request->p_desc;
        $data->price=$request->price;
        $data->quantity=$request->quantity;
        $data->type=$request->type;
        $data->rating=$request->rating;

        $data->save();

        return redirect()->back()->with('msg','Product added successfully');

        
    }
}
