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
        DB::table('students')->insert([
        	'surname' => 'Tom',
        	'fist_name' => 'Potter',
        	'nationality' => 'America',
        	'email' => 'tp@gmail.com',
        	'phone_number' => 637184913,

            'department' => 'Computer Science',
            'course' => 'SSIT',
            'level' => 'postgraduate',
            'start_year' => 2020,
            'is_special' => true,
            'questions' => 'Why so serious?',
            'is_special' => true,
            'regesition_number' => 12345678,

        	'manager' => 'Sam Wenchester',
            'place' => 'bar',
            'source' => 'online',
        	'date' => '2017-12-12',
        	'is_emailed' => false,
        	'is_highlight' => true,
        	'is_download' => false,
        	]);
    }
}