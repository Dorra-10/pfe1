<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssetsController extends Controller
{ 
    public function assetslist(){
    return view('Assets.assetslist');

    }  
    public function addassets(){
        return view('Assets.addassets');
    
    }    
    public function editassets(){
        return view('Assets.editassets');
    
    } 
    
}
