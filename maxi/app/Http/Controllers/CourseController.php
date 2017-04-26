<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    public function show() {
        return view('courseUp')->withCourses(Course::select('name')->get());
    }

    public function showContent($name) {
        return view('courseUp')->withCourse(Course::where('name', $name)->first());
    }

    private function setAttribute(Request $request, $article) {
        $article->name = $request->get('name');
        $article->link = $request->get('link');

        try {
            if ($article->save()) {
                return redirect('/main');
            } else {
                return redirect()->back()->withInput()->withErrors('false store');
            }
        } catch(QueryException $e) {
            $error_code = $e->errorInfo[1];
            if($error_code == 1062){
                return redirect()->back()->withInput()->withErrors('YOU ALREADY HAVE THIS  COURSE');
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
