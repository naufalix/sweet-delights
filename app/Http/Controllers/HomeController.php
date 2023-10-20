<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    
    public function home(){
        return view('home',[
            "title" => "Sweet Delights | Toko Kue",
            // "crafts" => Craft::all(),
            // "posts" => Post::limit(3)->orderBy("id","DESC")->get(),
        ]);
    }

}
