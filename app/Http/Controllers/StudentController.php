<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function show($id)
    {
         $name =  Student::findOrFail($id)->name;
        return view('example', ['name' => $name]);
    }
}
