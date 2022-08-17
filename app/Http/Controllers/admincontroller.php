<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\result;

class admincontroller extends Controller
{
    public function studentprofile(){
        $students = User::select('id','name', 'email','student_id')->where('role', 'student')->get();
        // dd($routine);

        return view("studentprofiles", [
            "studentprofiles" => $students
        ]);

    }
    public function teacherprofile(){
        $teachers = User::select('id','name', 'email')->where('role', 'teacher')->get();
        //$teachers = User::all();
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
    public function studentdelete($id){
        
        $student = User::find($id);
        $student->delete();
        return redirect()->back();
    }
    public function teacherdelete($id){
        
        $teacher = User::find($id);
        $teacher->delete();
        return redirect()->back();
    }
}
