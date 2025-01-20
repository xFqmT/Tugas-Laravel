<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    public function showDashboard() {
        $students = Student::select('id', 'name', 'class', 'major')->get();
        return view('dashboard', ['students' => $students]);
    }
}