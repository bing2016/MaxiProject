<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Student;
use Excel;

class ExcelController extends Controller
{
	public function upload() {
    	return view('uploadfile');
    }

	public function export(Request $request){

		$arr = explode(",", $request->get('id'));

		if (empty($arr)) {
			$students = Student::where('is_download', 0)->get();
		} else {
			$students = Student::whereIn('id', $arr)->get();
		}

		$info[] = array('email' => 'email', 'name' => 'name', 'course' => 'course', 'link'=>'link', 'blurb'=>'blurb');
		foreach ($students as $key => $value) {
			$name = $value['first_name'].$value['middle_name'].$value['last_name'];
			$info[] = array(                
				'email' => $value['email'],                
				'name' => $name,
				'course' => $value['course_name'], 
				'link' => $value->course->link, 
				'blurb' => $value->department->blurb,
				);        
		}

		Excel::create('students'.time(),function($excel) use ($info){
			$excel->sheet('score', function($sheet) use ($info){
				$sheet->rows($info);
			});
		})->store('xls')->export('xls');
	}
	
	public function import(Request $request){
    	$file = $request->file('import_file');
    	$arr = array();
    	if($file) {
    		$path = $file->getRealPath();

    	    $data = Excel::load($path, function($reader) {
    	    })->get();

    	    $namelist = array();
    	    if(!empty($data)){
    	    	foreach ($data as $key => $value) {
    	    		$nameArray = explode(" ", $value->name);
    	    		$student = new Student;
    	    		$student->first_name = reset($nameArray);
    	    		$student->last_name = end($nameArray);
    	    		$student->email = $value->email;
    	    		$student->course_name = $value->course;
    	    		$student->manager = $request->get('manager');
    	    		try {
          				if (!$student->save()) {
                			$arr[] = $nameArray;
            			}
        			} catch(QueryException $e) {
            			$arr[] = $nameArray;
        			}
            	}
            }
		}
		if ($ar) {
			return redirect('/main');
		} else {
			 return redirect()->back()->withInput()->withErrors($arr);
		}
		
	}
}