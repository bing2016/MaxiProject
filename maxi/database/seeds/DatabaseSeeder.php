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
            'birthday' => '1990/03/21',
            'email' => 'tom@gmail.com',
            'phone_number' => 637184913,
            'department' => 'Computer Science',
            'course' => 'SSIT',
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
            'birthday' => '1990/03/21',
            'email' => 'jerry@gmail.com',
            'phone_number' => 637158253,
            'department' => 'Computer Science',
            'course' => 'SSIT',
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
            'birthday' => '1992/06/10',
            'email' => '148305235@qq.com',
            'phone_number' => 693284913,
            'department' => 'Computer Science',
            'course' => 'SSIT',
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
            'birthday' => '1995/10/04',
            'email' => 'ls@gmail.com',
            'phone_number' => 637153989,
            'department' => 'Computer Science',
            'course' => 'SSIT',
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
    }
}
