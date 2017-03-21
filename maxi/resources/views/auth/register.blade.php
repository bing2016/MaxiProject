<!DOCTYPE html>
<html>
<head> 

<meta charset="utf-8"> 
<title>Overseas Student Recruitment management</title> 
<link rel="stylesheet" href="{{ asset('css/shiyishi.css') }}">

</head>

<body>

<div id="header" style="background-color:#fff;">
    <div class="top-right links">
        <a href="{{ url('/login') }}">Login</a>
        <a href="{{ url('/register') }}">Register</a>
    </div>
</div>

<div id="menu" style="background-color:white;height:100%;width:50%;float:left;">
    <div class="content">
        <div class="title m-b-md"><br>
            <a>
                <img src="{{URL::asset('/images/TUOS_Logo_CMYK.png')}}" alt="profile Pic" height="200" style="margin-left: 13%;" >
            </a><br>
            <span style="font-size:70px;margin-left: 6%;">Overseas Student Recruitment management System</span>
        </div>
    </div>
</div>
 
<div id="content line-hight body" style="background-color:#fff;height:100%;width:45%;float:right;margin-top:16%;">
    <div class="content row" >
        <div class="col-md-8 col-md-offset-2">
            <span style="font-weight;font-size:80px;color: black;">Register</span>
        </div><br>
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
{{ csrf_field() }}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Name</label>
                    <div class="col-md-6">
                        <input class="text2" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
@if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
@endif
                    </div>
                </div> 
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail Address</label> 
                    <div class="col-md-6">
                        <input class="text2" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
@if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
@endif
                    </div>
                </div> 
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Password</label>
                    <div class="col-md-6">
                        <input class="text2" id="password" type="password" class="form-control" name="password" required>
                    </div>
                </div> 
                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label> 
                    <div class="col-md-6">
                        <input class="text2" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div> 
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4"><br>
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
</html>



