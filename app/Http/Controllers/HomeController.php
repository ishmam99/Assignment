<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function About(){
        return view('about-us');
    }
    function team(){
        return view('team');
    }
    function contact(){
        return view('contact');
    }
    function service(){
        return view('service');
    }
}
