<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function allstaff(){
        return view('Staff.allstaff');
      
    }
    public function editstaff(){
        return view('Staff.editstaff');
    
    }
    public function addstaff(){
        return view('Staff.addstaff');
    
    }
    
}
