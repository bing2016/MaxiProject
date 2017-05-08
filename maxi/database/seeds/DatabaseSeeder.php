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
            'name' => '_default',
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
            'name' => 'Abkhazia',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Afghanistan',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Albania',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Algeria',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'American Samoa',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Andorra',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Angola',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Anguilla',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Antigua and Barbuda',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Argentina',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Armenia',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Aruba',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Australia',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Austria',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Azerbaijan',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Bahamas, The',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Bahrain',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Bangladesh',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Barbados',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Belarus',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Belgium',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Belize',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Benin',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Bermuda',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Bhutan',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Bolivia',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Bosnia and Herzegovina',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Botswana',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Brazil',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Bolivia',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'British Indian Ocean Territory',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Brunei',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Bulgaria',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Burkina Faso',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Burundi',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Cambodia',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Cameroon',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Canada',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Cape Verde',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Cayman Islands',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Central African Republic',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Chad',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Chile',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'China',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Canada',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Christmas lsland',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Cocos (Keeling) Islands',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Colombia',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Comoros',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Congo (Brazzaville)',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Congo (Kinshasa)',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Cook Islands',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Costa Rica',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Côte d‘Ivoire',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Croatia',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Cuba',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Curaçao',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Cyprus',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Czech Republic',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Denmark',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Djibouti',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Dominica',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Dominican Republic',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Ecuador',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Egypt',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'El Salvador',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Equatorial Guinea',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Eritrea',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Estonia',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Ethiopia',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Falkland Islands(Islas Malvinas)',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Faroe Islands',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Fiji',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Finland',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'France',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'French Polynesia',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Gabon',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Gambia, The',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Georgia',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Germany',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Ghana',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Gibraltar',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Greece',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Greenland',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Grenada',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Guam',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Guatemala',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Guernsey',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Guinea',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Guinea-Bissau',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Guyana',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Haiti',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Honduras',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Hong Kong',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Hungary',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Iceland',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'India',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Indonesia',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Iran',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Iraq',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Ireland',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Israel',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Italy',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Jamaica',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Japan',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Jersey',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Jordan',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Kazakhstan',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Kenya',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Kiribati',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Korea, South',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Kosovo',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Kuwait',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Laos',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Latvia',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Lebanon',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Lesotho',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Liberia',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Libya',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Liechtenstein',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Lithuania',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Luxembourg',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Macao',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Macedonia',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Madagascar',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Malawi',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Malaysia',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Maldives',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Mali',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Malta',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Isle of Man',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Marshall Islands',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Mauritania',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Mauritius',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Mayotte',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Mexico',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Micronesia',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Moldova',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Monaco',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Mongolia',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Montenegro',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Montserrat',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Morocco',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Mozambique',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Myanmar',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Nagorno-Karabakh',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Namibia',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Nauru',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Nepal',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'New Caledonia',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'New Zealand',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Niger',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Nigeria',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Niue',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Norfolk Island',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Northern Cyprus',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Northern Mariana Islands',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Norway',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Oman',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Pakistan',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Palau',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Palestine',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Panama',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Papua New Guinea',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Paraguay',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'People’s Republic of Korea',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Peru',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Philippines',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Pitcairn Islands',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Poland',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Portugal',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Pridnestrovie',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Puerto Rico',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Qatar',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Réunion',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Romania',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Russia',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Rwanda',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Saint Helena',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Saint Christopher and Nevis',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Saint Lucia',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Saint Pierre and Miquelon',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Saint Vincent and the Grenadines',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Samoa',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'San Marino',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'São Tomé and Príncipe',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Saudi Arabia',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Senegal',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Serbia',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Seychelles',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Sierra Leone',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Singapore',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Sint Maarten',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Slovakia',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Slovenia',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Solomon Islands',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Somali',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Somaliland',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'South Africa',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'South Ossetia',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'South Sudan',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Spain',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Sri Lanka',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Sudan',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Suriname',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Svalbard',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Swaziland',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Sweden',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Switzerland',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Syria',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Tajikistan',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Tanzania',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Thailand',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Timor-Leste',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Togo',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Tokelau',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Tonga',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Trinidad and Tobago',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Tunisia',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Turkey',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Turkmenistan',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Turks and Caicos Islands',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Tuvalu',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Uganda',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Ukraine',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'United Arab Emirates',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'United Kingdom',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'United States',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Uruguay',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Uzbekistan',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Vanuatu',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'The Holy See（Vatican City）',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Venezuela',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Vietnam',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Virgin Islands, British',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Virgin Islands, United States',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Wallis and Futuna',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Western Sahara',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Yemen',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Zambia',
            ]);
        DB::table('nationalities')->insert([
            'name' => 'Zimbabwe',
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
