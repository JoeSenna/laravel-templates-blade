<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function first(){
        return view('first');
    }
    public function act(){
        return view('act');
    }
}
#5 cria toda a home controller, com as funções que vão chamar cada página do site