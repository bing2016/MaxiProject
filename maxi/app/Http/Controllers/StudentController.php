<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Student;
use App\Department;
use App\Course;


class StudentController extends Controller
{

	public function show() {
    	return view('Teacher-Stu Interface')->withStudents(Student::where('is_download', false)->orderBy('is_highlight', 'desc')->orderBy('updated_at', 'desc')->get());
    }

	public function showEnquireies() {
		return view('enquireies')->withDepartments(Department::all())->withCourses(Course::all());
	}

	public function showDetail($id) {
		return view('details')->withStudents(Student::findOrFail($id))->withDepartments(Department::all())->withCourses(Course::all());
	}

    public function searchStudent($key, $value) {
        if ('all_students' == $key) {
            return $this->show();
        } else {
            return view('Teacher-Stu Interface')->withStudents(Student::where($key, $value)->get());
        }
    }

    public function updateHighlight(Request $request) {
        $student = Student::findOrFail($request->get('id'));
        if (true == $student->is_highlight)
            $student->is_highlight = false;
        else {
            $student->is_highlight = true;
        }
        return $this->show();
    }

    private function setAttribute(Request $request, $article) {
        $article->last_name = $request->get('last_name');
        $article->middle_name = $request->get('middle_name');
        $article->first_name = $request->get('first_name');
        $article->nationality = $request->get('nationality');
        $article->email = $request->get('email');
        $article->phone_number = $request->get('phone_number');

        $article->department_name = $request->get('department_name');
        $article->course_name = $request->get('course_name');
        $article->source = $request->get('source');
        $article->level = $request->get('level');
        $article->is_send_now = $request->get('is_send_now'); //more question
        $article->questions = $request->get('questions');
        $article->start_year = $request->get('start_year');
        $article->is_applied = $request->get('is_applied');
        $article->registration_number = $request->get('registration_number');

        $article->manager = $request->get('manager');
        $article->place = $request->get('place');
        $article->date = $request->get('date');
        if (null != $request->get('questions')){
            $article->is_highlight = true;
        }

        try {
            if ($article->save()) {
                return $this->show();
            } else {
                return redirect()->back()->withInput()->withErrors('WHOOPS, FALSE STORED');
            }
        } catch(QueryException $e) {
            $error_code = $e->errorInfo[1];
            if($error_code == 1062){
                return redirect()->back()->withInput()->withErrors('You already have this student');
            }
            return 'WHOOPS, FALSE STORED';
        }
    }
    public function update(Request $request) {
        $article = Student::findOrFail($request->get('id'));
        return $this->setAttribute($request, $article);
    }

	public function store(Request $request) {
    	$article = new Student;
        $return_value =  $this->setAttribute($request, $article);
        if (1 == $request->get('is_send_now')) {
            (new OrderController)->generalEmail($request);
        }
        return $return_value;
	}

    public function delete(Request $Request) {
        if (Student::destroy($Request->get('id'))) {
            return $this->show();
        } else {
            return $this->show()->withErrors('false delete');
        }
    }

}
