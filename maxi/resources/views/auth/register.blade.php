<!DOCTYPE html>
<html>
<head> 

<meta charset="utf-8"> 
<title>Overseas Student Recruitment management</title> 
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
                    Overseas Student Recruitment management System
                    </span></div>
                </div>
</div>

<div  class="col-md-6 font" style="margin-top: 10%">
    <div class="content" >
        <div>
            <span style="font-weight;font-size:80px;color: black;">Register</span>
        </div><br>

        <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
{{ csrf_field() }}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <p for="name">Name</p>
                        <input class="text2" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
@if ($errors->has('name'))
                        <span class="help-block"><br>
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
@endif
                </div> 
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <p for="email">E-Mail Address</p> 
                        <input class="text2" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
@if ($errors->has('email'))
                        <span class="help-block"><br>
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
@endif
                </div> 
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <p for="password" >Password</p>
                        <input class="text2" id="password" type="password" class="form-control" name="password" required>
                </div> 
                <div class="form-group">
                    <p for="password-confirm">Confirm Password</p> 
                        <input class="text2" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div> 
                <div class="form-group">
                    <div class=""><br>
                        <button type="submit" class="btn btn-primary button">
                            Register
                        </button>
                    </div>
                </div>
            </form>
    </div>
</div>
</div>
 
</body>

<footer>
        <div class="text-center font" style="margin-top: 8%">
                <p>Uniersity of Sheffield/ Conmputer of Science/ Software System of Internet Technology/ Maxi Project/ Team Three </p> 
        </div>
</footer>

</html>



