<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
	public function show() {
    	return Course::all();
    }

    private function setAttribute(Request $request, $article) {
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
        $article = Course::findOrFail($request->get('id'));
        return $this->setAttribute($request, $article);
    }

	public function store(Request $request) {
    	$article = new Course;
        return $this->setAttribute($request, $article);
	}

    public function delete(Request $Request) {
    	if (Course::destroy($Request->get('id'))) {
            return $this->show();
        } else {
            return $this->show()->withErrors('false delete');
        }
    }
}
