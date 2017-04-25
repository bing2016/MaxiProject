<?php

namespace App\Http\Controllers;

use App\Order;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
/*
    public function send()
    {
        Mail::send('emails.template', ['name'=>'Joker', 'department'=>'SSIT', 'nationality'=>'China'], function($message)
        {
            $message->to('1347933776@qq.com', 'some guy')->subject('Welcome to the University of Sheffield');
        });
    }

    public function sendSpecial()
    {
        Mail::send('emails.special', ['email'=>'modified email'], function($message)
        {
            $message->to('1347933776@qq.com', 'some guy')->subject('Welcome to the University of Sheffield');
        });
    }
*/
    public function sendGeneral($studentID)
    {
        $first_name = DB::table('students')->where('id',$studnetID)->value('first_name');
        $department = DB::table('students')->where('id',$studnetID)->value('department');
        $nationality = DB::table('students')->where('id',$studnetID)->value('nationality');
        $emailAddress = DB::table('students')->where('id',$studnetID)->value('email');

        
        Mail::send('emails.special', ['email'=>'modified email'], function($message)
        {
            $message->to('1347933776@qq.com', 'some guy')->subject('Welcome to the University of Sheffield');
        });
    }

    public function send($emailAddress, $emailContent)
    {
        Mail::send($emailContent, function($message)
        {
            $message->to($emailAddress, 'some guy')->subject('Welcome to the University of Sheffield');
        });
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
