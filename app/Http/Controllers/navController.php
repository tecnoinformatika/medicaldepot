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
     
    
        $asinDetailProduct =  $request->asinDetailProduct;
        $asinMoreProducts =   $request->asinMoreProducts;
        $asinDetailProduct= Amazon::search($asinDetailProduct)->json();
        $asinMoreProducts = Amazon::search($asinMoreProducts)->json();
        
        return view('ProductDetails')->with('itemdetails', $asinDetailProduct)->with('brands', $asinMoreProducts);
       
        
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
