<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailModuleController extends Controller
{
    public function show() {
    	return view('EmailModule')->withStudents(EmailModule::all())
    }
}
