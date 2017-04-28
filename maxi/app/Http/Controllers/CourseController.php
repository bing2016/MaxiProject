<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    public function show() {
        return view('courseUp')->withCourses(Course::select('name')->orderBy('name')->get())->with('course', ['id' => '', 'name' => '', 'link' => '']);
    }

    public function showContent($name) {
        $course = Course::where('name', $name)->first();
        $info = ['id' => $course->id, 
                 'name' => $course->name, 
                 'link' => $course->link];
        return view('departmentUp')->withCourse(Course::select('name')->orderBy('name')->get())->with('course', $info);
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


    public function store(Request $request) {
        $article = Course::find($request->get('name')))
        if (null == $article) {
            $article = new Course;
        } 
        return $this->setAttribute($request, $article);
    }

    public function delete(Request $request) {
    	if (Course::destroy($request->get('id'))) {
            return $this->show();
        } else {
            return $this->show()->withErrors('false delete');
        }
    }
}
