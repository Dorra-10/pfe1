<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function pricing(){
   
        return view('pricing.pricing');

    } 
    public function addpricing(){
   
        return view('pricing.addpricing');

        
    } 
    public function editpricing(){
   
        return view('pricing.editpricing');

    } 
}
