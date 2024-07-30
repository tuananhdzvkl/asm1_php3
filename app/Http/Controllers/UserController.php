<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    //user
    public function user(){
        return view('welcome')->with('user');
    }

    public function package(){
        return view('user.page.packages')->with('package');
    }
    
    public function help(){
        return view('user.page.help')->with('help');
    }

    public function blog(){
        return view('user.page.blog')->with('blog');
    }

    public function blog_details(){
        return view('user.page.blog_details')->with('blog_details');
    }

    public function elements(){
        return view('user.page.elements')->with('elements');
    }
    public function contact(){
        return view('user.page.contact')->with('contect');
    }

    // ------------------------------------------------------
   

   
}


