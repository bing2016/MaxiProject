<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmailModule;

class EmailModuleController extends Controller
{
    public function show() {

    	return view('EmailModule')->withEmailModules(EmailModule::select('name')->orderBy('name')->get())->with('emailModule', ['id' => '', 'type' => '', 'name' => '', 'manager' => '', 'content' => '']);
    }

    public function showContent($name) {
        $emailModule = EmailModule::where('name', $name)->first();
        $info = ['id' => $emailModule->id,
                 'type' => $emailModule->type,
                 'name' => $emailModule->name, 
                 'manager' => $emailModule->manager,
                 'content' => $emailModule->content
                 ];
        return view('EmailModule')->withEmailModules(EmailModule::select('name')->orderBy('name')->get())->with('emailModule', $info);
    }
    private function setAttribute(Request $request, $article) {
        $article->type = $request->get('type');
        $article->name = $request->get('name');
        $article->manager = $request->get('manager');
        $article->content = $request->get('content');

        try {
            if ($article->save()) {
                return redirect('/main/'.$request->get('manager'));
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
        $article = EmailModule::find($request->get('name'));
        if (null == $article) {
            $article = new EmailModule;
        } 
        return $this->setAttribute($request, $article);
    }

    public function delete(Request $request) {
    	if (EmailModule::destroy($request->get('id'))) {
            return $this->show();
        } else {
            return $this->show()->withErrors('false delete');
        }
    }
}
