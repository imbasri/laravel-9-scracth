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
        $students = Student::paginate(2);
        return view('index', ['data' => $students]);
    }

    public function filter()
    {
        $students = Student::where('score', '>', 70)
            ->where('name', 'like', '%a%')
            ->get();
        return view('filter', compact('students'));
    }

    public function show($id)
    {
        $students = Student::find($id);
        $activity = $students->activities;
        // dd($students);
        return view('example', ['activity' => $activity, 'students' => $students->name]);
    }
}
