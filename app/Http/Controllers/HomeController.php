<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AmazonProduct;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
        try{
            //$allProducts = Amazon::search('Wireless Phone Accessory')->json();
            //$response = AmazonProduct::search('Wireless Phone Accessory', 'amazon' , 1);
            $response = AmazonProduct::search('HealthPersonalCare', 'pride-mobility' , 1);
            
            
        }catch(Exception $e){
            
        }
        return view('welcome')->with('allProducts', $response);
        
        
        
        
    }
}
