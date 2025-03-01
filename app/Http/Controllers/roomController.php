<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class roomController extends Controller
{
    public function allroom(){
   
        return view('room.allroom');

    } 
    public function editroom(){
        return view('room.editroom');
    
    }
    public function addroom(){
        return view('room.addroom');
    
    }  

}
