<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function chat(){
        return view('app.chat');
    
    }
    public function incomingcall(){
        return view('app.call.incomingcall');
    
    }
    public function videocall(){
        return view('app.call.videocall');
    
    }
    public function voicecall(){
        return view('app.call.voicecall');
    
    }
    public function compose(){
        return view('app.emails.compose');
    
    }
    public function inbox(){
        return view('app.emails.inbox');
    
    }
    public function mailview(){
        return view('app.emails.mailview');
    
    }
}
