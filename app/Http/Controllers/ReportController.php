<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function expensereport(){
   
        return view('Reports.expensereport');

    }
    public function inoicereport(){
   
        return view('Reports.inoicereport');

    }
}
