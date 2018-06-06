<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class navController extends Controller
{
    //
    public function aboutUs(){
        return view('aboutUs');
    }
    
    public function contact(){
        return view('contact');
    }
    
    public function shopProducts(){
    
        return view('shopProducts');
    }
    
    public function shopCart(){
    
        return view('shopCart');
    }
    public function registerUSer(){
        return view('registerAccount');
        
    }
}
