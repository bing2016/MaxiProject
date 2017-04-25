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
                            <a href="{{ url('/') }}">Home</a>
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
                <div class="title m-b-md"><br>
                    <a>
                    <img src="{{URL::asset('/images/TUOS_Logo_CMYK.png')}}" alt="profile Pic" height="200" style="margin-left: 32%;" >
                    </a>
                    <br>

                    <div class="text-center font">
                    <span style="font-size:70px;">
                    Overseas Student Recruitment management System
                    </span></div>
                </div>
</div>

<div  class="col-md-6 font" style="margin-top: 10%">
    <div class="content" >
        <div>
            <span style="font-weight;font-size:80px;color: black;">Login</span>
        </div><br>

        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
{{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <p for="email" class="">E-Mail Address</p> 
                <input class="text2" input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
@if ($errors->has('email'))
                <span class="help-block"><br>
                <strong>{{ $errors->first('email') }}</strong>
                </span>
@endif
            </div><br>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}"><p for="password">Password</p> 
                <input class="text2" id="password" type="password" class="form-control" name="password" required>
@if ($errors->has('password'))
                <span class="help-block"><br>
                <strong>{{ $errors->first('password') }}</strong>
                </span>
@endif
            </div><br>
            <div class="form-group">
                <div class="checkbox">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                </div>
            </div><br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary button">Login</button> 
                <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
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



