<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function insert()
    {
        Student::create([
            'name' => 'Ayesha',
            'email' => 'ayesha@example.com',
            'course' => 'Software Engineering'
        ]);

        return 'Student inserted successfully';
    }

    public function students()
    {
        $students = Student::all();

        return view('students', compact('students'));
    }

    public function showRegister()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'course' => 'required'
            ],
            [
                'name.required' => 'Please enter your name.',
                'email.required' => 'Please enter your email.',
                'email.email' => 'Please enter a valid email address.',
                'course.required' => 'Please enter your course.'
            ]
        );

        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'course' => $request->course
        ]);

        return 'Student registered successfully';
    }
}