<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8"> 
    <title>Course</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/shiyishi.css') }}">

    <style type="text/css">
        .footer{position:absolute;bottom:-60%;width:100%;}
    </style>

    <script>
        $(function() {
            $("#select_id").change(function() {
                var key = $(this).val();
                $("#a_id").attr("href","/course/" + key);
            });
        });
    </script>
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
                <a href="{{ url('/main/'.Auth::user()->name) }}">Main</a>

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
                <h>Overseas Student Recruitment Management</h>
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
</div>

    <div class="text-center col-md-12">
        <br><span style="font-size:45px;">Course</span><br><br>
    </div>

    <div class="col-md-12">

        <div class="col-md-4" style="margin-left: 33%">

            <span style="font-size:20px;">Course</span><br>
            
            <select class="form-control" id="select_id" >
                <option value="select course.."> Select Course..</option>
                @foreach ($courses as $cc)
                <option value="{{ $cc->name }}" > {{ $cc->name }} </option>
                @endforeach
            </select><br>
            <button class="btn"><a id="a_id">Select</a></button><br><br>

            <form action=" {{ url('course') }}   " name="course" method="POST">
                <div>

                    <span style="font-size:20px;">Course Name</span>
                    <input type="text" name="name" value="{{ $course['name'] }}" class="form-control" required><br>

                    <span style="font-size:20px;">Course Link</span>
                    <input type="text" name="link" value="{{ $course['link'] }}" class="form-control"><br><br>

                    <div style="margin-left: 18%">
                        <table>
                            <td><div>
                            <input name="manager" value="{{ Auth::user()->name }}" hidden="">
                            <button type="submit" name="id" value="{{ $course['id'] }}" class="btn btn-default">Update Course</button>&emsp;&emsp;
                            </div>
                        </form></td>
                        <td><form action=" {{ url('course/delete') }} "  method="POST">
                            <div>
                                <input name="manager" value="{{ Auth::user()->name }}" hidden="">
                                <button type="submit" name="id" value="{{ $course['id'] }}"  class="btn btn-default">Delete</button>&emsp;&emsp;
                            </div>
                        </form></td>
                        <td><a class="btn btn-default" href="{{ url('/main/'.Auth::user()->name) }}" >Cancel</a></td>
                    </table></div>
                </div></div>



            </body>

            <footer>
                <div class="text-center footer">
                    <p>University of Sheffield/ Computer of Science/ Software System of Internet Technology/ Maxi Project/ Team Three </p> 
                </div>
            </footer> 

            </html>