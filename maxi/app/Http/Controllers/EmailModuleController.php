<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmailModule;

class EmailModuleController extends Controller
{
    public function show() {
    	return view('EmailModule')->with('countent_c', '')->with('countent_n', '');
    }

    public function showContent($type, $name) {
        if ('country' == $type) {
            $countent_c = EmailModule::where('name', 'country')->select('content')->first();
            $countent_n = ''
        } else if ('normal' == $type) {
            $countent_n = EmailModule::where('name', 'normal')->select('content')->first();
            $countent_c = ''
        } else {
            $countent_c = '';
            $countent_n = '';   
        }
    	return view('EmailModule')->with('content_c', $countent_c)->with('countent_n', $countent_n);
    }

    private function setAttribute(Request $request, $article) {
        $article->name = $request->get('type');
        $article->link = $request->get('name');
        $article->link = $request->get('manager');
        $article->link = $request->get('content');

        try {
            if ($article->save()) {
                return $this->show();
            } else {
                return redirect()->back()->withInput()->withErrors('false store');
            }
        } catch(QueryException $e) {
            $error_code = $e->errorInfo[1];
            if($error_code == 1062){
                return redirect()->back()->withInput()->withErrors('You already have this module');
            }
            return 'WHOOPS, FALSE STORED';
        }
    }

    public function update(Request $request) {
        $article = EmailModule::findOrFail($request->get('id'));
        return $this->setAttribute($request, $article);
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
