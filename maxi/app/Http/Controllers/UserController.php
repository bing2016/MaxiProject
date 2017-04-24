<?php

namespace App\Http\Controllers;

use Mail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        //$users = DB::table('users')->get();
        $users = DB::select('select * from users');

        return view('user.index', ['users' => $users]);
    }

    public function show()
    {
        return view('show');
    }

    public function sendEmailReminder(Request $request, $id)
    {
        $user = User::findOrFail($id);

        Mail::send('emails.reminder', ['user' => $user], function ($m) use ($user) {
            $m->from('tma8@sheffield.ac.uk', 'Your Application');

            $m->to($user->email, $user->name)->subject('Your Reminder!');
        });
    }
}