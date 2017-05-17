<!DOCTYPE html>
<html lang="en">
<html>
<head>

	<meta charset="UTF-8"> 
	<title>Send Email</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/shiyishi.css') }}">

</head>
<body>

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
            <a href="{{ url('/main/'.Auth::user()->name) }}">Main</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

                {{ csrf_field() }}

            </form>
        </div>

        @endif

    </div>
    <div class="col-md-12">
       <div id=header class="">
          <a>
              <div class="col-md-4">
               <a href="{{ url('/home') }}"><img src="{{URL::asset('/images/TUOS_Logo_CMYK.png')}}" alt="profile Pic" height="200" style="margin-left: 13%;" ></a>
           </div>
       </a>
       <div class="col-md-8"><br><br>

        <div class="text-center">
            <h1>Overseas Student Recruitment Management</h1>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="text-right" style="background-color: #66B3FF">
        <a href="{{ url('/upload') }}"><button type="button" style="color:white" class="btn btn-link"> Upload File</button></a>
        <a class="btn btn-link" style="color:white" href="{{ url('/course') }}" role="button">Add Courses</a>
        <a class="btn btn-link" style="color:white" href="{{ url('/department') }}" role="button">Add Department</a>
        <a href="{{ url('/emailmodule') }}"><button type="button" style="color:white" class="btn btn-link"  >Email Modification</button></a>
        <button type="button" style="color:white" class="btn btn-link" onclick="feedBack()">Feedback</button>
    </div>
</div>

<div class="text-center col-md-12">
    <br><span  style="font-size:45px;">Send Email</span>
</div><br><br>

<form action="{{ url('/special_email') }}" method="POST">
    <div class="text-center col-md-8" style="margin-left: 16%">
        <span style="font-size:25px;">Content</span>
        <textarea rows="40" name="content" id="content" class="form-control" >{{ $content }}</textarea><br>
        

        <div>
            <input name="manager" value="{{ Auth::user()->name }}" hidden="">
            <button type="submit" name="id" value="{{ $student->id }}" class="btn btn-primary btn-lg">
                <span style="font-size:20px;">Submit</span>
            </button>&emsp;&emsp;&emsp;

            <a href="{{ url('/main/'.Auth::user()->name) }}"><button type="button" class="btn btn-primary btn-lg">
                <span style="font-size:20px;">Cancel</span>
            </button></a>
        </div><br><br></div>
    </form>
</div>

</body>


</html>