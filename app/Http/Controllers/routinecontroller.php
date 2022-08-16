<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\routine;

class routinecontroller extends Controller
{
    public function index(){

        $routine = routine::all();
        // dd($routine);

        return view("routine", [
            "routines" => $routine
        ]);
    }
}
