<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(){
        $student = Student::take(20) -> get();
        return view('index',['student'=>$student]);
    }

}
