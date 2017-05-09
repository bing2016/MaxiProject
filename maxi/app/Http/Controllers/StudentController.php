<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Student;
use App\Department;
use App\Course;
use App\Nationality;


class StudentController extends Controller
{

	public function show($manager) {
    	return view('Teacher-Stu Interface')->withStudents(Student::where('is_download', false)
            ->where('manager', $manager)->orderBy('is_highlight', 'desc')->orderBy('created_at', 'desc')->get());
    }

	public function showEnquireies() {
		return view('enquireies')->withDepartments(Department::all())->withCourses(Course::all())->withNationalities(Nationality::all());
	}

	public function showDetail($id) {
		return view('details')->withStudents(Student::findOrFail($id))->withNationalities(Nationality::all())->withDepartments(Department::all())->withCourses(Course::all());
	}

    public function searchStudent($key, $value) {
        return view('Teacher-Stu Interface')->withStudents(Student::where($key, $value)->get());
    }

    public function updateHighlight(Request $request) {
        $student = Student::findOrFail($request->get('id'));
        if (true == $student->is_highlight)
            $student->is_highlight = false;
        else {
            $student->is_highlight = true;
        }
        return $this->show($request->get('manager'));
    }

    public function update(Request $request) {
        $student = Student::findOrFail($request->get('id'));
        $student->last_name = $request->get('last_name');
        $student->middle_name = $request->get('middle_name');
        $student->first_name = $request->get('first_name');
        $student->nationality = $request->get('nationality');
        $student->email = $request->get('email');
        $student->phone_number = $request->get('phone_number');

        $student->department_name = $request->get('department_name');
        $student->course_name = $request->get('course_name');
        $student->source = $request->get('source');
        $student->level = $request->get('level');
        $student->is_send_now = $request->get('is_send_now'); //more question
        $student->questions = $request->get('questions');
        $student->start_year = $request->get('start_year');
        $student->is_applied = $request->get('is_applied');
        $student->registration_number = $request->get('registration_number');

        $student->manager = $request->get('manager');
        $student->place = $request->get('place');
        $student->date = $request->get('date');
        if (null != $request->get('questions')){
            $student->is_highlight = true;
        }

        try {
            if (!$student->save()) {
                return redirect()->back()->withInput()->withErrors('WHOOPS, FALSE STORED');
            }
        } catch(QueryException $e) {
            $error_code = $e->errorInfo[1];
            if($error_code == 1062){
                return redirect()->back()->withInput()->withErrors('You already have this student');
            }
            return 'WHOOPS, FALSE STORED';
        }
        return $this->show($request->get('manager'));
    }

	public function store(Request $request) {
    	$student = new Student;
        $student->last_name = $request->get('last_name');
        $student->middle_name = $request->get('middle_name');
        $student->first_name = $request->get('first_name');
        $student->nationality = $request->get('nationality');
        $student->email = $request->get('email');
        $student->phone_number = $request->get('phone_number');

        $student->department_name = $request->get('department_name');
        $student->course_name = $request->get('course_name');
        $student->source = $request->get('source');
        $student->level = $request->get('level');
        $student->is_send_now = $request->get('is_send_now'); //more question
        $student->questions = $request->get('questions');
        $student->start_year = $request->get('start_year');
        $student->is_applied = $request->get('is_applied');
        $student->registration_number = $request->get('registration_number');

        $student->manager = $request->get('manager');
        $student->place = $request->get('place');
        $student->date = $request->get('date');
        if (null != $request->get('questions')){
            $student->is_highlight = true;
        }

        try {
            if (!$student->save()) {
                return redirect()->back()->withInput()->withErrors('WHOOPS, FALSE STORED');
            }
        } catch(QueryException $e) {
            $error_code = $e->errorInfo[1];
            if($error_code == 1062){
                return redirect()->back()->withInput()->withErrors('You already have this student');
            }

            return $e;
        }
        if (1 == $request->get('is_send_now')) {
            (new OrderController)->generalEmail($request);
        }
        return $this->show($request->get('manager'));
	}

    public function delete(Request $request) {
        if (Student::destroy($request->get('id'))) {
            return $this->show($request->get('manager'));
        } else {
            return $this->show($request->get('manager'))->withErrors('false delete');
        }
    }

    public function deleteAll(Request $request) {
        $arr = explode(",", $request->get('id'));

        if (Student::destroy($arr)) {
            return $this->show($request->get('manager'));
        } else {
            return $this->show($request->get('manager'))->withErrors('false delete');
        }
    }


}
