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

        <form action="{{ url('/student') }}" method="POST">

                {{ csrf_field() }}

                <div class="col-md-10" style="margin-left: 30%"><br><br>
                        <div class="row">
                                
                                <div class="col-md-2">
                                <span style="font-size:20px;">First Name</span><br/>
                                <input class="form-control" id="firstname" type="text" name="first_name" value=" " required><br/></div>

                                <div class="col-md-2">
                                <span style="font-size:20px;">Middle name</span><br/>
                                <input class="form-control" id="middle_name" type="text" name="middle_name" value="{{ old('middle_name') }}" ><br/></div>

                                <div class="col-md-2">
                                <span style="font-size:20px;">Surname</span><br/>
                                <input class="form-control" id="sur_name" type="text" name="last_name" value="{{ old('last_name') }}" required><br/></div>
                   
                        </div>
         
                </div>


                <div class="col-md-5 " style="margin-left: 30%">

                        <span style="font-size:20px;">Nationality</span><br/>
                        <select class="form-control" id="nationality" type="text" name="nationality" value="{{ old('nationality') }}" required>
                                <option value="China">China</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="France">France</option>
                                <option value="Italy">Italy</option>
                        </select><br/>

                        <span style="font-size:20px;">Meeting Place</span><br/>
                        <input class="form-control" id="place" type="text" name="place" value="{{ old('place') }}" ><br/>
                </div>

                <div class="col-md-5" style="margin-left: 30%">
                        <span style="font-size:20px;">Date</span>
                        <input class="form-control" id="date" type="date" name="date" value="{{ old('date') }}" required><br/>

                        <span style="font-size:20px;">Email Address</span>
                        <input class="form-control" id="email" type="text" name="email" value="{{ old('email') }}" required><br/>

                       

                        <span style="font-size:20px;">Level of Study</span><br/>
                        <select class="form-control" id="level" type="text" name="level" value="{{ old('level') }}" required>
                                <option value="FN">Foundation -FN</option>
                                <option value="UT">Undergraduate -UT</option>
                                <option value="PMP">Pre Masters -PMP</option>
                                <option value="PGT">Masters -PGT</option>
                                <option value="PGR">PHD -PGR</option>
                        </select><br/>


                         <span style="font-size:20px;">Department</span><br/>
                        <select class="form-control" id="department_name" type="text" name="department_name" value="{{ old('department_name') }}" required>
                                <option value="CS">Computer Science</option>
                                <option value="Math">Math</option>
                                <option value="United States">United States</option>
                                <option value="France">France</option>
                                <option value="Italy">Italy</option>
                        </select>
                        <div class="text-right" >
                        <a href="{{ url('/enquireies') }}" role="button">Add Department</a>
                        </div>

                        <span style="font-size:20px;">Course/Subject</span><br/>
                        <select class="form-control" id="course_name" type="text" name="course_name" value="{{ old('course_name') }}" required >
                                <option value="SSIT">Software System and Internet Technology (SSIT)</option>
                                <option value="CS">Computer Science</option>
                                <option value="United States">United States</option>
                                <option value="France">France</option>
                                <option value="Italy">Italy</option>
                        </select>
                        <div class="text-right" >
                        <a href="{{ url('/enquireies') }}" role="button">Add Courses</a>
                        </div>

                        <span style="font-size:20px;">Telephone Number</span>
                        <input class="form-control" input id="phone_number" type="text" name="phone_number" value="{{ old('phone_number') }}" required><br/>

                        <span style="font-size:20px;" >Which Year You Want To Start</span>
                        <select class="form-control" id="start_year" type="text" name="start_year" value="{{ old('name') }}" required>
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
                        <input class="form-control" id="regesition_number" type="text" name="regesition_number" value="{{ old('regesition_number') }}"><br/>

                        <span style="font-size:20px;">Specific Question</span>
                        <input class="form-control" id="questions" type="text" name="questions" value="{{ old('questions') }}"  >

                        <span style="font-size:15px;">Send now? </span>&emsp;
                        <span style="font-size:15px;">Yes</span>&emsp;
                        <input type="radio" id="chk_list_1" value="0"  name="is_send_now" required >
                        <span style="font-size:15px;">No</span>&emsp;
                        <input type="radio" id="chk_list_1" value="1"  name="is_send_now" required ><br/><br/>

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


