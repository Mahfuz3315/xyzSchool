<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\result;

class admincontroller extends Controller
{
    public function studentprofile(){
        $students = User::all();
        // dd($routine);

        return view("studentprofiles", [
            "studentprofiles" => $students
        ]);

    }
    public function teacherprofile(){
        $teachers = User::all();
        // dd($routine);

        return view("teacherprofiles", [
            "teacherprofiles" => $teachers
        ]);

    }
    public function resultsheet(){

        $result = result::all();
        // dd($result);

        return view("resultsheets", [
            "resultsheets" => $result
        ]);
    }
}
