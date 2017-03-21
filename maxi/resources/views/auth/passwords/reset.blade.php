
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
                        <!--<a href="file:///C:/php/Laravel/resources/views/LoginPage.html">Login</a>
                        <a href="file:///C:/php/Laravel/resources/views/RegisterPage.html">Register</a>-->
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                </div>
</div>
 

<div id="menu" style="background-color:#BBBBBB;height:0px;width:1000px;float:left;">

<div class="content">
                <div class="title m-b-md">

                <br>


                    <a>
                        <img src="{{URL::asset('/images/TUOS_Logo_CMYK.png')}}" alt="profile Pic" height="200" style="margin-left: 13%;" >
                    </a>
                    <br>


                    <span style="font-size:70px;margin-left: 100px;">Overseas Student Recruitment management System</span>
                </div>

</div>
</div>
 
<div id="content line-hight" style="background-color:#fff;height:615px;width:900px;float:right;margin-top:300px;">



<div class="content" >

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span style="font-weight;font-size:80px;color: black;">Reset Password</span>
                </div>

                <div class="panel-body">

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.request') }}">

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input class="text2" id="email" type="email" class="form-control" name="email"  required autofocus>

                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input class="text2" id="password" type="password" class="form-control" name="password" required>

                                    </span>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input class="text2" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <br>
<button type="submit" class="btn btn-primary button">
    Reset Password
</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



 
 

 
</body>
</html>





















