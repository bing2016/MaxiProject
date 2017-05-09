<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    public function show() {
        return view('departmentUp')->withDepartments(Department::select('name')->orderBy('name')->get())->with('department', ['id' => '', 'name' => '', 'link' => '', 'blurb' => '']);
    }

    public function showContent($name) {
        $department = Department::where('name', $name)->first();
        $info = ['id' => $department->id, 
                 'name' => $department->name, 
                 'link' => $department->link, 
                 'blurb' => $department->blurb];
        return view('departmentUp')->withDepartments(Department::select('name')->orderBy('name')->get())->with('department', $info);
    }

    private function setAttribute(Request $request, $article) {
        $article->name = $request->get('name');
        $article->link = $request->get('link');
        $article->blurb = $request->get('blurb');

        try {
            if ($article->save()) {
                return redirect('/main.$request->get('manager')');
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
        $article = Department::where('name', $request->get('name'))->first();
        if (null == $article) {
            $article = new Department;
        }
        return $this->setAttribute($request, $article);
	}

    public function delete(Request $request) {
    	if (Department::destroy($request->get('id'))) {
            return $this->show();
        } else {
            return $this->show()->withErrors('false delete');
        }
    }
}
