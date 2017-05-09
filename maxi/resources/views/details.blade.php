<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8"> 
    <title>Teacher-Stu Interface</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/shiyishi.css') }}">

    <style type="text/css">
        .footer{position:absolute;bottom:-80%;width:100%;}
    </style>

    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('css/datechooser.css') }}">
    <script type="text/javascript" src="{{ asset('js/datechooser.js') }}" ></script>

</head>

<body>

    <div style="">
        <div id="header" style="background-color:#fff;">
            <div class="text-right links"><br>
                <a href="{{ url('/main/'.Auth::user()->name) }}">Main</a>
            </div>
        </div>

        <div id=header class="">
            <div class="col-md-4">
                <a href="{{ url('/home') }}"><img src="{{URL::asset('/images/TUOS_Logo_CMYK.png')}}" alt="profile Pic" height="200" style="margin-left: 13%;" ></a>
            </div>
            <div class="col-md-8">
                <div class="text-center" style="font-size: 50px; margin-top:5%">
                    <h><strong>Overseas Student Recruitment Management</strong></h>
                </div>
            </div>
        </div>
        
        <div class="col-md-12">
            <div class="text-right" style="background-color: #66B3FF">
                <a class="btn btn-link" style="color:white" href="{{ url('/course') }}" role="button">Add Courses</a>
                <a class="btn btn-link" style="color:white" href="{{ url('/department') }}" role="button">Add Department</a>
                <a href="{{ url('/upload') }}"><button type="button" style="color:white" class="btn btn-link"> Upload File</button></a>
                <a href="{{ url('/emailmodule') }}"><button type="button" style="color:white" class="btn btn-link"  >Email Modification</button></a>
                <button type="button" style="color:white" class="btn btn-link" onclick="feedBack()">Feedback</button>
            </div>
        </div>

        <div class="text-center col-md-12">
            <br><span style="font-size:45px;">Student Detail</span>
        </div>

        <form action="{{ url('/student/update') }}" method="POST">

            {{ csrf_field() }}

            <div style="margin-left: 30%"><br><br>
                <div class="row col-md-10">

                    <div class="col-md-3">
                        <span style="font-size:20px;">First Name</span><br>
                        <input class="form-control" input class="form-control" name="first_name" value="{{ $students->first_name }}"><br></div>

                        <div class="col-md-3">
                           <span style="font-size:20px;">Middle name</span><br/>
                           <input class="form-control" input class="form-control" name="middle_name" value="{{ $students->middle_name }}"><br/></div>

                           <div class="col-md-3">
                            <span style="font-size:20px;">Surname</span><br/>
                            <input class="form-control" input class="form-control" name="last_name" value="{{ $students->last_name }}"><br/></div>
                            
                        </div>
                        
                    </div>


                    <div  style="margin-left: 29%" class="col-md-7">
                        <div  class="col-md-9 ">

                            <span style="font-size:20px;">Country</span><br/>
                            <select class="form-control" type="text" name="nationality" value="" required>
                                <option value="{{ $students->nationality }}"> {{ $students->nationality }} </option>
                                @foreach ($nationalities as $na)
                                <option value="{{ $na->name }}"> {{ $na->name }} </option>
                                @endforeach

                            </select><br/>

                            <span style="font-size:20px;">Meeting Place</span><br/>
                            <input class="form-control" name="place" value="{{ $students->place }}"><br/>
                        </div>
                    </div>

                    <div  style="margin-left: 29%" class="col-md-7">
                        <div  class="col-md-9 ">
                            <span style="font-size:20px;">Date Of Birth</span>

                            <input class="form-control datechooser dc-dateformat='j-n-Y' dc-iconlink='{{URL::asset('/images/datechooser.png')}}'  dc-weekstartday='1' dc-startdate='01012017' dc-latestdate='07312050' dc-earliestdate='05241999'" name="date" value="{{ $students->date }}"><br>

                            <span style="font-size:20px;">Email Address</span>
                            <input class="form-control" name="email" value="{{ $students->email }}"><br>

                            <span style="font-size:20px;">Telephone Number</span>
                            <input class="form-control" name="phone_number" value="{{ $students->phone_number }}"><br>

                            <span style="font-size:20px;">Level of Study</span><br>
                            <input class="form-control" name="level" value="{{ $students->level }}"><br>


                            <span style="font-size:20px;">Department</span><br>
                            <select class="form-control" id="department_name" type="text" name="department_name" value="{{ $students->department_name }}" required>
                                @foreach ($departments as $department)
                                <option value="{{ $department->name }}"> {{ $department->name }} </option>
                                @endforeach
                            </select>

                            <span style="font-size:20px;">Course/Subject</span><br>
                            <select class="form-control" id="course_name" type="text" name="course_name" value="{{ $students->course_name }}" required>
                                @foreach ($courses as $course)
                                <option value="{{ $course->name }}"> {{ $course->name }} </option>
                                @endforeach
                            </select>

                            <span style="font-size:20px;" type="text" name="start_year" >Which Year You Want To Start</span>
                            <input class="form-control" name="start_year" value="{{ $students->start_year }}"><br>

                            <span style="font-size:20px;"  >Have You Already Applied ?</span>&emsp;&emsp;&emsp;&emsp;
                            <span style="font-size:15px;">Yes</span>&emsp;
                            @if ($students->is_applied == 1)
                            <label><input type="checkbox" name="is_applied" value="1" checked></label>&emsp;
                            <span style="font-size:15px;">No</span>&emsp;
                            <label><input type="checkbox" name="is_applied" value="0"></label>
                            @else
                            <label><input type="checkbox" name="is_applied" value="1"></label>&emsp;
                            <span style="font-size:15px;">No</span>&emsp;
                            <label><input type="checkbox" name="is_applied" value="0" checked></label>
                            @endif
                            
                            <br>
                            <span style="font-size:20px;">If Yes, Input Your Applicant Id Number</span>
                            @if ($students->is_special == 1)
                            <input class="form-control" name="regesition_number" value="{{ $students->regesition_number }}"><br>
                            @else
                            <input class="form-control" name="regesition_number" disabled><br>
                            @endif

                            <span style="font-size:20px;">Note</span>
                            <textarea name="questions" rows="3" class="form-control" > {{ $students->questions }} </textarea><br>

                            <span style="font-size:20px;">Manager</span>
                            <input class="form-control" name="manager" value="{{ $students->manager }}"  readonly><br>

                            <div class="text-center links"><br>
                                <br/><button type="submit" name="id" value="{{ $students->id }}" class="btn btn-primary">
                                <a><span style="font-size:20px; color: white">Submit</span></a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>           

        </div>

    </body>
    </html>


