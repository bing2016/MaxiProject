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
        $level_of_study = $student['level'];

        $welcome1 = EmailModule::where('name', 'welcome1')->select('content')->first();
        $welcome2 = EmailModule::where('name', 'welcome2')->select('content')->first();
        $welcome3 = EmailModule::where('name', 'welcome3')->select('content')->first();
        $link = Course::where('name', $course)->select('link')->first();
        $welcome1 = $welcome1['content'];
        $welcome2 = $welcome2['content'];
        $welcome3 = $welcome3['content'];
        $link = $link['link'];
        $welcome1 = preg_replace('{{{first_name}}}', $first_name, $welcome1);
        $welcome3 = preg_replace('{{{course}}}', $course, $welcome3);
        $welcome3 = preg_replace('{{{link}}}', $link, $welcome3);

        $blurb = Department::where('name', $department)->select('blurb')->first();
        $blurb = $blurb['blurb'];

        $university1 = EmailModule::where('name', 'university1')->select('content')->first();
        $university2 = EmailModule::where('name', 'university2')->select('content')->first();
        $university3 = EmailModule::where('name', 'university3')->select('content')->first();
        $university4 = EmailModule::where('name', 'university4')->select('content')->first();
        $university1 = $university1['content'];
        $university2 = $university2['content'];
        $university3 = $university3['content'];
        $university4 = $university4['content'];

        $fees1 = EmailModule::where('name', 'fees1')->select('content')->first();
        $fees2 = EmailModule::where('name', 'fees2')->select('content')->first();
        $fees3 = EmailModule::where('name', 'fees3')->select('content')->first();
        $fees_link = EmailModule::where('type', 'fees')->where('name', 'fees'.$level_of_study)->select('content')->first();//////////////////////////////////////////
        $fees1 = $fees1['content'];
        $fees2 = $fees2['content'];
        $fees3 = $fees3['content'];
        $fees_link = $fees_link['content'];
        $fees2 = preg_replace('{{{fees_link}}}', $fees_link, $fees2);

        $funding = EmailModule::where('name', 'funding')->select('content')->first();//nationality blurb
        $funding = $funding['content'];
        $nationalityBlurb = EmailModule::where('type', 'country')->where('name', $nationality)->select('content')->first();
        if($nationalityBlurb==null)
        {
            $nationalityBlurb = EmailModule::where('type', 'country')->where('name', 'default')->select('content')->first();
            $nationalityBlurb = $nationalityBlurb['content'];
        }
        else
        {
            $nationalityBlurb = $nationalityBlurb['content'];
        }

        $apply = EmailModule::where('name', 'apply')->select('content')->first();
        $applyPart = EmailModule::where('type', 'applying')->where('name', 'applying'.$level_of_study)->select('content')->first();//////////////////////////////////////////
        $apply = $apply['content'];
        $applyPart = $applyPart['content'];

        $ending1 = EmailModule::where('name', 'ending1')->select('content')->first();
        $ending2 = EmailModule::where('name', 'ending2')->select('content')->first();
        $officeInfo1 = EmailModule::where('name', 'officeInfo1')->select('content')->first();
        $officeInfo2 = EmailModule::where('name', 'officeInfo2')->select('content')->first();
        $ending1 = $ending1['content'];
        $ending2 = $ending2['content'];
        $officeInfo1 = $officeInfo1['content'];
        $officeInfo2 = $officeInfo2['content'];

        /*$nationalityList = EmailModule::where('name', 'America')->select('content')->first();

        */

        return ['welcome1'=>$welcome1, 'welcome2'=>$welcome2, 'welcome3'=>$welcome3, 'blurb'=>$blurb, 'university1'=>$university1, 'university2'=>$university2, 'university3'=>$university3, 'university4'=>$university4, 'fees1'=>$fees1, 'fees2'=>$fees2, 'fees3'=>$fees3, 'funding'=>$funding, 'nationalityBlurb'=>$nationalityBlurb, 'apply'=>$apply, 'applyPart'=>$applyPart, 'ending1'=>$ending1, 'ending2'=>$ending2, 'manager_name'=>$manager_name, 'officeInfo1'=>$officeInfo1, 'officeInfo2'=>$officeInfo2];
    }
    
    //general email
    public function generalEmail(Request $request)
    {
        $manager = $request->manager;
        $manager_email = User::where('name', $manager)->select('email')->first();
        $manager_email = $manager_email['email'];
        $studentList = Student::where('is_emailed', false)->where('is_send_now', true)->where('manager', $manager)->get();

        foreach ($studentList as $student)
        {
            $email = $student['email'];
            $studnet_name = $student['first_name'];
            //return $this->getEmailDetail($student, $request->manager_name);
            Mail::send('emails.general_email', $this->getEmailDetail($student, $request->manager_name), function($message) use($email, $manager_email, $studnet_name, $manager)
            {
                $message->from($manager_email, $manager);
                $message->to( $email, $studnet_name)->subject('Welcome to the University of Sheffield!');
            });

            $student->is_emailed = true;
            $student->save();
        }
    }

    public function specialEmail(Request $request)
    {
        $student = Student::where('id', $request->get('id'))->first();
        $studnet_name = $student['first_name'];
        $manager = $request->get('manager');
        $manager_email = User::where('name', $manager)->select('email')->first();
        $manager_email = $manager_email['email'];
        if($student==null)
        {
            return redirect()->back()->withInput()->withErrors("Invalid student ID.");
        }
        else
        {
            $content = $request->get('content');
            $email = $student['email'];
        }

        Mail::send('emails.special_email', ['content'=>$content], function($message) use($email, $manager_email, $studnet_name, $manager)
        {
            $message->from('tma8@sheffield.ac.uk', $manager);
            $message->to( $email, $studnet_name)->subject('Welcome to the University of Sheffield!');
        });
        $student->is_emailed = true;
        $student->save();
        $newDirect = '/main/'.$manager;
        return redirect($newDirect);
    }

    //reset passwaord email
    public function resetEmail(Request $request)
    {

        $manager = User::where('email', $request->get('email'))->first();
        if($manager==null)
        {
            //return redirect()->back()->withInput()->withErrors("Invalid email.");
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
