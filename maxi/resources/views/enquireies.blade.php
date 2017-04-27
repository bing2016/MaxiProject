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

</head>

<body>
        
<div style="">
        <div id="header" style="background-color:#fff;"><br>

@if (Auth::guest())

    <div class="text-right links font">
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
    </div>

@else

    <div class="text-right links font">
        <a> 
            <a> User: </a>
            {{ Auth::user()->name }}
        </a>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Logout</a>
        <a href="{{ url('/home') }}">Main</a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

{{ csrf_field() }}

        </form>
    </div>

@endif

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

        <form action="{{ url('/student') }}" method="POST">

                {{ csrf_field() }}

                <div class="col-md-10" style="margin-left: 30%"><br><br>
                        <div class="row">
                                
                                <div class="col-md-2">
                                <span style="font-size:20px;">First Name</span><br/>
                                <input class="form-control" id="firstname" type="text" name="first_name" value=" " required><br/></div>

                                <div class="col-md-2">
                                <span style="font-size:20px;">Middle name</span><br/>
                                <input class="form-control" id="middle_name" type="text" name="middle_name" value="" ><br/></div>

                                <div class="col-md-2">
                                <span style="font-size:20px;">Surname</span><br/>
                                <input class="form-control" id="sur_name" type="text" name="last_name" value="" required><br/></div>
                   
                        </div>
         
                </div>


                <div class="col-md-5 " style="margin-left: 30%">

                        <span style="font-size:20px;">Nationality</span><br/>
                        <select class="form-control" id="nationality" type="text" name="nationality" value="" required>
                                <option value="China">China</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="France">France</option>
                                <option value="Italy">Italy</option>
                        </select><br/>

                        <span style="font-size:20px;">Meeting Place</span><br/>
                        <input class="form-control" id="place" type="text" name="place" value="" ><br/>
                </div>

                <div class="col-md-5" style="margin-left: 30%">
                        <span style="font-size:20px;">Date</span>
                        <input class="form-control" id="date" type="date" name="date" value="" required><br/>

                        <span style="font-size:20px;">Email Address</span>
                        <input class="form-control" id="email" type="text" name="email" value="" required><br/>

                       

                        <span style="font-size:20px;">Level of Study</span><br/>
                        <select class="form-control" id="level" type="text" name="level" value="" required>
                                <option value="FN">Foundation -FN</option>
                                <option value="UT">Undergraduate -UT</option>
                                <option value="PMP">Pre Masters -PMP</option>
                                <option value="PGT">Masters -PGT</option>
                                <option value="PGR">PHD -PGR</option>
                        </select><br/>


                        <span style="font-size:20px;">Department</span><br/>
                        <select class="form-control" id="department_name" type="text" name="department_name" value="">
                                @foreach ($departments as $department)
                                <option value="{{ $department->name }}"> {{ $department->name }} </option>
                                @endforeach
                        </select>

                        <span style="font-size:20px;">Course/Subject</span><br/>
                        <select class="form-control" id="course_name" type="text" name="course_name" value="">
                                @foreach ($courses as $course)
                                <option value="{{ $course->name }}"> {{ $course->name }} </option>
                                @endforeach
                        </select>

                        <span style="font-size:20px;">Telephone Number</span>
                        <input class="form-control" input id="phone_number" type="text" name="phone_number" value="" required><br/>

                        <span style="font-size:20px;" >Which Year You Want To Start</span>
                        <select class="form-control" id="start_year" type="text" name="start_year" value="" required>
                                <option value="2017">2017</option> 
                                <option value="2018">2018</option> 
                                <option value="2019">2019</option> 
                                <option value="2020">2020</option> 
                                <option value="2021">2021</option>
                        </select><br/>

                        <span style="font-size:20px;"  >Have You Already Applied ?</span>&emsp;&emsp;&emsp;&emsp;
                        <span style="font-size:15px;">Yes</span>&emsp;
                        <input type="radio" id="chk_list_1" value="1" required name="is_applied" >
                        <span style="font-size:15px;">No</span>&emsp;
                        <input type="radio" id="chk_list_1" value="0"  required name="is_applied" ><br/><br/>

                        <span style="font-size:20px;">If Yes, Input Your Regesition Number</span>
                        <input class="form-control" id="regesition_number" type="text" name="regesition_number" value=""><br/>

                        <span style="font-size:20px;">Specific Question</span>
                        <textarea name="questions" rows="3" class="form-control" ></textarea><br>

                        <span style="font-size:15px;">Send now? </span>&emsp;
                        <span style="font-size:15px;">Yes</span>&emsp;
                        <input type="radio" id="chk_list_1" value="0"  name="is_send_now" required >
                        <span style="font-size:15px;">No</span>&emsp;
                        <input type="radio" id="chk_list_1" value="1"  name="is_send_now" required ><br/><br/>

                        <span style="font-size:20px;">Manager</span>
                        <input class="form-control" id="manager" type="text" name="manager" value="{{ Auth::user()->name }}" readonly>

                </div>

                <div class="col-md-4" style="margin-left: 30%">
                        <br/><br/><button type="submit" name="submit" class="btn btn-primary btn-lg">
                        <span style="font-size:20px;">Submit</span>
                        </button>
                </div>

                <div class="col-md-3">
                        <br/><br/><a href="{{ url('/main') }}"><button type="button" class="btn btn-primary btn-lg">
                        <span style="font-size:20px;">Cancel</span>
                        </button></a>
                </div>
</form>
</div>



</body>
                


<footer>
        <div class="text-center footer">
                <p>Uniersity of Sheffield/ Conmputer of Science/ Software System of Internet Technology/ Maxi Project/ Team Three </p> 
        </div>
</footer> 

</html>


