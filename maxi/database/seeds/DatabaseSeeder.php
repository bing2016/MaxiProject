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
        	'forename' => 'Potter',
        	'subject' => 'Computer Science',
        	'nationality' => 'America',
        	'email' => 'tp@gmail.com',
        	'phone_number' => 637184913,
        	'questions' => 'Why so serious?',
        	'source' => 'online',
        	'manager' => 'Sam Wenchester',
        	'is_general' => true,
        	'is_emailed' => false,
        	'is_highlight' => true,
        	'is_special' => true,
        	'is_download' => false,
        	]);
    }
}
