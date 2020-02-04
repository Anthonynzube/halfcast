<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        return view('home');
    }

    public function about(){

        return view('about');
    }

    public function contact(){

        return view('contact');
    }

    public function error(){

        return view('404');
    }

    public function shop(){

        return view("shop");
    }

    public function blog(){

        return view("blog");
    }

    public function comingSoon(){

        return view("comingSoon");
    }
}
