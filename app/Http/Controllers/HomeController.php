<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function templates(){
        return view('templates');
    }
    public function act(){
        return view('act');
    }
}
#5 cria toda a home controller