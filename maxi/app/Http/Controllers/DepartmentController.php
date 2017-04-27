<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    public function show($name) {
        return view('departmentUp')->withDepartments(Department::select('name')->get())->withDepartment(Department::where('name', $name)->first());
    }

    private function setAttribute(Request $request, $article) {
        $article->name = $request->get('name');
        $article->link = $request->get('link');
        $article->blurb = $request->get('blurb');


        try {
            if ($article->save()) {
                return redirect('/main');
            } else {
                return redirect()->back()->withInput()->withErrors('false store');
            }
        } catch(QueryException $e) {
            $error_code = $e->errorInfo[1];
            if($error_code == 1062){
                return redirect()->back()->withInput()->withErrors('YOU ALREADY HAVE THIS DEPARTMENT.');
            }
        }
    }

	public function store(Request $request) {
    	$article = new Department;
        return $this->setAttribute($request, $article);
	}

    public function delete(Request $Request) {
    	if (Department::destroy($Request->get('id'))) {
            return $this->show();
        } else {
            return $this->show()->withErrors('false delete');
        }
    }
}
