<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;

class StudentController extends Controller
{
    //
    public function show($id)
    {
        $students = Teacher::find($id)->students;
        return view('example', ['students' => $students]);
    }
}
