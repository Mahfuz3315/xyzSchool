<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admissionresults;

class admissioncontroller extends Controller
{
    public function index(){
        return view('admission');
    }

    public function result(){

        $admissionresults = admissionresults::all();

        return view('admissionresults', [
            "admissionresults" => $admissionresults
        ]);
    }

    public function highlights(){
        return view('highlights');
    }
}
