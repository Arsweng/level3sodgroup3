<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Maatwebsite\Excel\Facades\Excel;
class studentController extends Controller
{
    public function store(Request $request)
    {


        $student = new Student();
        $student->name=$request->name;
        $student->sex=$request->sex;
        $student->class=$request->class;
        $student->save();
                return redirect ('/view');
        

    }
    
    public function view()
    {
        $student = Student::all();
        return view("view",['student'=>$student]);
    }
        
    
    
}