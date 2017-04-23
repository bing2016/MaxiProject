<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
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

	public function showStudent($id)
	{
		$student = Student::findOrFail($id);
		return $student;
	}

    public function searchStudent($key, $value) {
        $students = Student::where($key, $value)->get();
        return $students;
    }

    private function setStudnet(Request $request, $article) {
       $article->last_name = $request->get('last_name');
        $article->middle_name = $request->get('middle_name');
        $article->first_name = $request->get('first_name');
        $article->nationality = $request->get('nationality');
        $article->email = $request->get('email');
        $article->phone_number = $request->get('phone_number');

        $article->department = $request->get('department');
        $article->course = $request->get('course');
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
                return redirect()->back()->withInput()->withErrors('alse store');
            }
        } catch(QueryException $e) {
            $error_code = $e->errorInfo[1];
            if($error_code == 1062){
                return redirect()->back()->withInput()->withErrors('alse store');
            }
        }
    }
    public function modifyStudent(Request $request) {
        $article = Student::findOrFail($request->get('id'));
        return $this->setStudnet($request, $article);

    }

	public function storeStudent(Request $request) {
    	$article = new Student;
        return $this->setStudnet($request, $article);

	}

}
