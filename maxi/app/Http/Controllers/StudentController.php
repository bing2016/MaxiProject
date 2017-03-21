<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;


class StudentController extends Controller
{
	
	public function show()
    {
    	return view('Teacher-Stu Interface')->withStudents(Student::all());
    }

	public function showEnquireies()
	{
		return view('enquireies');
	}

}
