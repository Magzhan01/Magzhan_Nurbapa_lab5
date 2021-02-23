<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller {
    
    public function get_students_name(){
        return view('RetName', ["name"=>"Magzhan"]);
        
    }
    public function get_date_birth(){
        return view('RetDateBirth')->with('date',"05-05-2001");
        
    }
    public function get_age(){
        static $age = 20;
        return view('RetAge', compact('age'));
        
    }

    
}
