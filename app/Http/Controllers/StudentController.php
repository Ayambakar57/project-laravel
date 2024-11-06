<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    // $student = DB::table('students') -> get(); //Query builder
    public function index() {

        // $students = Student::with('grade')->get();


        return view('student',
        ['title' => "Students",

        // 'student'=> $students
        'student'=> Student::all() //route model binding
        ]);
    }
    public function create() {
        return view('tambah');
    }

    // Store the new student data
    public function store(Request $request) {
        // Logic to store new student data (typically saving to the database)
        // For now, we can just redirect back to the student list
        // But here you could also save this data to a database

        // Example of saving to the session or a simple array
        $newStudent = $request->only(['name', 'grade', 'email', 'address']);

        // You'd store this data in a database normally

        return redirect('/student')->with('success', 'Student added successfully!');
    }
}



