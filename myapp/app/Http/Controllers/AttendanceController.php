<?php

namespace App\Http\Controllers;
use App\Models\Attendance;
use App\Models\Student;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    //
    public function store($id)
    {

        $student = new Attendance();
        $student->student_id=$id;
        $student->save();

        return redirect ('/view');
        

    }
    public function retrieve()
    {
        $attendance=Student::join("attendances","attendances.student_id","=","students.id")->get();
        return view('/attandences',['attendance'=>$attendance]);
    }

}
