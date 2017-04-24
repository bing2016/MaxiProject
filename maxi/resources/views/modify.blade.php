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
                        <a><img src="{{URL::asset('/images/TUOS_Logo_CMYK.png')}}" alt="profile Pic" height="200" style="margin-left: 13%;" ></a>
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

        <form action="/insert" method="post">

                {{ csrf_field() }}

                <div style="margin-left: 30%"><br><br>
                        <div class="row col-md-10">
                                
                                <div class="col-md-3">
                                <span style="font-size:20px;">First Name</span><br>
                                <input class="form-control" input class="form-control" value="{{ $students->first_name }}"><br></div>

                                <div class="col-md-3">
                                 <span style="font-size:20px;">Middle name</span><br/>
                                <input class="form-control" input class="form-control" value="{{ $students->middle_name }}"><br/></div>

                                <div class="col-md-3">
                                <span style="font-size:20px;">Surname</span><br/>
                                <input class="form-control" input class="form-control" value="{{ $students->last_name }}"><br/></div>
                   
                        </div>
         
                </div>


                <div  style="margin-left: 29%" class="col-md-7">
                        <div  class="col-md-9 ">

                        <span style="font-size:20px;">Nationality</span><br/>
                        <input class="form-control" input class="form-control" value="{{ $students->nationality }}"><br/>

                        <span style="font-size:20px;">Meeting Place</span><br/>
                        <input class="form-control" input class="form-control" value="{{ $students->place }}"><br/>
                        </div>
                </div>

                <div  style="margin-left: 29%" class="col-md-7">
                        <div  class="col-md-9 ">
                        <span style="font-size:20px;">Date</span>
                        <input class="form-control" input class="form-control" value="{{ $students->date }}"><br>


                        <span style="font-size:20px;">Email Address</span>
                        <input class="form-control" input class="form-control" value="{{ $students->email }}"><br>

                       

                        <span style="font-size:20px;">Level of Study</span><br>
                        <input class="form-control" input class="form-control" value="{{ $students->level }}"><br>


                        <span style="font-size:20px;">Department</span><br>
                        <input class="form-control" input class="form-control" value="{{ $students->department }}"><br>

                        <span style="font-size:20px;">Course/Subject</span><br>
                        <input class="form-control" input class="form-control" value="{{ $students->course }}"><br>

                        <span style="font-size:20px;">Telephone Number</span>
                        <input class="form-control" input class="form-control" value="{{ $students->phone_number }}"><br>

                        <span style="font-size:20px;" type="text" name="start_year" >Which Year You Want To Start</span>
                        <input class="form-control" input class="form-control" value="{{ $students->start_year }}"><br>

                        <span style="font-size:20px;"  >Have You Already Applied ?</span>&emsp;&emsp;&emsp;&emsp;
                        <span style="font-size:15px;">Yes</span>&emsp;
                        @if ($students->is_special == 1)
                        <label><input type="checkbox" checked></label>
                        @else
                        <label><input type="checkbox"></label>
                       @endif
                        <span style="font-size:15px;">No</span>&emsp;
                        @if ($students->is_special == 0)
                        <label><input type="checkbox" checked></label>
                        @else
                        <label><input type="checkbox"></label>
                        @endif
 
                        <br>
                        <span style="font-size:20px;">If Yes, Input Your Regesition Number</span>
                        @if ($students->is_special == 1)
                        <input class="form-control" input class="form-control" value="{{ $students->regesition_number }}"><br>
                        @else
                        <input class="form-control" input class="form-control"><br>
                        @endif

                        <span style="font-size:20px;">Specific Question</span>
                        <input class="form-control" value="{{ $students->questions }}">

                        <span style="font-size:15px;">Send now? </span>&emsp;
                        <input type="checkbox" checked><br/><br><br>


                        <div class="text-center links"><br>
                                <a href="{{ url('/main') }}">Back To Main</a>
                        </div><br><br>
                </div>
                </div>

                
</form>
</div>



</body>
                



</html>


