<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\product;
use App\Models\favourite;

class HomeController extends Controller
{
    //
    public function redirect(){

        $userType=Auth::user()->usertype;

        if($userType == '1'){
           
            return view("admin.home");
        }else{

            $data = product::all();
            return view("user.home",  ['products'=>$data]);
        }

    }

    public function index(){
       
        $data = product::all();
        return view("user.home",  ['products'=>$data]);
    }
    public function allproducts(){
        $data = product::all();
        return view('user.allproducts',['products'=>$data]);
    }
    public function aboutoyo(){
        return view('user.aboutoyo');
    }
    public function contact(){
        return view('user.contact');
    }
    public function search(Request $request){
        $search= $request->search;
        $data = product::where('title', 'like','%'.$search.'%')->get();
        return view("user.home",  ['products'=>$data]);
    }

   
    public function favourite(Request $request){
        $userid=Auth::id();
        if($userid){

            $user=user::find($userid);
            $page_id= $request->id;
            $productdata = product::find($page_id);
            $id=$productdata['id'];
            $title=$productdata['title'];
            $description=$productdata['description'];
            $price=$productdata['price'];
            $quantity=$productdata['quantity'];
            $image=$productdata['image'];
    
            $data= new favourite; //database table name from model
            $data->id=$id;
            $data->title=$title;
            $data->user_id=$user['id'];
            $data->user_type=$user['usertype'];
            $data->description=$description;
            $data->price=$price;
            $data->quantity=$quantity;
            $data->image=$image;
            $data->save();
    
            return redirect()->back()->with('favmsg','');
        }else{
            return redirect('login');
        }
        
    }

  

    public function delete_fav($id){
        $data = favourite::find($id);
        $data->delete();
        return redirect()->back();
    }
}
