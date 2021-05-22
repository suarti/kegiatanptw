<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("home0034");
    }
    public function artikel(){
        return view("artikel0034");
    }
    public function contact(){
        return view("contact0034");
    }
}
