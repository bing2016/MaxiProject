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
            'is_send_now' => false,
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
            'is_send_now' => true,
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
            'is_send_now' => false,
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
            'is_send_now' => true,
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
            
            You expressed a particular interest in our {{department}}.  You can find more information about the relevant programme(s) here: {{link}}.

            {{blurb}}

            ',
            ]);
        DB::table('email_modules')->insert([
            'type' => 'normal',
            'name' => 'apply',
            'manager' => 'Mr. John',
            'content' => '
            *How to Apply* 
            The application is done through our website: http://www.sheffield.ac.uk/postgraduate/taught/apply/applying.   

            I do hope that you have found this information helpful. If you cannot find what you are looking for, please do not hesitate to contact me and I will get back to you. We are here to help.
            ',
            ]);
        DB::table('email_modules')->insert([
            'type' => 'normal',
            'name' => 'fees',
            'manager' => 'Mr. John',
            'content' => '
            *Fees and Scholarships*
            Tuition fees can be found here: https://www.sheffield.ac.uk/ssid/fees/pgt/lookup (select your department and then overseas). Please note - this page will be updated soon for 2017 fees.

            We are pleased to offer a range of scholarships specifically to students from Brazil.  We have automatic scholarships worth £2000-£2500, merit based scholarships worth 50% of the tuition fee and also Santander scholarships worth £5000 for both undergraduate and postgraduate students.

            You may also wish to apply for a Chevening scholarship for study at Sheffield: http://www.chevening.org/brazil.  Please note the application deadline for Chevening is 8 November.

            ',
            ]);
        DB::table('email_modules')->insert([
            'type' => 'normal',
            'name' => 'officeInfo',
            'manager' => 'Mr. John',
            'content' => '
            Best wishes,
            --
            {{manager_name}}
            International Officer
            Global Engagement
            The University of Sheffield
            Level 1, The Arts Tower
            Western Bank
            Sheffield
            S10 2TN
            Tel: +44(0)114 222 8025
            ',
            ]);
        DB::table('email_modules')->insert([
            'type' => 'country',
            'name' => 'America',
            'manager' => 'Mr. John',
            'content' => 'Welcome to America kid!',
            ]);
        DB::table('email_modules')->insert([
            'type' => 'country',
            'name' => 'China',
            'manager' => 'Mr. John',
            'content' => 'Welcome to China kid!',
            ]);
        DB::table('email_modules')->insert([
            'type' => '_default',
            'name' => '',
            'manager' => '',
            'content' => '',
            ]);
        DB::table('departments')->insert([
            'name' => 'Computer Science',
            'link' => 'Http:/sdfasdf',
            'blurb' => 'XXXXXXXX',
            ]);
        DB::table('departments')->insert([
            'name' => '_default',
            'link' => '',
            'blurb' => '',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'china',
            ]);
        DB::table('courses')->insert([
            'name' => 'SSIT',
            'link' => 'Http:/sdfasdf',
            ]);
        DB::table('courses')->insert([
            'name' => '_default',
            'link' => '',
            ]);

    }
}
