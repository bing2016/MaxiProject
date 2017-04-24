<?php

namespace App\Http\Controllers;

use App\Student;
use App\EmailModule;
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
    public function generalEmail(Request $request)
    {
        $student = Student::findOrFail($request->get('id'));        
        $welcome = EmailModule::where('name', 'welcome')->select('content')->first();
        $apply = EmailModule::where('name', 'apply')->select('content')->first();

        $first_name = $student['first_name'];
        $nationality = $student['nationality'];
        $department = $student['department'];
        $email = $student['email'];

        //$welcomenew = preg_replace('/\n/','<br/>',$welcome['content']);//replace \n with <br/>, return correct, email has <br/>
        $welcomenew = nl2br($welcome['content']);
        //$applynew = preg_replace('/\n/','<br />',$apply['content']);//replace \r\n, nothing changes
        $applynew = nl2br($apply['content']);

        $welcomenew = preg_replace('{{{first_name}}}', $first_name, $welcomenew);
        $welcomenew = preg_replace('{{{nationality}}}', $nationality, $welcomenew);
        $welcomenew = preg_replace('{{{department}}}', $department, $welcomenew);

        Mail::send('emails.general_email', ['welcomenew'=>$welcomenew, 'applynew'=>$applynew], function($message) use($email)
        {
            $message->to( $email, 'some guy')->subject('Welcome to the University of Sheffield!');
        });
        //return $welcomenew;
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
