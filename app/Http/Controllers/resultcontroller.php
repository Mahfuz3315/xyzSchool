<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\result;

class resultcontroller extends Controller
{
    public function index(){

        $result = result::all();
        // dd($result);

        return view("results", [
            "results" => $result
        ]);
    }
    public function upload(){

        return view('addresult');
    }

    public function uploadresult(Request $request){

        //dd($request->all());

        $data = new result();
        $data->student_id = $request->id;
        $data->name = $request->name;
        $data->bangla = $request->bangla;
        $data->english = $request->english;
        $data->mathematics = $request->mathematics;
        $data->physics = $request->physics;
        $data->chemistry = $request->chemistry;
        $data->biology = $request->biology;
        $data->save();

        return view('addresult');
    }
}
