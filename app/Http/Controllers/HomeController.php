<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    
    public function home(){
        return view('home',[
            "title" => "Sweet Delights | Home",
        ]);
    }

    public function menu(){
        return view('menu',[
            "title" => "Sweet Delights | Menu",
        ]);
    }

    public function reservation(){
        return view('reservation',[
            "title" => "Sweet Delights | Reservasi",
        ]);
    }

    public function testimonials(){
        return view('testimonials',[
            "title" => "Sweet Delights | Testimoni",
        ]);
    }

}
