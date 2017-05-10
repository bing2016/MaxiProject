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
        ///////////////////////////////////////////////////////////////////////////////////////
            //Email template
        DB::table('email_modules')->insert([
            'type' => 'normal',
            'name' => 'welcome1',
            'manager' => 'Ruth Lauener',
            'content' => 'Dear {{first_name}},',
            ]);
        DB::table('email_modules')->insert([
            'type' => 'normal',
            'name' => 'welcome2',
            'manager' => 'Ruth Lauener',
            'content' => '
            Thank you for coming to speak with the University of Sheffield recently. I hope you found the discussion enjoyable, interesting and informative. This e-mail contains information about your subject area, the University itself and advice on funding options.
            ',
            ]);
        DB::table('email_modules')->insert([
            'type' => 'normal',
            'name' => 'welcome3',
            'manager' => 'Ruth Lauener',
            'content' => '
            You expressed a particular interest in our {{course}}.  You can find more information about the relevant programme(s) here: {{link}}.
            ',
            ]);

        DB::table('email_modules')->insert([
            'type' => 'normal',
            'name' => 'university1',
            'manager' => 'Ruth Lauener',
            'content' => '
            *The University of Sheffield*
            ',
            ]);
        DB::table('email_modules')->insert([
            'type' => 'normal',
            'name' => 'university2',
            'manager' => 'Ruth Lauener',
            'content' => '
            You can watch a video about Sheffield here: https://youtu.be/XkXUy-AJSaA.
            ',
            ]);
        DB::table('email_modules')->insert([
            'type' => 'normal',
            'name' => 'university3',
            'manager' => 'Ruth Lauener',
            'content' => '
            As a place to study at, Sheffield offers both the highest academic quality and a great lifestyle. The University is consistently ranked in the World Top 100 - the QS Rankings 2016-17 position Sheffield at number 84. Sheffield was a founding member of the Russell Group – the Ivy League of UK universities - and we’re proud to have had 6 Nobel Prizes for former staff or students.
            ',
            ]);
        DB::table('email_modules')->insert([
            'type' => 'normal',
            'name' => 'university4',
            'manager' => 'Ruth Lauener',
            'content' => '
            In terms of lifestyle, Sheffield is statistically the safest and one of the cheapest cities in the UK for students to live in. It’s also the UK’s greenest city and The Peak District, the oldest national park in the UK, is only 15 minutes’ drive from the University. Sheffield was No 3 in the UK in the survey of ‘Student Experience 2017’ carried out by the Times Higher Education publication. This survey measures the students’ assessment of their university across a range of academic, social and environmental parameters. In the same survey, our Student’s Union (the heart of social life on campus) has been voted Number 1 in the UK for the last 9 years.
            ',
            ]);

        DB::table('email_modules')->insert([
            'type' => 'normal',
            'name' => 'fees1',
            'manager' => 'Ruth Lauener',
            'content' => '
            *Fees and Living Costs*
            ',
            ]);
        DB::table('email_modules')->insert([
            'type' => 'normal',
            'name' => 'fees2',
            'manager' => 'Ruth Lauener',
            'content' => '
            Tuition fees can be found here: {{fees_link}}
            ',
            ]);
        DB::table('email_modules')->insert([
            'type' => 'normal',
            'name' => 'fees3',
            'manager' => 'Ruth Lauener',
            'content' => '
            On top of the fees, the government advise that you should budget £1015 per month for living costs - however this will be more than you need for Sheffield as we have some of the lowest living costs in the UK (we’re 25% cheaper than living in London and 10% cheaper than the national average).
            ',
            ]);
        
        DB::table('email_modules')->insert([
            'type' => 'normal',
            'name' => 'funding',
            'manager' => 'Ruth Lauener',
            'content' => '
            *Scholarships and Funding*
            ',
            ]);

        DB::table('email_modules')->insert([
            'type' => 'normal',
            'name' => 'apply',
            'manager' => 'Ruth Lauener',
            'content' => '
            *Applying*
            ',
            ]);


        DB::table('email_modules')->insert([
            'type' => 'normal',
            'name' => 'ending1',
            'manager' => 'Ruth Lauener',
            'content' => '
            I do hope that you have found this information helpful. If you cannot find what you are looking for, please do not hesitate to contact me and I will get back to you. We are here to help.
            ',
            ]);
        DB::table('email_modules')->insert([
            'type' => 'normal',
            'name' => 'ending2',
            'manager' => 'Ruth Lauener',
            'content' => '
            Best wishes,
            ',
            ]);

        DB::table('email_modules')->insert([
            'type' => 'normal',
            'name' => 'officeInfo1',
            'manager' => 'Ruth Lauener',
            'content' => '
            Global Engagement,',
            ]);
        DB::table('email_modules')->insert([
            'type' => 'normal',
            'name' => 'officeInfo2',
            'manager' => 'Ruth Lauener',
            'content' => '
            The University of Sheffield
            ',
            ]);
            ///////////////////////////////////////////////////////////////////////////////////////
            //Fees blurb
        DB::table('email_modules')->insert([
            'type' => 'fees',
            'name' => 'feesUT',
            'manager' => 'Ruth Lauener',
            'content' => 'http://ssd.dept.shef.ac.uk/fees/ug/ug-fees.php',
            ]);
        DB::table('email_modules')->insert([
            'type' => 'fees',
            'name' => 'feesPGT',
            'manager' => 'Ruth Lauener',
            'content' => 'http://www.sheffield.ac.uk/ssid/fees/pgt/lookup',
            ]);
        DB::table('email_modules')->insert([
            'type' => 'fees',
            'name' => 'feesPGR',
            'manager' => 'Ruth Lauener',
            'content' => 'http://www.sheffield.ac.uk/ssid/fees/pgr',
            ]);
        DB::table('email_modules')->insert([
            'type' => 'fees',
            'name' => 'feesFN',
            'manager' => 'Ruth Lauener',
            'content' => 'http://usic.sheffield.ac.uk/fees',
            ]);
        DB::table('email_modules')->insert([
            'type' => 'fees',
            'name' => 'feesPMP',
            'manager' => 'Ruth Lauener',
            'content' => 'http://usic.sheffield.ac.uk/fees',
            ]);
            ///////////////////////////////////////////////////////////////////////////////////////
            //Apply blurb
        DB::table('email_modules')->insert([
            'type' => 'applying',
            'name' => 'applyingUT',
            'manager' => 'Ruth Lauener',
            'content' => '
            This is done through UCAS online at www.ucas.co.uk
            ',
            ]);
        DB::table('email_modules')->insert([
            'type' => 'applying',
            'name' => 'applyingPGT',
            'manager' => 'Ruth Lauener',
            'content' => '
            The application is done online and there is no charge to apply – useful information about this process can be found here: http://www.sheffield.ac.uk/postgraduate/taught/apply/applying.  
            ',
            ]);
        DB::table('email_modules')->insert([
            'type' => 'applying',
            'name' => 'applyingPGR',
            'manager' => 'Ruth Lauener',
            'content' => '
            The first step when applying for a PhD is to find an appropriate supervisor.  We have a very useful supervisor search tool that makes this easy: http://www.sheffield.ac.uk/postgraduate/research/areas.

            After identifying the appropriate supervisor, the next step for a PhD is to write the proposal and there is some advice on how to write a proposal here: http://www.sheffield.ac.uk/postgraduate/research/sheffield/proposal.  Essentially the 4 main questions are:
            • What’s your idea?
            • What makes your idea relevant?
            • What’s your plan?
            • What resources do you need?
            After you have sent your proposal to the department - if they feel able to supervise you then they will ask you to submit a formal application which you can do online through our website: http://www.sheffield.ac.uk/postgraduate/research/apply/applying.
            ',
            ]);
        DB::table('email_modules')->insert([
            'type' => 'applying',
            'name' => 'applyingFN',
            'manager' => 'Ruth Lauener',
            'content' => '
            To apply for our International Foundation Year it’s a quick and easy process.  You apply direct through the website at http://usic.sheffield.ac.uk/how-to-apply/apply-now.
            ',
            ]);
        DB::table('email_modules')->insert([
            'type' => 'applying',
            'name' => 'applyingPMP',
            'manager' => 'Ruth Lauener',
            'content' => '
            To apply for our International Pre-Masters Programme it’s a quick and easy process.  You apply direct through the website at http://usic.sheffield.ac.uk/how-to-apply/apply-now. 
            ',
            ]);


        DB::table('email_modules')->insert([
            'type' => 'country',
            'name' => 'Mexico',
            'manager' => 'Ruth Lauener',
            'content' => '
            The University of Sheffield is pleased to offer a range of scholarships to high achieving international students.  To see what’s available for your country please visit: http://www.sheffield.ac.uk/international/enquiry/money/scholarships.

            The University of Sheffield has for many years been extremely popular with Mexican students and we have around 160 CONACYT-funded Mexican students, one of thelargest numbers in the UK. As a result we now have former Sheffield students in senior positions throughout Mexico, including Rectors of major universities and the Directors of CONACYT research centres. The large number of Sheffield graduates in important posts in Mexico ensures that your Sheffield degree is really recognised and valued throughout the country.
            ',
            ]);
        DB::table('email_modules')->insert([
            'type' => 'country',
            'name' => 'default',
            'manager' => 'Ruth Lauener',
            'content' => '
            The University of Sheffield is pleased to offer a range of scholarships to high achieving international students.  To see what’s available for your country please visit: http://www.sheffield.ac.uk/international/enquiry/money/scholarships.
            ',
            ]);
        DB::table('email_modules')->insert([
            'type' => '_default',
            'name' => '_default',
            'manager' => '',
            'content' => '',
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



        DB::table('departments')->insert([
            'name' => 'Automatic Control and Systems Engineering',
            'link' => 'Http:/sdfasdf',
            'blurb' => 'The Department of Automatic Control and Systems Engineering is the largest of its kind in Europe (about 25 professors) and was ranked 1st for research output in the UK‘s most recent National Research Excellence Framework in which over 115 institutions were independently evaluated.  We’re the only Department in the UK, and one of the best in the world, dedicated to Control and Systems Engineering.  The Department has some of the world‘s most cited engineers and does work for NASA, the European Space Agency, NATO and many of the world’s leading companies. ',
            ]);

        DB::table('departments')->insert([
            'name' => 'Aerospace',
            'link' => '',
            'blurb' => 'The Aerospace degree in Sheffield is one of the highest ranked in the UK and has outstanding industrial connections.  The degree is taught across 4 departments in the Faculty of Engineering.  The university has developed world-leading expertise and unique facilities for industriial collaboration in aerospace manufacture.  These include the ‘Advanced Manufacturing Research Centre with Boeing’; several Rolls-Royce research centres including the ‘Rolls-Royce Factory of the Future’; and the ‘BAe Systems University Technology Centre’.

                The University of Sheffield has the second largest research income in Engineering of all UK universities (after Imperial College).  In 2012 Sheffield overtook Cambridge and our engineering research income is now around $125m each year - and it is growing fast. ',
            ]);

        DB::table('departments')->insert([
            'name' => 'Animal and Plant Sciences',
            'link' => '',
            'blurb' => 'The Department of Animal and Plant Sciences is one of the most respected whole-organism bioscience departments in the world.  Much of the department‘s research underpins developments in agriculture and has led to breakthroughs in our understanding of ecology and biodiversity.  It was ranked 5th (equal with Oxford and above Cambridge) in the UK’s most recent Research Excellence Framework in which over 115 institutions were evaluated.  On average 6 academic papers a year from the department are published in the top journals Science and Nature.',
            ]);

         DB::table('departments')->insert([
            'name' => 'Archaeology',
            'link' => '',
            'blurb' => 'The Department of Archaeology is one of the largest and most important Archaeology departments in the UK and has significant expertise across the whole spectrum of Archaeology from Paleoanthropology to Archaeomaterials.  The Department is in the top 10 in the UK for research according to the latest national ranking (REF 2014) and was recently placed top 25 in the world in the latest QS international rankings (2017).  ',
            ]);

          DB::table('departments')->insert([
            'name' => 'Architecture',
            'link' => '',
            'blurb' => 'Architecture has been taught at the University of Sheffield since 1908 and the School of Architecture is ranked in the top 4 in the UK (with the Department of Landscape and the Department of Urban Studies).  It occupies 9 floors of the iconic Arts Tower with extensive design suites and classroom space.  In collaboration with the Department of Civil and Structural Engineering the School of Architecture hosts on of 3 national ‘Royal Academy of Engineering Centres of Excellence in Sustainable Building Design‘.  Sheffield‘s Architecture students consistently win prizes at national and international competitions.  In order to gain admission, students will usually need to prepare a relevant portfolio - guidance on this can be found here: Postgraduate:  http://www.sheffield.ac.uk/architecture/postgraduate/masters/apply and Undergraduate: http://www.sheffield.ac.uk/polopoly_fs/1.320243!/file/portfolioK100KK13.pdf. ',
            ]);


            DB::table('departments')->insert([
            'name' => 'Biblical Studies',
            'link' => '',
            'blurb' => 'The Department of Religion, Theology and the Bible dates from 1947 and has been one of the leading international centres of teaching and research in a very broad range of historical, archaeological, textual and exegetic studies in relation to the bible and religion.  The Department was placed 8th for research quality in the UK in the most recent independent national evaluation of university research (RAE).  It is closely linked to the Department of Philosophy, also a top national and international research centre. ',
            ]);

             DB::table('departments')->insert([
            'name' => 'Biomedical Science',
            'link' => '',
            'blurb' => 'The Department of Biomedical Science is one of the leading bioscience departments in the UK and has a focus on cellular, developmental and sensory biology.  It has a long experience in leading research in stem cells and regenerative medicine. The department houses aquaria for up to 200,000 zebra fish  and has conducted ground-breaking work using model organisms.  It was ranked the UK‘s top Biomedical department for research in the  most recent national university research evaluation (REF 2014) in which over 115 institutions were independently evaluated.',
            ]);

            DB::table('departments')->insert([
            'name' => 'Chemical Engineering',
            'link' => '',
            'blurb' => '"The Department of Chemical and Biological Engineering is one of the leading Chemical Engineering departments in the UK.  It has a particular focus on Environment and Energy Engineering, and also on Bioprocess Engineering.   It was ranked 4th for research quality in the UK‘s most recent national evaluation of university research (REF) in which all of the UK’s 115 institutions were independently assessed.

            The University of Sheffield has the second largest research income in Engineering of all UK universities (after Imperial College).  In 2012 Sheffield overtook Cambridge and our engineering research income is now around $125m each year - and it is growing fast.  "',
            ]);

            DB::table('departments')->insert([
            'name' => 'Chemistry',
            'link' => '',
            'blurb' => 'During the past 50 years the Department of Chemistry has seen 3 Nobel prizes awarded to either its staff or its former students.  This success continues to the present day as shown in the Research Excellence Framework 2014, which rated 98% of our research as world-class or internationally excellent. The Department has around 40 faculty and 100 PhD students.',
            ]);

            DB::table('departments')->insert([
            'name' => 'Civil Engineering',
            'link' => '',
            'blurb' => '"The Department of Civil and Structural Engineering has a world-wide reputation for both structural and environmental engineering and is currently ranked 47th in the World (QS).  In addition to having a focus on construction and structural dynamics, the Department is recognised internationally for its research on land and water engineering, conservation and management.   It was ranked 4th for research excellence in the UK‘s most recent National Research Excellence Framework (2014) in which over 115 institutions were independently evaluated.  In collaboration with the School of Architecture the department hosts on of 3 national ’Royal Academy of Engineering Centres of Excellence in Sustainable Building Design‘.

            The University of Sheffield has the second largest research income in Engineering of all UK universities (after Imperial College).  In 2012 Sheffield overtook Cambridge and our engineering research income is now around $125m each year - and it is growing fast.  "',
            ]);

            DB::table('departments')->insert([
            'name' => 'Computer Science',
            'link' => '',
            'blurb' => '"The Department of Computer Science undertakes world-class teaching and research.  It was ranked 5th in the UK,above Oxford and Cambridge, in the most recent national research evaluation (REF 2014) in which all UK departments were assessed for quality.  The department has outstanding strengths in Natural Language Processing, Machine Learning and Computer Security.  Students may be able to participate in the student-run company Genesys Solutions which competes for and delivers commercial software solutions enabling students to experience a real-life software engineering as part of their studies.  

            The University of Sheffield has the second largest research income in Engineering (including Computer Science) of all UK universities (after Imperial College).  In 2012 Sheffield overtook Cambridge and our engineering research income is now around $125m each year - and it is growing fast.  To see a video of our amazing facilities for undergrad students, ‘The Diamond’, please watch the video at: https://youtu.be/-dnBP_JKRmw."',
            ]);

            DB::table('departments')->insert([
            'name' => 'Dentistry',
            'link' => '',
            'blurb' => 'The School of Dentistry has long been one of the UK’s top research-led Dentistry departments.  It enjoys an international reputation for the quality of its research and was the 2nd ranked Dental School for research quality in the UK in the most recent national research quality evaluation (REF 2014) in which the UK‘s 115 universities were evaluated.  The departments strengths cover the full range from clinical dentistry to dental technology and dental public health.',
            ]);

            DB::table('departments')->insert([
            'name' => 'Economics',
            'link' => '',
            'blurb' => 'The Department of Economics has an international reputation across its areas of expertise which include applied economics and econometrics including labour, health, education, development and international finance.  The department has interests in macroeconomics and a wide range of micro-economic themes, with a particular strength in Health Economics.  It was again one of the top-rated departments in this year‘s student satisfaction survey.',
            ]);

            DB::table('departments')->insert([
            'name' => 'Education',
            'link' => '',
            'blurb' => 'The School of Education, one of the oldest in the UK, has a long history of scholarship in its field.  The School of Education was ranked 4th in the latest national evaluation of research quality (REF 2014), with an even higher ranking (2nd) for the impact of its research.  Along with a suite of Masters programmes, several doctoral degrees (taught, research and clinical) are available.',
            ]);

            DB::table('departments')->insert([
            'name' => 'Electrical and Electronic Engineering',
            'link' => '',
            'blurb' => '"The Department of Electronic and Electrical Engineering at Sheffield has for many years enjoyed a reputation as one of the country’s leading departments in the field for teaching and research.  With top 10 research rankings, a 96% student satisfaction rate and 95% employability of its students it performs exceptionally well in all league tables.  Few departments have such strong links with major industrial companies - Nissan, Siemens and Rolls-Royce all have research centres within it and it hosts the national III-V semiconductor laboratories which cover well over 500 square meters of clean rooms.

                The University of Sheffield has the second largest research income in Engineering of all UK universities (after Imperial College).  In 2012 Sheffield overtook Cambridge and our engineering research income is now around $125m each year - and it is growing fast. "',
            ]);

            DB::table('departments')->insert([
            'name' => 'ELTC',
            'link' => '',
            'blurb' => 'Sheffield‘s English Language Teaching Centre provides language preparation for students wishing to study at the university and general English courses available at all levels.  Fully accredited by all the top UK accrediting bodies, it was awarded 5 points of excellence by the British Council, which puts it in the top 10% of all accredited UK language schools.',
            ]);

            DB::table('departments')->insert([
            'name' => 'English',
            'link' => '',
            'blurb' => 'The School of English has strengths across the full spectrum of the discipline, from linguistics and language acquisition to literature, theatre and creative writing.  The MA in Applied Linguistics with TESOL is an internationally established programme for developing new skills and competences in teachers of English.  The School of English is one of the UK’s leading centres of research into English language and literature.',
            ]);

            DB::table('departments')->insert([
            'name' => 'Geography',
            'link' => '',
            'blurb' => 'The Department of Geography is one of the UK‘s leading centre for teaching and research in the discipline.   It has become the focal point for the University‘s research into climate change, environmental management and international development.  Thee department was ranked 7th in the UK‘s most recent National Research Assessment Exercise in which over 115 institutions were independently evaluated.  95% of the department‘s research was assessed as either world leading or internationally recognised.  It was also ranked 35th in the world for Geography in 2015 by the international rankings agency QS.',
            ]);

            DB::table('departments')->insert([
            'name' => 'History',
            'link' => '',
            'blurb' => '"The Department of History is one of the largest, most active and successful centres for teaching and historical research in the UK. Our historians are engaged in cutting-edge research in a huge variety of fields which range from the first century right up to the twenty first, and with particular strengths in British, European, African and American history.

            Our historians are international leaders in their fields who contribute to public as well as academic debates, regularly appearing on and providing advice to radio and television. As well the writers of award-winning books, the Department’s staff includes prominent members of professional bodies, funding agencies and leading journals.

            Our outstanding record of research has been consistently recognised by external bodies. We‘re ranked among the UK‘s top three History departments for the impact and quality of our research in the Research Excellence Framework 2014.   In 2016 the QS World Rankings have placed us in the top 100 History departments Worldwide.
            "',
            ]);

            DB::table('departments')->insert([
            'name' => 'Human Communication Science',
            'link' => '',
            'blurb' => 'During the past 50 years the Department of Chemistry has seen 3 Nobel prizes awarded to either its staff or its former students.  This success continues to the present day as shown in the Research Excellence Framework 2014, which rated 98% of our research as world-class or internationally excellent. The Department has around 40 faculty and 100 PhD students.',
            ]);

            DB::table('departments')->insert([
            'name' => 'Information School',
            'link' => '',
            'blurb' => 'The School of Information at Sheffield has been ranked No 1 in research in the UK in the independent national Research Assessment Exercise continuously since 1996.  It enjoys a global reputation for its scholarship and is invariably very highly placed in all league tables.  The department‘s activities range from traditional fields of library and information management to the computational tools required to support information systems to new areas such as ‘big data‘ and chemoinformatics.',
            ]);

            DB::table('departments')->insert([
            'name' => 'Journalism',
            'link' => '',
            'blurb' => '"Sheffield‘s Department of Journalism is the number 1 Journalism department in the UK according to the Complete University Guide 2016. When the Department of Journalism Studies was established in 1994, we committed to establishing an active research programme focusing on the theory and practice of journalism and news production, and political communication.

            Since then our world-class research staff have made the department a leading international centre for research in media and communications.  In the 2014 Research Excellence Framework 100 per cent of our work was rated world-leading or internationally excellent for impact.  A number of courses have been designed specially for overseas students, eliminating modules in UK media law which would otherwise be a requirement in programmes which are nationally accredited."',
            ]);

            DB::table('departments')->insert([
            'name' => 'Landscape',
            'link' => '',
            'blurb' => 'The Department of Landscape is the UK‘s premier Landscape teaching department and one of the world‘s leading Landscape research centres.   It was ranked 4th in the UK‘s most recent independent national research evaluation, the REF 2014 (assessed with UK Architecture departments), in which over 115 institutions were independently evaluated.  At the same time the department‘s professors conduct professional work of international importance: Two Sheffield professors were responsible for the planting design of the Olympic Park for the 2012 London Olympic Games, an area of 10 hectares.',
            ]);

            DB::table('departments')->insert([
            'name' => 'Languages and Cultures',
            'link' => '',
            'blurb' => 'The School of Languages and Cultures runs a suite of programmes around translation and intercultural communication within our internationally renowned School of Modern Languages and Linguistics.  In addition to mainstream programmes (MA Translation, available in for a range of languages) the School offers modern specialist programmes such as MA Screen Translation and MA Intercultural Communication.',
            ]);

            DB::table('departments')->insert([
            'name' => 'Law',
            'link' => '',
            'blurb' => 'The Sheffield Law School is over 100 years old and has always been one of the UK‘s top departments.  Students regularly win prizes and national and international competitions at the highest level.  The teaching has been rated as excellent.  The Law School also has a reputation for world leading research: in the most recent independent national evaluation of research quality (REF 2014) Sheffield was placed 10th in the UK, alongside Oxford and Warwick',
            ]);

            DB::table('departments')->insert([
            'name' => 'the Management School',
            'link' => '',
            'blurb' => '"Sheffield School of Management is an ideal place to study Finance, Business and Management programmes.  The staff have expertise over a broad range of topics within the field and the School has an international reputation for teaching and research.  In the most recent independent national evaluation of research quality (REF 2014), the Management School was ranked No 14 out of over 100 universities assessed.  

            The Management School is one of only 70 in the world whose programmes have satisfied the accrediting bodies in the UK, Europe and the USA (AMBA, EQUIS and AACSB whilst being one of the highest rated for research in the UK.  In 2014 the Management School moved into a new building which has been completely renovated with outstanding facilities and equipment for the study of business management and administration."',
            ]);

            DB::table('departments')->insert([
            'name' => 'MBA',
            'link' => '',
            'blurb' => '"Entrepreneurship, leadership and consultancy – essential skills for the modern executive and the foundations of the Sheffield MBA.

            In addition to providing a theoretical academic framework in which to structure your learning, we place a strong focus on hands-on, applied experience. Throughout the Sheffield MBA you will apply the theory you have explored in learning sessions to real-world scenarios. Our External Relations team and dedicated Employability Hub provide you with the opportunity to access to a range of organisations; they will also support and guide you on your route to an extraordinary career.

            MBA teaching is based exclusively in the Sheffield University Management School building, which offers an ideal environment for you to study, collaborate and socialise. You will also become part of our worldwide network of MBA alumni, giving you access to social and business networking opportunities and careers support.  I should also mention that our Management School is Triple Crown Accredited - placing it in the top 1% of business schools worldwide.

            Our senior MBA team are always keen to speak to strong MBA candidates - if you would like to arrange a Skype interview with them to find out more about the programme please let me know and I will be happy to facilitate this."',
            ]);

            DB::table('departments')->insert([
            'name' => 'the Department of Materials Science and Engineering',
            'link' => '',
            'blurb' => '"The Department of Materials Science and Engineering is the largest Materials department in the UK with expertise covering metals, glass and ceramics, polymers and composites, nanomaterials, biomaterials and nuclear engineering.  The department houses one of the UK‘s leading additive manufacturing laboratories.  With a history going back over 100 years it is one of the world‘s foremost Materials departments, one of only two in the world to be invited to be part of the World Materials Research Institute Forum.  In the most recent independent national evaluation of research (REF 2014), Sheffield was the 2nd ranked Materials department in the UK for research quality.  By 2018 a new $50m Materials Research Institute (the Royce Institute) will be completed at Sheffield in a major new development.  

                The University of Sheffield has the second largest research income in Engineering of all UK universities (after Imperial College).  In 2012 Sheffield overtook Cambridge and our engineering research income is now around $125m each year - and it is growing fast."',
                ]);

            DB::table('departments')->insert([
            'name' => 'the School of Maths and Statistics',
            'link' => '',
            'blurb' => 'With 43 professors Sheffield‘s School of Mathematics and Statistics is large and has international research outputs in all fields.  The field of Probability and Statistics has a suite of Masters programmes and enjoys a top reputation within the UK and beyond and was ranked highly in the UK‘s most recent national evaluation of research in which over 115 institutions were independently evaluated.',
            ]);

            DB::table('departments')->insert([
            'name' => 'the Department of Molecular Biology and Biotechnology',
            'link' => '',
            'blurb' => 'The Department of Molecular Biology and Biotechnology has been a leading international centre of expertise in molecular biology, genetics and biochemistry since the days of Professor Hans Krebs, who was awarded the Nobel Prize for his discovery of the Krebs cycle, undertaken at Sheffield.  The department was ranked 1st for Biomedical Science and 5th for Biology in the UK‘s most recent independent national evaluation of research (REF 2014) in which over 115 institutions were independently evaluated.',
            ]);

            DB::table('departments')->insert([
            'name' => 'the Department of Mechanical Engineering',
            'link' => '',
            'blurb' => '"The Department of Mechanical Engineering in Sheffield is one of the highest ranked in the UK and has outstanding industrial connections.  The University has the ‘Advanced Manufacturing Research Centre with Boeing‘; several Rolls-Royce research centres including the ‘Rolls-Royce Factory of the Future‘; and the ‘BAe Systems University Technology Centre‘ and the recently announced McLaren research centre and production centre.  It was ranked 4th for research quality in the UK‘s most recent (2014) national evaluation of research in which over 115 institutions were independently evaluated.

            The University of Sheffield has the second largest research income in Engineering of all UK universities (after Imperial College).  In 2012 Sheffield overtook Cambridge and our engineering research income is now around $125m each year - and it is growing fast. "',]);

            DB::table('departments')->insert([
            'name' => 'Medicine',
            'link' => '',
            'blurb' => '"The Faculty of Medicine, Dentistry and Health is one of the major UK centres for education and research in health and related subjects. With origins dating back to 1828, the faculty has a long-standing tradition of excellence in clinical education and research.  The Faculty was ranked 11th in the UK for Clinical Medicine research quality in the most recent national evaluation of research.

            Three Nobel Prizes for Medicine have been awarded to staff and former students of the University.  The University has been a pioneer of delivering teaching and research in ‘translational‘ medicine in which new scientic developments can pass directly from the laboratory to clinical implementation.   There are particular strengths in this in Cancer and in Neurodegenerative Diseases.  Programmes in Molecular Medicine have been run for 20 years at Sheffield and the University is a leading exponent of molecular and post-genomic approaches to Medicine.  The Medical School is No 4 in the world for osteoporosis and bone disease and is in the top 10 world-wide for infertility research."',
            ]);

            DB::table('departments')->insert([
            'name' => 'the Department of Music',
            'link' => '',
            'blurb' => 'Sheffield‘s Music department is consistently ranked in the top 10 in the UK.  With fifteen permanent members of academic staff, a varying number of fellows and assistants according to research projects, and well over 100 graduate students, the Department of Music has a strong and diverse research profile.  Our research is organised into six main areas; Composition, Ethnomusicology, Musicology, Music Technology, Performance and the Psychology of Music.  In the most recent independent national evaluation of research (REF 2014) Sheffield‘s Music Department was ranked 6th in the UK.  ' ,
            ]);

            DB::table('departments')->insert([
            'name' => 'Nursing',
            'link' => '',
            'blurb' => 'For 20 years the School of Nursing and Midwifery has been delivering undergraduate and postgraduate degrees.  The School supports evidence-based practice and has extremely close links with local hospital and health services.' ,
            ]);

            DB::table('departments')->insert([
            'name' => 'the Department of Philosophy',
            'link' => '',
            'blurb' => 'The Department of Philosophy has very high international standing and is one of the largest Philosophy  Departments in the UK.  It was not only ranked 2nd for research quality in the most recent independent national evaluation of research (above Oxford, Cambridge and the London School of Economics) in which 115 universities were assessed but is also regularly ranked in the world top 30 departments of Philosophy. ',
            ]);

            DB::table('departments')->insert([
            'name' => 'the Department of Physics',
            'link' => '',
            'blurb' => 'The Department of Physics is one of the UK‘s leading centres of excellence in Physics teaching and research.  It was ranked 10th (above Cambridge) in the most recent independent national evaluation of research (REF 2014).  The activities of the department span the whole range of Physics from Astronomy and Astrophysics (with a particular interest in Dark Matter) to Condensed Matter Physics to Quantum Physics.  There is major research in photovoltaics, in which the University is working on the discovery of new materials for solar panels.  The Department of Physics is also the host to interdisciplinary teaching and research in Nanotechnology.',
            ]);

            DB::table('departments')->insert([
            'name' => 'the Department of Politics',
            'link' => '',
            'blurb' => 'Sheffield‘s Department of Politics was ranked no. 3 in the UK‘s  government‘s most recent national evaluation of research quality in 2014 (and was 2nd for the impact of its research).  This once again placed the department above Oxford and Cambridge, as it has been since 1996.  115 UK universities were independently assessed by international panels for their research quality.  The size and quality of the department enable world class teaching and research to take place in the three key areas of political theory; governance and public policy; and international studies.',
            ]);

            DB::table('departments')->insert([
            'name' => 'the Department of Psychology',
            'link' => '',
            'blurb' => 'Sheffield‘s Department of Psychology has been one of the UK‘s leading departments for two decades.  With significant expertise in social, experimental and clinical psychology the department has a broad base of world-class research on which its teaching programmes are based.  It has particular strengths in neuro-imaging and cognitive and computational neuroscience.',
            ]);

            DB::table('departments')->insert([
            'name' => 'School of Health and Related Research',
            'link' => '',
            'blurb' => 'The School of Health and Related Research is the largest group of international level researchers in its field in the UK.  The areas of expertise focus around Public Health, Health Economics and Decision Making, Clinical Trials and Health Services Evaluation.   The School was ranked 4th for the power of its research in the UK‘s most recent independent national evaluation of research (REF 2014) in which over 115 institutions were independently evaluated.',
            ]);

            DB::table('departments')->insert([
            'name' => 'School of East Asian Studies',
            'link' => '',
            'blurb' => 'Sheffield‘s School of East Asian Studies was founded over 50 years ago.  It remains the largest centre for teaching Japanese Studies in the UK and the second largest for Korean Studies.  Chinese Studies was added around 20 years ago making Sheffield the best centre for studying East Asia with a comprehensive view of the region, its societies, its politics, international relations and its languages.  The department was ranked 12th in the most recent national evaluation of research quality (REF 2014).',
            ]);

            DB::table('departments')->insert([
            'name' => 'University of Sheffield International College',
            'link' => '',
            'blurb' => 'University of Sheffield International College (USIC) takes students from countries with a 12-year school system and prepares them for undergraduate study at the University of Sheffield, where UK students normally enter after 13 years of schooling.  Several different pathways are offered within the preparatory courses.  Each pathway programme is tailored specifically to the degree subjects to which students may progress from that pathway.  Progression to the University of Sheffield is guaranteed if the correct grades are achieved and USIC helps place all other students in the most suitable universities.  While you are a student at USIC you will have access to all the facilities which are open to students on our undergraduate degree programmes.  USIC is located on the University campus.',
            ]);

            DB::table('departments')->insert([
            'name' => 'the Department of Sociological Studies',
            'link' => '',
            'blurb' => 'The Department of Sociological Studies covers four broad fields: sociology, social policy, social work and social anthropology.   It has achieved outstanding ratings for both teaching and research.  The department was ranked 10th in the UK‘s most recent independent evaluation of research quality (REF 2014) in which over 115 institutions were independently evaluated.  The Department is also ranked in the world top 100 for both Sociology and Social Policy by the international ratings agency QS.',
            ]);

            DB::table('departments')->insert([
            'name' => 'the Department of Urban Studies and Planning',
            'link' => '',
            'blurb' => 'For many years the Department of Urban Studies and Planning has been the UK‘s leading planning department.  In the most recent independent national  evaluation of research (REF 2014), the department - along with Architecture and Landscape - was ranked in 4th position for research and research impact.  The Department has outstanding international links and it is one of the world‘s major centres for teaching and research in planning.  The Department‘s programmes are accredited by the Royal Town Planning Institute (RTPI).',
            ]);

            DB::table('departments')->insert([
            'name' => 'the Department of Hispanic Studies',
            'link' => '',
            'blurb' => 'The Department of Hispanic Studies has expertise over a broad range of study - cultural, literary and linguistic - with a particular focus on Latin America.  The department‘s expertise extends from Spanish to Portuguese and Catalan Studies and it is renowned for its extramural activities, in particular related to music. ',
            ]);

            DB::table('departments')->insert([
            'name' => 'the Faculty of Engineering and the Department of Biomedical Science',
            'link' => '',
            'blurb' => '"Sheffield‘s Bioengineering degree is an interdisciplinary degree taking in teaching from the Department of Biomedical Science (No 1 in the UK) and from various departments across the Faculty of Engineering.  The University of Sheffield has the second largest research income in Engineering of all UK universities (after Imperial College).  Research in Bioengineering at Sheffield covers medical instruments, artificial limbs, medical imaging and computer simulation.  The university is the lead partner in a huge European research project on the ‘Virtual Physiological Human‘.

            In 2012 Sheffield overtook Cambridge and our engineering research income is now around $125m each year - and it is growing fast.',
            ]);

            DB::table('departments')->insert([
            'name' => 'the Faculty of Social Sciences',
            'link' => '',
            'blurb' => 'The faculty of Social Science is the largest in the University and includes many world-renowned departments.  The 3 departments of Architecture, Landscape and Town and Regional Planning form the most comprehensive group of top-ranked centres of learning and research in the built environment in the UK.  Law and Politics were both ranked third in the UK for their research quality in the latest national evaluation of research and the Management School is one of only 59 in the world to hold the triple accreditation of AMBA (UK), EQUIS (Europe) and AACSB (USA).  It was also 14th out of over 100 Business and Management Schools for research in the latest evaluation.  Much of the faculty‘s work is interdisciplinary and it hosts very large numbers of international students from across the world.',
            ]);

            DB::table('departments')->insert([
            'name' => 'the Faculty of Arts and Humanities',
            'link' => '',
            'blurb' => 'The Faculty of Arts and Humanities consists of seven leading academic departments with outstanding reputations and with a record for research quality which was once again fully demonstrated in the UK government‘s most recent (Dec 2014) national evaluation of research quality (REF).  In addition to the individual departments, the Faculty also hosts the interdisciplinary Humanities Research Institute (HRI).   Established over 10 years ago the HRI has a large number of ongoing projects with a particular focus on digitisation within the humanities.',
            ]);

            DB::table('departments')->insert([
            'name' => 'Science Communication',
            'link' => '',
            'blurb' => 'The MSc Science Communication brings together the expertise of the university‘s Faculty of Science and the communications power of the Department of Journalism, the UK‘s leading Journalism depattment.  Over the years staff and former students of the university have been awarded 6 Nobel Prizes and the Faculty of Science has committed itself to participating in activities which add to the public understanding and awareness of science.  The university delivers an annual ‘Festival of Science Week‘, held every year in Sheffield, which is one of the largest in the country and has audiences ranging from primary school children to adult audiences of the citizens of Sheffield.  Several of the university‘s professors have been invited to deliver the annual ‘Royal Institute Christmas Lectures‘ on national television in the Christmas period.',
            ]);

            DB::table('departments')->insert([
            'name' => 'the Faculty of Engineering',
            'link' => '',
            'blurb' => 'The City of Sheffield has been associated with engineering excellence for over 200 years, as it was one of the starting points of the industrial revolution (with the invention of industrial scale steel production).  The University of Sheffield has helped drive that reputation forward over the last 100 years through the world-renowned strength in teaching and research of its Faculty of Engineering.  Indeed, it now has the second largest research income in Engineering of all UK universities (after Imperial College).  In 2012 Sheffield overtook Cambridge and our engineering research income is now around $125m each year - and it is growing fast.  ‘The Diamond‘, our new Engineering teaching building costing US$140m opened in September 2015 and is a huge success with students (please watch the video at: https://youtu.be/-dnBP_JKRmw).  The world‘s most advanced manufacturing research centre, ‘Factory 2050‘, opened in March 2016 and a further 40 hectares of additional land have been bought for new Engineering research facilities.  Sheffield is one of the world‘s leading centres of engineering research and innovation.',
            ]);

            DB::table('departments')->insert([
            'name' => 'the Faculty of Science',
            'link' => '',
            'blurb' => 'The Faculty of Science contains 3 Biology departments, Maths, Physics, Chemistry and Psychology.  Over the last 60 years 4 Nobel Prizes have been won by  staff or former students of Sheffield‘s Faculty of Science.  All of the departments have immense research experience and are among the very highest ranked in their field.  The faculty recruits students and staff from around the world and enjoys an international reputation for quality..',
            ]);

            DB::table('departments')->insert([
            'name' => 'Advanced Manufacturing Research Centre',
            'link' => '',
            'blurb' => 'The Advanced Manufacturing Research Centre with Boeing (AMRC) is the world‘s premier centre for academia-industry research in Advanced Manufacturing.  The AMRC focuses on 5 areas: Machining; Composites; Assembly; Additive Manufacturing; Casting.  All the AMRC‘s equipment is full-scale industrial equipment certificated to industry standards.  It has become the UK government‘s model for academia-industry collaboration and, although it was only started in 2001, it now has an annual research income of around US $70m per year.  In 2011 Boeing awarded the AMRC the title ‘Boeing International Supplier of the Year‘, the first time this award had gone to the UK and the first time it had ever been made to a university.  The AMRC cannot (by law) supply parts to Boeing or its other partners.  It supplies technological breakthroughs which make it a focus for the world‘s leading companies in Advanced Manufacturing.',
            ]);

            DB::table('departments')->insert([
            'name' => 'Biosciences (range)',
            'link' => '',
            'blurb' => 'The University of Sheffield excels in the area of biosciences.  Whereas many universities only offer one department to cover all aspects - we actually have three dedicated departments - one in Biomedical Science, one in Animal and Plant Sciences and a third in Molecular Biology and Biotechnology.  In the most recent Research Excellence Framework (REF 2014) we were ranked 1st in the UK for our Biomedical Research and 5th in the UK for our Biological Science research.  Our facilities and research expertise are hard to beat.',
            ]);

            DB::table('departments')->insert([
            'name' => 'Management School - Creative and Cultural Industries',
            'link' => '',
            'blurb' => '"Sheffield may be one of the best places in the UK to take a course like this. The percentage of people working in the creative industries here is much higher than the national average. We have the best theatre scene outside London, the largest independent cinema, and galleries with links to the Tate and the VandA.

            This course provides general training in management with the emphasis on understanding and managing creative enterprises and cultural organisations.
            There are  field trips and guest lecturers from the industries. You can also apply to base your dissertation on a project with a high profile arts organisation or event in the city."',
            ]);

            DB::table('departments')->insert([
            'name' => 'Management School - Marketing',
            'link' => '',
            'blurb' => 'At the University of Sheffield our Triple Crown Accredited Management School offers three courses in marketing; the MSc Global Marketing Management offers the chance to spend a semester in Hong Kong Baptist University - so a truly global perspective; the MSc International Management and Marketing offers the chance to combine these two areas and the MSc Marketing Management Practice is our pure marketing programme.',
            ]);
            


        DB::table('courses')->insert([
            'name' => 'Accounting, Governance and Financial Management - MSc',
            'link' => 'https://www.sheffield.ac.uk/management/study/msc/courses/msc-accounting-governance-financial-management',
            //'department_id' => 0,
            ]);
        DB::table('courses')->insert([
            'name' => 'Acquired Communication Disorders - Msc/Diploma/Certificate',
            'link' => 'https://www.sheffield.ac.uk/hcs/prospective_pg/taught/acd',
            // 'department_id' => 0,
            ]);
         DB::table('courses')->insert([
            'name' => 'Additive Manufacturing and Advanced Manufacturing Technologies - MSc(Res)',
            'link' => 'https://https://www.sheffield.ac.uk/postgraduate/taught/courses/engineering/mechanical/additive-manufacturing-advanced-manufacturing-technologies-msc-res',

           //  'department_id' => 0,
            ]);
          DB::table('courses')->insert([
            'name' => 'Advanced Computer Science - MSc',
            'link' => 'https://https://www.sheffield.ac.uk/dcs/postgraduate-taught/acs',
           // 'department_id' => 0,
            ]);
           DB::table('courses')->insert([
            'name' => 'Advanced Control and Systems Engineering - MSc',
            'link' => 'https://www.sheffield.ac.uk/acse/masters/control-systems/index',
            // 'department_id' => 0,
            ]);
            DB::table('courses')->insert([
            'name' => 'Advanced Control and Systems Engineering (with Industrial Management) - MSc',
            'link' => 'http://www.sheffield.ac.uk/acse/masters/industrial-management' ,
            //'department_id' => 0,
            ]);
             DB::table('courses')->insert([
            'name' => 'Advanced Control and Systems Engineering (with Industry) - MSc',
            'link' => 'https://www.sheffield.ac.uk/acse/masters/industry',
            //'department_id' => 0,
            ]);
            DB::table('courses')->insert([
            'name' => 'Advanced Electrical Machines, Power Electronics and Drives - MSc',
            'link' => 'https://www.sheffield.ac.uk/eee/pgt/1.435523' ,
            //'department_id' => 0,
            ]);
            DB::table('courses')->insert([
            'name' => 'Advanced Emergency Care - MSc',
            'link' => 'https://www.sheffield.ac.uk/scharr/prospective_students/masters/aec/index' ,
            //'department_id' => 0,
            ]);
            DB::table('courses')->insert([
            'name' => 'Advanced Manufacturing Management - Executive MBA',
            'link' => 'http://www.sheffield.ac.uk/management/study/mba/emba' ,
            //'department_id' => 0,
            ]);
            DB::table('courses')->insert([
            'name' => 'Advanced Manufacturing Technologies - MSc(Res)',
            'link' => 'https://www.sheffield.ac.uk/mecheng/prospectivemsc/advmantech' ,
            //'department_id' => 0,
            ]);
            DB::table('courses')->insert([
            'name' => 'Advanced Materials Manufacturing - MSc (Eng)',
            'link' => 'http://www.sheffield.ac.uk/materials/masters/advmat' ,
             //'department_id' => 0,
            ]);
            DB::table('courses')->insert([
            'name' => 'Software Engineering, Advanced - MSc(Eng)',
            'link' => 'https://www.sheffield.ac.uk/dcs/postgraduate-taught/ased',
             //'department_id' => 0,
            ]);
            DB::table('courses')->insert([
            'name' => 'Software Systems and Internet Technology - MSc',
            'link' => 'https://www.sheffield.ac.uk/dcs/postgraduate-taught/sst' ,
            //'department_id' => 0,
            ]);
            DB::table('courses')->insert([
            'name' => 'Solid State Chemistry and its Applications, Advanced - MSc(Eng)',
            'link' => 'http://www.sheffield.ac.uk/materials/masters/chemistry' ,
            //'department_id' => 0,
            ]);
            DB::table('courses')->insert([
            'name' => 'Speech Difficulties - MSc/Diploma/Cert',
            'link' => 'https://www.sheffield.ac.uk/hcs/prospective_pg/taught/speech_difficulties' ,
            //'department_id' => 0,
            ]);
          


    }
}
