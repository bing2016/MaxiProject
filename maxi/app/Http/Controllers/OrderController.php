<?php

namespace App\Http\Controllers;

use App\Student;
use App\EmailModule;
use App\Department;
use App\Course;
use App\User;
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

    public function getEmail($id, $manager_name)
    {
        $student = Student::where('id', $id)->first();
        $content = $this->getEmailDetail($student, $manager_name);
        $content_string = '';
        foreach ($content as $value) {
            $content_string = $content_string.$value;
        }
        return view('sendEmail')->with('content', $content_string)->withStudent($student);
    }

    public function getEmailDetail($student, $manager_name)
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
        $blurb = $blurb['blurb'];
        $link = Course::where('name', $course)->select('link')->first();

        //$welcomenew = preg_replace('/\n/','<br/>',$welcome['content']);//replace \n with <br/>, return correct, email has <br/>
        $welcomenew = ($welcome['content']);
        //$applynew = preg_replace('/\n/','<br />',$apply['content']);//replace \r\n, nothing changes
        $applynew = ($apply['content']);

        $welcomenew = preg_replace('{{{first_name}}}', $first_name, $welcomenew);
        $welcomenew = preg_replace('{{{link}}}', $link, $welcomenew);
        $welcomenew = preg_replace('{{{department}}}', $department, $welcomenew);
        $officeInfonew = preg_replace('{{{manager_name}}}', $manager_name, $officeInfo['content']);
        $welcomenew = preg_replace('{{{blurb}}}', $blurb, $welcomenew);
        $feesnew = $fees['content'];
        return ['welcomenew'=>$welcomenew, 'applynew'=>$applynew, 'nationalityPart'=>$nationalityPart, 'fees'=>$feesnew, 'officeInfo'=>$officeInfonew];
    }
    
    //general email
    public function generalEmail(Request $request)
    {
        $studentList = Student::where('is_emailed', false)->where('is_send_now', true)->get();
        foreach ($studentList as $student)
        {
            $email = $student['email'];
            //return $this->getEmailDetail($student, $request->manager_name);
            Mail::send('emails.general_email', $this->getEmailDetail($student, $request->manager_name), function($message) use($email)
            {
                $message->to( $email, 'some guy')->subject('Welcome to the University of Sheffield!');
            });

            $student->is_emailed = true;
            $student->save();
        }
    }

    public function specialEmail(Request $request)
    {
        $student = Student::where('id', $request->get('id'))->first();
        if($student==null)
        {
            return redirect()->back()->withInput()->withErrors("Invalid student ID.");
        }
        else
        {
            $content = $request->get('content');
            $email = $student['email'];
        }

        Mail::send('emails.special_email', ['content'=>$content], function($message) use($email)
        {
            $message->to( $email, 'some guy')->subject('Welcome to the University of Sheffield!');
        });
        $student->is_emailed = true;
        $student->save();
        return redirect('/main');
    }

    //reset passwaord email
    public function resetEmail(Request $request)
    {
        $manager = User::where('email', $request->get('email'))->first();
        if($manager==null)
        {
            return redirect()->back()->withInput()->withErrors("Invalid email.");
        }
        else
        {
            $email = $manager->email;
            $name = $manager->name;
        }

        Mail::send('emails.reset_password', ['name'=>$name], function($message) use($email)
        {
            $message->to( $email, 'some guy')->subject('Reset your password');
        });

        return redirect('/login');
    }
}
