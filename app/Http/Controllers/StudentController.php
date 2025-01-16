<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
        // dd($students);
        return view('show', ['students' => $students]);
    }
    // create data
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // validate
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'score' => 'required',
        ]);

        Student::create([
            'name' => $request->name,
            "score" => 80,
            'teacher_id' => 1
        ]);
        return Redirect::route('index')->with('success', 'Data Berhasil Ditambahkan');
    }
    // edit
    public function edit(Student $student)
    {
        return view('edit', compact('student'));
    }
    // update
    public function update(Request $request, Student $student)
    {
        $student->update([
            'name' => $request->name,
            'score' => $request->score,
        ]);
        return Redirect::route('show', $student->id)->with('success', 'Data Berhasil Diupdate');
    }
}
