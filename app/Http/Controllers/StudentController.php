<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Student;
use App\Models\Teacher;

class StudentController extends Controller
{
    // show all data
    public function index()
    {
        $students = Student::all();
        return view('index',['data' => $students]);
    }


    public function show($id)
    {
        $students = Student::find($id);
        $activity = $students->activities;
        // dd($students);
        return view('example', ['activity' => $activity, 'students' => $students->name]);
    }
}
