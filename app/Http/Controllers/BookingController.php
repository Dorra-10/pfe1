<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function allbooking(){
        return view('formbooking.allbooking');
    
    }
    public function editbooking(){
        return view('formbooking.editbooking');
    
    }
    public function addbooking(){
        return view('formbooking.addbooking');
    
    }
}
