<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        return view('blog.blog');
    
    }
    public function blogview(){
        return view('blog.blogview');
    
    }
    public function editblog(){
        return view('blog.editblog');
    
    }
    public function addblog(){
        return view('blog.addblog');
    
    }
}
