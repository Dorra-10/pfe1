<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function companysetting(){
        return view('settings.companysetting');
    
    }
    public function changepassword(){
        return view('settings.changepassword');
    
    }
    public function emailsetting(){
        return view('settings.emailsetting');
    
    }
    public function invoicesetting(){
        return view('settings.invoicesetting');
    
    }
    public function leavetype(){
        return view('settings.leavetype');
    
    }
    public function localisation(){
        return view('settings.localisation');
    
    }
    public function notification(){
        return view('settings.notification');
    
    }
    public function rolepermission(){
        return view('settings.rolepermission');
    
    }
    public function salarysetting(){
        return view('settings.salarysetting');
    
    }
    public function themesetting(){
        return view('settings.themesetting');
    
    }

}
