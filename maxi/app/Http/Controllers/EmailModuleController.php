<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmailModule;

class EmailModuleController extends Controller
{
    public function show($name) {
    	return view('EmailModule')->withEmailModules(EmailModule::select('name')->orderBy('name')->get())->withEmailModule(EmailModule::where('name', $name)->first());
    }

    private function setAttribute(Request $request, $article) {
        $article->name = $request->get('type');
        $article->link = $request->get('name');
        $article->link = $request->get('manager');
        $article->link = $request->get('content');

        try {
            if ($article->save()) {
                return redirect('/main');
            } else {
                return redirect()->back()->withInput()->withErrors('false store');
            }
        } catch(QueryException $e) {
            $error_code = $e->errorInfo[1];
            if($error_code == 1062){
                return redirect()->back()->withInput()->withErrors('YOU ALREADY HAVE THIS MODULE');
            }
            return 'WHOOPS, FALSE STORED';
        }
    }

	public function store(Request $request) {
    	$article = new EmailModule;
        return $this->setAttribute($request, $article);
	}

    public function delete(Request $Request) {
    	if (EmailModule::destroy($Request->get('id'))) {
            return $this->show();
        } else {
            return $this->show()->withErrors('false delete');
        }
    }
}
