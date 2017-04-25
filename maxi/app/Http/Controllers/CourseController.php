<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function show() {
        return view('Course');
    }

    public function showContent($name) {
        return view('Course')->withStudents(Course::where('name', $name)->first());
    }

    private function setAttribute(Request $request, $article) {
        $article->name = $request->get('name');
        $article->link = $request->get('link');

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
