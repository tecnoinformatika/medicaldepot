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
    public function ProductDetails(Request $request){
       
        $asin =  $request->asin;
        $brand = $request->brand;
        $brand = Amazon::search($brand)->json();
        $product = Amazon::lookup($asin)->json();
        return view('ProductDetails')->with('itemdetails', $product)->with('brand', $brand);
       
        
    }
    public function shopProducts(){
     $product = Amazon::search('Pride Mobility')->json();
  
        
        return view('shopProducts')->with('items',$product);
    }
    
    public function shopCart(){
    
        return view('shopCart');
    }
    
    public function registerUSer(){
        return view('registerAccount');
        
    }
}
