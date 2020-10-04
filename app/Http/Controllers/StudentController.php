<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $request= 'Muni';
     return  $students = Student::select('section')->where('name','like','%'.$request.'%')->distinct()->get();
      //  dd($students);
      //  return view('welcome',compact('students'));
    }

}
