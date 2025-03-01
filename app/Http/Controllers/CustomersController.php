<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function allcustomers(){
        return view('customers.allcustomers');
    
    }
    public function editcustomer(){
        return view('customers.editcustomer');
    
    }
    public function addcustomer(){
        return view('customers.addcustomer');
    
    }
}
