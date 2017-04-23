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
	        <div class="text-right" style="background-color: #66B3FF">
	            <button type="button" style="color:white" class="btn btn-link">Upload File</button>
	           	<a href="{{ url('/emailmodify') }}"><button type="button" style="color:white" class="btn btn-link"  >Email Modification</button></a>
				<button type="button" style="color:white" class="btn btn-link">Feedback</button>
	        </div>
	</div>
	        
	<div class="text-center col-md-12 content"></br>
	     	<span style="font-size:45px;">Email Modification</span>
	</div>

	 <div class="col-md-4" style="margin-left: 25%">
	 	<p style="font-size:20px;"> * Welcome Part * </p></br>

	 	<p style="font-size:20px;"> * Course Part * </p></br>

	 	<p style="font-size:20px;"> * University Information * </p></br>

	 	<p style="font-size:20px;"> * Fees and Funding * </p></br>

	 	<p style="font-size:20px;"> * Apply parts * </p></br>

	 	<p style="font-size:20px;"> * Tail parts * </p></br>

	 	<table>
	 			<tr>
	 				<td>welcome part</td>
	 				<td>course part</td>
	 				<td>University Information</td>
	 				<td>Fees and Funding</td>
	 				<td>Apply parts</td>
	 				<td>tail</td>
	 			</tr>
	 			@foreach($data as $value)
		 		<tr>
		 			<td>{{ $value-> Firstname }}</td>
		 			<td>{{ $value-> Surname  }}</td>
		 			<td>{{ $value-> Country    }}</td>
		 			<td>{{ $value-> alreadyApplied  }}</td>
		 		
		 		</tr>
		 		@endforeach
	 		</table>


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





</body>
</html>