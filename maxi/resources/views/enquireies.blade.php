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
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('http://127.0.0.1:8000/register') }}">Register</a>
                        <a href="{{ url('/main') }}">Teacher-Stu Interface</a>
                </div>
</div>

	<div id=header class="header">
	        <div class="col-md-4">
                        <a><img src="{{URL::asset('/images/TUOS_Logo_CMYK.png')}}" alt="profile Pic" height="200" style="margin-left: 13%;" ></a>
                </div>
                <div class="col-md-8"><br><br>
                        <div class="text-center">
                                <h1><strong>Overseas Student Recruitment management</strong></h1>
                        </div>
                </div>
        </div>

        <div class="col-md-12">
                <div class="text-right" style="background-color: #66B3FF">
                        <button type="button" style="color:white" class="btn btn-link">Upload File</button>
                        <button type="button" style="color:white" class="btn btn-link">Email Modification</button>
                        <button type="button" style="color:white" class="btn btn-link">Feedback</button>
                </div>
        </div>

        <div class="text-center col-md-12 content">
                <span style="font-size:70px;">Enquireies</span>
        </div>

        <div class="col-md-4"><br><br></div>

        <div class="col-md-2 "><br><br>
                <span style="font-size:40px;">First Name</span><br/>
                <input class="form-control" input id="" type="" class="form-control" name="" value="" required autofocus><br/><br>

                <span style="font-size:40px;">Country</span><br/>
                <select class="form-control">
                        <option>China</option>
                        <option>United Kingdom</option>
                        <option>United States</option>
                        <option>France</option>
                        <option>Italy</option>
                </select>
        </div>

        <div class="col-md-1"></div>

        <div class="col-md-2 "><br><br>
                <span style="font-size:40px;">Surname</span><br/>
                <input class="form-control" input id="" type="" class="form-control" name="" value="" required autofocus><br/><br>

                <span style="font-size:40px;">Meeting Place</span><br/>
                <input class="form-control" input id="" type="" class="form-control" name="" value="" required autofocus><br/><br>
        </div>

        <div class="col-md-4"><br><br></div>
        <div class="col-md-5">
                <span style="font-size:40px;">Date</span>
                <input class="form-control" id="meeting" type="date" value="2017-03-22"/><br/>

                <span style="font-size:40px;">Email Address</span>
                <input class="form-control" input id="" type="" class="form-control" name="" value="" required autofocus><br/>

                <span style="font-size:40px;">Level of Study</span><br/>
                <select class="form-control">
                        <option>Foundation -FN</option>
                        <option>Undergraduate -UT</option>
                        <option>Pre Masters -PMP</option>
                        <option>Masters -PGT</option>
                        <option>PHD -PGR</option>
                </select><br/>

                <span style="font-size:40px;">Course/Subject</span><br/>
                <select class="form-control">
                        <option>Software System and Internet Technology (SSIT)</option>
                        <option>United Kingdom</option>
                        <option>United States</option>
                        <option>France</option>
                        <option>Italy</option>
                </select>
                <div class="text-right" >
                <a href="{{ url('/enquireies') }}" role="button">Add Courses</a>
                </div>

                <span style="font-size:40px;">Telephone Number</span>
                <input class="form-control" input id="" type="" class="form-control" name="" value="" required autofocus><br/>

                <span style="font-size:40px;">Which Year You Want To Start</span>
                <select class="form-control">
                        <option>2017</option> <option>2018</option> <option>2019</option> <option>2020</option> <option>2021</option>
                </select><br/>

                <span style="font-size:40px;">Have You Already Applied ?</span>&emsp;&emsp;&emsp;&emsp;
                <span style="font-size:20px;">Yes</span>&emsp;
                <input type="checkbox" id="chk_list_1" value="option1" aria-label="...">
                <span style="font-size:20px;">No</span>&emsp;
                <input type="checkbox" id="chk_list_1" value="option1" aria-label="..."><br/><br/>

                <span style="font-size:40px;">If Yes, Input Your Regesition Number</span>
                <input class="form-control" input id="" type="" class="form-control" name="" value="" required autofocus><br/>

                <span style="font-size:20px;">Need More Information? </span>&emsp;
                <input type="checkbox" id="chk_list_1" value="option1" aria-label="..."><br/>

                <span style="font-size:40px;">Specific Question</span>
                <textarea class="form-control" rows="3"></textarea>
        </div>

        <div class="col-md-4"></div>

        <div class="col-md-4">
                <br/><br/><button type="button" class="btn btn-primary btn-lg">
                <span style="font-size:30px;">Submit</span>
                </button>
        </div>

        <div class="col-md-3">
                <br/><br/><button type="button" class="btn btn-primary btn-lg">
                <span style="font-size:30px;">Cancel</span>
                </button>
        </div>
</div>



</body>
                


<footer>
        <div class="text-center">
                <p>Uniersity of Sheffield/ Conmputer of Science/ Software System of Internet Technology/ Maxi Project/ Team Three </p> 
        </div>
</footer> 

</html>


