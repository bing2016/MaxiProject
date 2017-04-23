<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8"> 
	<title>Teacher-Stu Interface</title>
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="{{ asset('css/shiyishi.css') }}">

</head>

<body>
        
<div style="height: 200%">
        <div id="header" style="background-color:#fff;">
                <div class="text-right links"><br>
                        <a href="{{ url('/main') }}">Teacher-Stu Interface</a>
                </div>
</div>

	<div id=header class="header">
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

        <div class="text-center col-md-12 content"></br>
                <span style="font-size:45px;">Enquireies</span>
        </div>

        <form action="/insert" method="post">

                {{ csrf_field() }}

                <div class="col-md-9" style="margin-left: 20%"><br><br>
                        <div class="row">
                                
                                <div class="col-md-3">
                                <span style="font-size:20px;">First Name</span><br/>
                                <input class="form-control" input id="firstname" type="text" class="form-control" name="first_name" value="" required="required"><br/></div>

                                <div class="col-md-3">
                                 <span style="font-size:20px;">Middle name</span><br/>
                                <input class="form-control" input id="sur_name" type="text" class="form-control" name="middle_name" value="" ><br/></div>

                                <div class="col-md-3">
                                <span style="font-size:20px;">Surname</span><br/>
                                <input class="form-control" input id="sur_name" type="text" class="form-control" name="surname" value="" required="required"><br/></div>
                   
                        </div>
         
                </div>


                <div class="col-md-5 " style="margin-left: 30%">

                        <span style="font-size:20px;">Nationality</span><br/>
                        <select class="form-control" type="text" name="nationality" value="{{ old('select1') }}" required>
                                <option value="China">China</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="France">France</option>
                                <option value="Italy">Italy</option>
                        </select><br/>

                        <span style="font-size:20px;">Meeting Place</span><br/>
                        <input class="form-control" input id="place" type="text" class="form-control" name="place" value="" required="required"><br/>
                </div>

                <div class="col-md-5" style="margin-left: 30%">
                        <span style="font-size:20px;">Date</span>
                        <input class="form-control" id="meeting" type="date" name="date" value="2017-03-22"/><br/>

                        <span style="font-size:20px;">Email Address</span>
                        <input class="form-control" input id="" type="text" class="form-control" name="email" value="" required="required"><br/>

                       

                        <span style="font-size:20px;">Level of Study</span><br/>
                        <select class="form-control" type="text" name="level" >
                                <option value="FN">Foundation -FN</option>
                                <option value="UT">Undergraduate -UT</option>
                                <option value="PMP">Pre Masters -PMP</option>
                                <option value="PGT">Masters -PGT</option>
                                <option value="PGR">PHD -PGR</option>
                        </select><br/>


                         <span style="font-size:20px;">Department</span><br/>
                        <select class="form-control" type="text" name="department" >
                                <option value="CS">Computer Science</option>
                                <option value="Math">Math</option>
                                <option>United States</option>
                                <option>France</option>
                                <option>Italy</option>
                        </select>
                        <div class="text-right" >
                        <a href="{{ url('/enquireies') }}" role="button">Add Courses</a>
                        </div>

                        <span style="font-size:20px;">Course/Subject</span><br/>
                        <select class="form-control" type="text" name="course" >
                                <option value="SSIT">Software System and Internet Technology (SSIT)</option>
                                <option value="CS">Computer Science</option>
                                <option>United States</option>
                                <option>France</option>
                                <option>Italy</option>
                        </select>
                        <div class="text-right" >
                        <a href="{{ url('/enquireies') }}" role="button">Add Courses</a>
                        </div>

                        <span style="font-size:20px;">Telephone Number</span>
                        <input class="form-control" input id="" type="text" class="form-control" name="phone_number" value="" required="required"><br/>

                        <span style="font-size:20px;" type="text" name="start_year" >Which Year You Want To Start</span>
                        <select class="form-control" >
                                <option value="2017">2017</option> 
                                <option value="2018">2018</option> 
                                <option value="2019">2019</option> 
                                <option value="2020">2020</option> 
                                <option value="2021">2021</option>
                        </select><br/>

                        <span style="font-size:20px;"  >Have You Already Applied ?</span>&emsp;&emsp;&emsp;&emsp;
                        <span style="font-size:15px;">Yes</span>&emsp;
                        <input type="radio" id="chk_list_1" value="option1" aria-label="..." required="required" name="is_applied" >
                        <span style="font-size:15px;">No</span>&emsp;
                        <input type="radio" id="chk_list_1" value="option1" aria-label="..." required="required" name="is_applied" ><br/><br/>

                        <span style="font-size:20px;">If Yes, Input Your Regesition Number</span>
                        <input class="form-control" input id="" type="text" class="form-control" name="regesition_number" value="" required="required"><br/>

                        <span style="font-size:20px;">Specific Question</span>
                        <textarea class="form-control" rows="3" type="text" name="questions" required="required"></textarea>


                        <span style="font-size:15px;">Send now? </span>&emsp;
                        <input type="checkbox" id="chk_list_1" name="is_special" value="option1" aria-label="..." checked><br/>

                </div>

                <div class="col-md-4" style="margin-left: 30%">
                        <br/><br/><button type="submit" name="submit" class="btn btn-primary btn-lg">
                        <span style="font-size:20px;">Submit</span>
                        </button>
                </div>

                <div class="col-md-3">
                        <br/><br/><button type="button" class="btn btn-primary btn-lg">
                        <span style="font-size:20px;">Cancel</span>
                        </button>
                </div>

</div>
</form>



</body>
                


<footer>
        <div class="text-center">
                <p>Uniersity of Sheffield/ Conmputer of Science/ Software System of Internet Technology/ Maxi Project/ Team Three </p> 
        </div>
</footer> 

</html>


