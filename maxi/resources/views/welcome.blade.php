<!DOCTYPE html>
<html>
<head> 

    <meta charset="utf-8"> 
    <title>Overseas Student Recruitment Management</title> 
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/shiyishi.css') }}">

</head>

<body>

    <div style="background-color:#fff;"><br>

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
            document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
    @endif
</div>


<div class="row"> 
    <div class="col-md-6">
        <div class="title m-b-md text-center" style="margin-left: 13%;"><br>
            <a>
                <a href="{{ route('login') }}" ><img src="{{URL::asset('/images/TUOS_Logo_CMYK.png')}}" alt="profile Pic" height="200" style="margin-left: 5%;"></a>
            </a>
            <br>

            <div class=" font">
                <span style="font-size:70px;">
                    Overseas Student Recruitment Management System
                </span></div>
            </div>
        </div>

        <div  class="col-md-6 font" style="margin-top: 15%">
            <div class="content" >
                <div>
                    <span style="font-weight;font-size:100px;color: black;">Welcome</span>
                </div><br><br>


                <div style="margin-top:% ">
                    <button class="btn btn-default btn-lg">Add Student</button>

                    <a href="{{ url('/main/'.Auth::user()->name) }}"><button type="submit"  class="btn btn-default btn-lg">Main Interface</button></a>
                </div>
            </div>
        </div>
    </div>
    
</body>

<footer>
    <div class="text-center font" style="margin-top: 8%">
        <p>University of Sheffield/ Computer of Science/ Software System of Internet Technology/ Maxi Project/ Team Three </p>  
    </div>
</footer> 

</html>