<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\product;
use App\Models\favourite;


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
        $sz=$request->sizes;
        // print_r(implode(" ", $sz));
        $size=implode(" ", $sz);
        $data->size=$size;
        // foreach($sz as $size){
        //     // print_r($sz);
        //         $data->size=$request->sizes;
        //         $data->save();
        // }
        $data->color=$request->color;
        $data->brand=$request->brand;

        $data->save();

        return redirect()->back()->with('msg','Product added successfully');

        
    }

    public function show_products(){
        $data = product::all();
        return view('admin.show_products',['products'=>$data]);
    }
    public function delete_product($id){
        $data = product::find($id);
        $data->delete();
        return redirect()->back()->with('msg','Product deleted successfully');
    }
    public function edit_product($id){
        $data = product::find($id);
        return view('admin.edit_products',['data'=>$data]);
        
    }
     public function updateproduct(request $request){
        $data = product::find($request->id);
        

        if($image=$request->file)
        {
        
            $image_name=$image->getClientOriginalName();
            // $image_custName=pathinfo($image, PATHINFO_FILENAME).','.pathinfo($image, PATHINFO_EXTENSION);
            // print_r($image_name);
            $request->file->move('productimage', $image_name);

            $data->image=$image_name;
        }
        $data->title=$request->p_title;
        $data->description=$request->p_desc;
        $data->price=$request->price;
        $data->quantity=$request->quantity;
        $data->type=$request->type;
        
        $data->size=$request->size;
        $data->color=$request->color;
        $data->brand=$request->brand;


        $data->save();

        return redirect()->back()->with('msg','Product updated successfully');
        
    }
    public function product_detail($id){
        $userid=Auth::id();
        $data['product'] = product::find($id);
        $data['product']['fav'] = favourite::find($id);
       
        
        if($data['product']['fav']){
            if($data['product']['fav']['user_id']==$userid){
                return view('user.product_detail',['products'=>$data['product']['fav'], 'products'=>$data['product']]);
            }
           
        }else{
            return view('user.product_detail',['products'=>$data['product']]);
        }
        
    }
}
