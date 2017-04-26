<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8"> 
		<title>upload</title>
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/shiyishi.css') }}">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	    <link href="../css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
	    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	    <script src="../js/fileinput.js" type="text/javascript"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
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
        <a href="{{ url('/home') }}">Main</a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

{{ csrf_field() }}

        </form>
    </div>

@endif

</div>
</div>

	<div id=header class="header">
		        <div class="col-md-4">
	                <a href="{{ route('login') }}"><img src="{{URL::asset('/images/TUOS_Logo_CMYK.png')}}" alt="profile Pic" height="200" style="margin-left: 13%;" ></a>
	            </div>
	            <div class="col-md-8">
	                    <div class="text-center" style="font-size: 50px; margin-top:5%">
	                         <h><strong>Overseas Student Recruitment management</strong></h>
	                    </div>
	            </div>
	</div>
	<div class="col-md-12">
	        <div class="text-right" style="background-color: #66B3FF">
	            <a href="{{ url('/upload') }}"><button type="button" style="color:white" class="btn btn-link"> Upload File</button></a>
	           	<a href="{{ url('/emailmodify') }}"><button type="button" style="color:white" class="btn btn-link"  >Email Modification</button></a>
				<button type="button" style="color:white" class="btn btn-link">Feedback</button>
	        </div>
	</div>
	<div class="text-center col-md-12"><br>
	     	<span style="font-size:45px;">Upload Excel File</span>
	</div>
	<br>

	<div class="container" style="margin-top:25%">


   <form style="border: 4px solid #a1a1a1;margin-top: 20px;padding: 30px;" method="post" enctype="multipart/form-data" action="{{url('excel/import')}}">  
   {!!   csrf_field() ; !!}   
    <input type="file" name="import_file"  multiple class="file"  multiple data-min-file-count="1" id="import_file">
    <br>
    <button type="submit" class="btn btn-primary" name="manager" value="{{ Auth::user()->name }}"> submit </button>
	</form>
   <script>
    $("#import_file").fileinput({
     showUpload: false, //是否显示上传按钮  
     showRemove:false,  
     dropZoneEnabled: false,  
     showCaption: true,//是否显示标题  
     allowedFileExtensions:  ['xls', 'xlsx'],   
     maxFileCount: 1,  
     uploadAsync: false, //同步上传  
        
    });
	</script>



</body>

<footer>
        <div class=" col-md-12 content">
              <p>Uniersity of Sheffield/ Conmputer of Science/ Software System of Internet Technology/ Maxi Project/ Team Three </p> 
        </div>
</footer> 
</html>