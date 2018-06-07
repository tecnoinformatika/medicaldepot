<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Amazon;

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
     $product = Amazon::search('Health and Beauty')->json();
  
        
        return view('shopProducts')->with('items',$product);
    }
    
    public function shopCart(){
    
        return view('shopCart');
    }
    
    public function registerUSer(){
        return view('registerAccount');
        
    }
}
