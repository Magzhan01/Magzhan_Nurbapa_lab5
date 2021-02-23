<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function reverse_number($number){
        $reverse_number = "";
        for($i=strlen($number)-1; $i >= 0; $i--){
            $reverse_number = $reverse_number.$number[$i];
        }
        return view('index',["telephone_number"=>$reverse_number]);

    }

    // public function display(){
    //     return view('details',['name1'=>'Anisha','name2'=>'Nishka','name3'=>'Sumit']);
    // }
    public function out($id){
        return view('details')->with('id',$id);
    }

    public function displayname($name){
        return view('details',compact('name'));
    }
    public function display($id,$name,$password){
        return view('details',compact('id','name','password'));
    }
}
