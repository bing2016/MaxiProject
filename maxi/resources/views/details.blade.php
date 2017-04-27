<!DOCTYPE html>
<html>
<head>

        <meta charset="utf-8"> 
        <title>Teacher-Stu Interface</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/shiyishi.css') }}">

</head>

<body>
        
<div style="">
        <div id="header" style="background-color:#fff;">
                <div class="text-right links"><br>
                        <a href="{{ url('/main') }}">Main</a>
                </div>
</div>

        <div id=header class="">
                <div class="col-md-4">
                        <a href="{{ url('/home') }}"><img src="{{URL::asset('/images/TUOS_Logo_CMYK.png')}}" alt="profile Pic" height="200" style="margin-left: 13%;" ></a>
                </div>
                <div class="col-md-8">
                        <div class="text-center" style="font-size: 50px; margin-top:5%">
                                <h><strong>Overseas Student Recruitment management</strong></h>
                        </div>
                </div>
        </div>
        
        <div class="col-md-12">
                <div class="text-right links" style="background-color: #66B3FF">
                        <button type="button" style="color:white" class="btn btn-link">Upload File</button>
                        <a href="{{ url('/emailmodify') }}"><button type="button" style="color:white" class="btn btn-link"  >Email Modification</button></a>
                        <button type="button" style="color:white" class="btn btn-link">Feedback</button>
                </div>
        </div>

        <div class="text-center col-md-12">
                <br><span style="font-size:45px;">Enquireies</span>
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
                                <span style="font-size:20px;">Last Name</span><br/>
                                <input class="form-control" input class="form-control" name="last_name" value="{{ $students->last_name }}"><br/></div>
                   
                        </div>
         
                </div>


                <div  style="margin-left: 29%" class="col-md-7">
                        <div  class="col-md-9 ">

                        <span style="font-size:20px;">Nationality</span><br/>
                        <input class="form-control" name="nationality" value="{{ $students->nationality }}"><br/>

                        <span style="font-size:20px;">Meeting Place</span><br/>
                        <input class="form-control" name="place" value="{{ $students->place }}"><br/>
                        </div>
                </div>

                <div  style="margin-left: 29%" class="col-md-7">
                        <div  class="col-md-9 ">
                        <span style="font-size:20px;">Date</span>
                        <input class="form-control" name="date" value="{{ $students->date }}"><br>


                        <span style="font-size:20px;">Email Address</span>
                        <input class="form-control" name="email" value="{{ $students->email }}"><br>

                       

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

                        <span style="font-size:20px;">Telephone Number</span>
                        <input class="form-control" name="phone_number" value="{{ $students->phone_number }}"><br>

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
                        <span style="font-size:20px;">If Yes, Input Your Regesition Number</span>
                        @if ($students->is_special == 1)
                        <input class="form-control" name="regesition_number" value="{{ $students->regesition_number }}"><br>
                        @else
                        <input class="form-control" name="regesition_number" disabled><br>
                        @endif

                        <span style="font-size:20px;">Specific Question</span>
                        <textarea name="questions" rows="3" class="form-control" > {{ $students->questions }} </textarea><br>

                        <span style="font-size:20px;">Manager</span>
                        <input class="form-control" name="manager" value="{{ $students->manager }}"  readonly><br>

                        <span style="font-size:15px;">Send now? </span>&emsp;
                        <span style="font-size:15px;">Yes</span>&emsp;
                        @if ($students->is_send_now == 1)
                        <label><input type="checkbox" name="is_send_now" value="1" checked></label>&emsp;
                        <span style="font-size:15px;">No</span>&emsp;
                        <label><input type="checkbox" name="is_send_now" value="0"></label>
                        @else
                        <label><input type="checkbox" name="is_send_now" value="1"></label>&emsp;
                        <span style="font-size:15px;">No</span>&emsp;
                        <label><input type="checkbox" name="is_send_now" value="0" checked></label>
                       @endif
</form>

                        <div class="text-center links"><br>
                        <br/><br/><button type="submit" name="id" value="{{ $students->id }}">
                        <span style="font-size:20px;">Submit</span>
                        </button>
                        </div>

                        <div class="text-center links"><br>
                                <a href="{{ url('/main') }}">Back To Main</a>
                        </div><br><br>
                </div>
                </div>

                

</div>



</body>
                



</html>


