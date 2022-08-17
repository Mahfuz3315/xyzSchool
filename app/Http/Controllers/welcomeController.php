<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function gotologin(){
        return view('login');
    }

    public function calender(){
        return view('calender');
    }
    public function notice(){
        return view('notice');
    }
}
