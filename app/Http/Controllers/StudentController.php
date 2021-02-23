<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller {
    
    public function get_students(){
        static $students = array(0=>"Dauren",1=>"Talgat",2=>"Maksat");
        return $students;
        
    }
    public function get_date_birth(){
        static $date_birth = array(0=>"1999-01-01",1=>"2000-02-02",2=>"1999-03-03");
        return $date_birth;
        
    }
    public function get_age(){
        static $age = array(0=>"22",1=>"20",2=>"21");
        return $age;
        
    }

    public function show($id){
        $students=$this->get_students();
        $date_birth=$this->get_date_birth();
        $get_age=$this->get_age();
        return view("RetName", ["name"=>$students[$id]])." ".view("RetDateBirth", ["date"=>$date_birth[$id]])." ".  view("RetAge", ["age"=>$get_age[$id]]);
    }
}
