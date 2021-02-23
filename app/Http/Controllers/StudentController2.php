<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController2 extends Controller
{

    public function SName($name) {
        return view('/Name',["name"=>$name]);
    }
    public function sdate_birth($date) {
        return view('/DateofBirth')->with('date',$date);
    }
    public function sAge($age) {
        return view('/Age', compact('age'));
    }

    // public function get_students(){
    //     static $students = array(0=>"Maks",1=>"Ermek",2=>"Samat");
    //     return $students;
        
    // }
    // public function get_date_birth(){
    //     static $date_birth = array(0=>"2002-01-01",1=>"2003-02-02",2=>"2001-03-03");
    //     return $date_birth;
        
    // }
    // public function get_age(){
    //     static $age = array(0=>"20",1=>"18",2=>"21");
    //     return $age;
        
    // }

    // public function show($id){
    //     $students=$this->get_students();
    //     $date_birth=$this->get_date_birth();
    //     $get_age=$this->get_age();
    //     return view("Name", ["name"=>$students[$id]])." ".view("DateofBirth", ["date"=>$date_birth[$id]])." ".  view("Age", ["age"=>$get_age[$id]]);
    // }
}
