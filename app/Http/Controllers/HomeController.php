<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\product;

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
}
