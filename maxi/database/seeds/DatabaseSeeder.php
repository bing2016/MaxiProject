<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        /*DB::table('users')->insert([
            'account_id' => 001,
            'username' => 'test_user@qq.com',
            'password' => 'password',
            'title' => 'Mr.',
            'forename' => 'James',
            'surname' => 'Bond',
            'add_time' => '2017/01/01 08:00:00',
            'upd_time' => '2017/01/01 09:00:00',
            ]);
        DB::table('users')->insert([
            'account_id' => 002,
            'username' => 'test_user2@qq.com',
            'password' => 'newpassword',
            'title' => 'Mrs.',
            'forename' => 'Lilith',
            'surname' => 'Bond',
            'add_time' => '2017/01/02 08:00:00',
            'upd_time' => '2017/01/02 09:00:00',
            ]);*/
        DB::table('students')->insert([
            'first_name' => 'Tom',
            'middle_name' => '',
            'last_name' => 'Cat',
            'nationality' => 'America',
            'email' => 'tma8@sheffield.ac.uk',
            'phone_number' => 637184913,
            'department_name' => 'Computer Science',
            'course_name' => 'SSIT',
            'level' => 'Master',
            'start_year' => '2015',
            'is_special' => false,
            'questions' => '',
            'is_applied' => true,
            'registration_number' => '88392304',
            'manager' => 'Sam Wenchester',
            'place' => 'New York',
            'date' => '2014/04/14',
            'source' => 'online',
            'is_highlight' => true,
            'is_emailed' => false,
            'is_download' => false,
            'created_at' => '2015/01/02 08:00:00',
            'updated_at' => '2015/01/03 09:00:00',
            ]);
        DB::table('students')->insert([
            'first_name' => 'Jerry',
            'middle_name' => 'Tiny',
            'last_name' => 'Mice',
            'nationality' => 'America',
            'email' => '1347933776@qq.com',
            'phone_number' => 637158253,
            'department_name' => 'Computer Science',
            'course_name' => 'SSIT',
            'level' => 'Master',
            'start_year' => '2016',
            'is_special' => true,
            'questions' => 'Why so serious?',
            'is_applied' => true,
            'registration_number' => '88457324',
            'manager' => 'Dean Wenchester',
            'place' => 'New York',
            'date' => '2014/05/01',
            'source' => 'online',
            'is_highlight' => true,
            'is_emailed' => false,
            'is_download' => false,
            'created_at' => '2015/01/02 08:00:00',
            'updated_at' => '2015/01/03 09:00:00',
            ]);
        DB::table('students')->insert([
            'first_name' => 'San',
            'middle_name' => '',
            'last_name' => 'Zhang',
            'nationality' => 'China',
            'email' => '148305235@qq.com',
            'phone_number' => 693284913,
            'department_name' => 'Computer Science',
            'course_name' => 'SSIT',
            'level' => 'Master',
            'start_year' => '2017',
            'is_special' => false,
            'questions' => '',
            'is_applied' => true,
            'registration_number' => '50212304',
            'manager' => 'Russel Peters',
            'place' => 'Shanghai',
            'date' => '2016/04/14',
            'source' => 'online',
            'is_highlight' => true,
            'is_emailed' => false,
            'is_download' => false,
            'created_at' => '2017/01/02 08:00:00',
            'updated_at' => '2017/01/03 09:00:00',
            ]);
        DB::table('students')->insert([
            'first_name' => 'Si',
            'middle_name' => '',
            'last_name' => 'Li',
            'nationality' => 'China',
            'email' => 'ls@gmail.com',
            'phone_number' => 637153989,
            'department_name' => 'Computer Science',
            'course_name' => 'SSIT',
            'level' => 'Master',
            'start_year' => '2017',
            'is_special' => true,
            'questions' => 'Any discount?',
            'is_applied' => false,
            'registration_number' => '83518601',
            'manager' => 'Chris Rock',
            'place' => 'Beijing',
            'date' => '2016/04/17',
            'source' => 'online',
            'is_highlight' => true,
            'is_emailed' => false,
            'is_download' => false,
            'created_at' => '2017/01/02 08:00:00',
            'updated_at' => '2017/01/03 09:00:00',
            ]);
        DB::table('email_modules')->insert([
            'type' => 'normal',
            'name' => 'welcome',
            'manager' => 'Mr. John',
            'content' => '
            Dear {{first_name}},

            Thank you for coming to speak with the University of Sheffield recently. I hope you found the discussion enjoyable, interesting and informative. This e-mail contains information about your subject area, the University itself and advice on funding options.
            
            You expressed a particular interest in our {{department}}.  You can find more information about the relevant programme(s) here: {{nationality}}.

            {{blurb}}

            '
            ]);
        DB::table('email_modules')->insert([
            'type' => 'normal',
            'name' => 'apply',
            'manager' => 'Mr. John',
            'content' => '
            *How to Apply* 
            The application is done through our website: http://www.sheffield.ac.uk/postgraduate/taught/apply/applying.   

            I do hope that you have found this information helpful. If you cannot find what you are looking for, please do not hesitate to contact me and I will get back to you. We are here to help.
            '
            ]);
        DB::table('departments')->insert([
            'name' => 'Computer Science',
            'link' => 'Http:/sdfasdf',
            'blurb' => 'XXXXXXXX',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'china',
            ]);
        DB::table('courses')->insert([
            'name' => 'SSIT',
            'link' => 'Http:/sdfasdf',
            ]);

    }
}
