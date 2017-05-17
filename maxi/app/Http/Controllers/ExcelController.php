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

		if ($arr[0] == null) {
			$students = Student::where('is_download', 0)->where('manager', $request->get('manager'))->get();
		} else {
			$students = Student::whereIn('id', $arr)->where('manager', $request->get('manager'))->get();
		}

		$info[] = array('first_name' => 'FirstName', 
						'middle_name' => 'MiddleName',
						'last_name' => 'LastName',
						'nationality' => 'Country',
						'date' => 'Birthday',
						'email' => 'Email',
						'phone' => 'Phone',
						'country' => 'Country', 
						'department' => 'Department', 
						'course' => 'Course',
						'level' => 'Level',
						'start_year' => 'StartYear',
						'questions' => 'Questions',
						'applied' => 'IsApplied',
						'registration_number' => 'RegistrationNumber',
						'manager' => 'Manager',
						'place' => 'Place',
						'source' => 'Source',
						'is_emailed' => 'IsEmailed',
						'is_send_now' => 'Is send now');

		foreach ($students as $key => $value) {
			//$name = $value['first_name'].$value['middle_name'].$value['last_name'];
			$info[] = array(                
				              
						//'name' => $name,
						'first_name' => $value['first_name'],  
						'middle_name' => $value['middle_name'],  
						'last_name' => $value['last_name'], 
						'nationality' => $value['nationality'], 
						'date' => $value['date'], 
						'email' => $value['email'],  
						'phone' => $value['phone_number'],
						'country' => $value['nationality'],
						'department' => $value['department_name'],
						'course' => $value['course_name'],
						'level' => $value['level'],
						'start_year' => $value['start_year'],
						'questions' => $value['questions'],
						'applied' => $value['is_applied'],
						'registration_number' => $value['registration_number'],
						'manager' => $value['manager'],
						'place' => $value['place'],
						'source' => $value['source'],
						'is_emailed' => $value['is_emailed'],
						'is_send_now' => $value['is_send_now'],
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

    	    		$student = new Student;
    	    		$student->first_name = $value->firstname;
    	    		$student->middle_name = $value->middlename;
    	    		$student->last_name = $value->lastname;
    	    		$student->date = $value->birthday;
    	    		$student->nationality = $value->country;
    	    		$student->email = $value->email;
    	    		$student->phone_number = $value->phone;

					$student->department_name = $value->department;
        			$student->course_name = $value->course;
        			$student->source = $value->source;
        			$student->level = $value->level;
        			$student->is_send_now = $value->is_send_now; //more question
        			$student->questions = $value->questions;
        			$student->start_year = $value->startyear;
        			$student->is_applied = $value->isapplied;
        			$student->registration_number = $value->registrationnumber;
        			$student->is_send_now = $value->is_send_now;

        			$student->manager = $request->get('manager');
        			$student->place = $request->place;

					if (null != $request->questions){
            				$student->is_highlight = true;
        			}

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
		if ( null == $arr) {
			return redirect('/main/'.$request->get('manager'));
		} else {
			 return redirect()->back()->withInput()->withErrors($arr);
		}
		
	}
}