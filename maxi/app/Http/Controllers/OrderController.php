<?php

namespace App\Http\Controllers;

use App\Student;
use App\EmailModule;
use App\Department;
use App\Course;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //general email
    public function generalEmail()
    {
        $studentList = Student::where('is_emailed', false)->where('is_special', false)->get();
        foreach ($studentList as $student)
        {
            $first_name = $student['first_name'];
            $nationality = $student['nationality'];
            $department = $student['department_name'];
            $course = $student['course_name'];
            $email = $student['email'];

            $welcome = EmailModule::where('name', 'welcome')->select('content')->first();
            $apply = EmailModule::where('name', 'apply')->select('content')->first();
            $fees = EmailModule::where('name', 'fees')->select('content')->first();
            $officeInfo = EmailModule::where('name', 'officeInfo')->select('content')->first();

            $nationalityList = EmailModule::where('name', 'America')->select('content')->first();

            if($nationalityList==null)
            {
                $nationalityPart = '';
            }
            else
            {
                $nationalityPart = $nationalityList['content'];
            }

            $blurb = Department::where('name', $department)->select('blurb')->first();
            $link = Course::where('name', $course)->select('link')->first();

            //$welcomenew = preg_replace('/\n/','<br/>',$welcome['content']);//replace \n with <br/>, return correct, email has <br/>
            $welcomenew = ($welcome['content']);
            //$applynew = preg_replace('/\n/','<br />',$apply['content']);//replace \r\n, nothing changes
            $applynew = ($apply['content']);

            $welcomenew = preg_replace('{{{first_name}}}', $first_name, $welcomenew);
            $welcomenew = preg_replace('{{{link}}}', $link, $welcomenew);
            $welcomenew = preg_replace('{{{department}}}', $department, $welcomenew);
            //$welcomenew = preg_replace('{{{blurb}}}', $blurb, $welcomenew);

            Mail::send('emails.general_email', ['welcomenew'=>$welcomenew, 'applynew'=>$applynew, 'nationalityPart'=>$nationalityPart, 'fees'=>$fees['content'], 'officeInfo'=>$officeInfo['content']], function($message) use($email)
            {
                $message->to( $email, 'some guy')->subject('Welcome to the University of Sheffield!');
            });

            $student->is_emailed = true;
            $student->save();
        }
    }

    //reset passwaord email
    public function resetEmail($request)
    {
        $manager = User::findOrFail($request->get('email'));
        $email = $manager['email'];
        $name = $namager['name'];
        Mail::send('emails.reset_password', ['name'=>$name], function($message) use($email)
        {
            $message->to( $email, 'some guy')->subject('Reset your password');
        });
    }

    public function specialEmail(Request $request)
    {
        $student = Student::findOrFail($request->get('id'));
        $content = $request->get('content');
        $email = $student['email'];
        Mail::send('emails.special_email', ['content'=>$content], function($message) use($email)
        {
            $message->to( $email, 'some guy')->subject('Welcome to the University of Sheffield!');
        });

        $student->is_emailed = true;
        $student->save();
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
