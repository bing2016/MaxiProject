<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Student;


class StudentController extends Controller
{

	public function show() {
    	return view('Teacher-Stu Interface')->withStudents(Student::all());
    }

	public function showEnquireies() {
		return view('enquireies');
	}

	public function showDetail($id) {
		return view('detail')->withStudents(Student::findOrFail($id));
	}

    public function searchStudent($key, $value) {
        return view('Teacher-Stu Interface')->withStudents(Student::where($key, $value)->get());
    }

    private function setttribute(Request $request, $article) {
        $article->last_name = $request->get('last_name');
        $article->middle_name = $request->get('middle_name');
        $article->first_name = $request->get('first_name');
        $article->nationality = $request->get('nationality');
        $article->email = $request->get('email');
        $article->phone_number = $request->get('phone_number');

        $article->department = $request->get('department_name');
        $article->course = $request->get('course_name');
        $article->source = $request->get('source');
        $article->level = $request->get('level');
        $article->is_special = $request->get('is_special'); //more question
        $article->questions = $request->get('questions');
        $article->start_year = $request->get('start_year');
        $article->is_applied = $request->get('is_applied');
        $article->regesition_number = $request->get('regesition_number');

        $article->manager = $request->get('manager');
        $article->place = $request->get('place');
        $article->date = $request->get('date');
        $article->is_emailed = $request->get('is_emailed');
        $article->is_highlight = $request->get('is_highlight');
        $article->is_download = $request->get('is_download');

        try {
            if ($article->save()) {
                return $this->show();
            } else {
                return redirect()->back()->withInput()->withErrors('false store');
            }
        } catch(QueryException $e) {
            $error_code = $e->errorInfo[1];
            if($error_code == 1062){
                return redirect()->back()->withInput()->withErrors('You already have this student');
            }
        }
    }
    public function update(Request $request) {
        $article = Student::findOrFail($request->get('id'));
        return $this->setAttribute($request, $article);
    }

	public function store(Request $request) {
    	$article = new Student;
        return $this->setAttribute($request, $article);
	}

    public function delete(Request $Request) {
        if (Student::destroy($Request->get('id'))) {
            return $this->show();
        } else {
            return $this->show()->withErrors('false delete');
        }
    }

}
