<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>Teacher-Stu Interface</title>
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<link rel="stylesheet" href="{{ asset('css/shiyishi.css') }}">
		<link rel="stylesheet" type="text/css" href="http://sandbox.runjs.cn/uploads/rs/238/n8vhm36h/bootstrap-responsiv.css">

	<link rel="stylesheet" type="text/css" href="http://sandbox.runjs.cn/uploads/rs/238/n8vhm36h/dataTables.bootstra.css">

</head>
<body>

<div id="header" style="background-color:#fff;">
    
                <div class="text-right links">
                		<br>
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('http://127.0.0.1:8000/register') }}">Register</a>
                        <a href="{{ url('/main') }}">Teacher-Stu Interface</a>
                </div>
</div>

	<div id=header class="header">
		<a>
		<div class="col-md-4">
        	<img src="{{URL::asset('/images/TUOS_Logo_CMYK.png')}}" alt="profile Pic" height="200" style="margin-left: 13%;" >
        </div>
        </a>
        <div class="col-md-8"><br><br>

        <div class="text-center">
        <h1><strong>Overseas Student Recruitment management</strong></h1>
        </div>

        <script type="text/javascript">
        function allSelect() {
            if ($(":checkbox").attr("checked") != "checked") {
                $(":checkbox").attr("checked", "checked");
            }
            else {
                $(":checkbox").removeAttr("checked");
            }
        }
        function otherSelect() {
            $(":checkbox").each(function () {
                if ($(this).attr("checked") == "checked") {
                    $(this).removeAttr("checked");
                }
                else {
                    $(this).attr("checked", "checked");
                }
            });
        }
    </script>


        
        </div>
        </div>


<div class="col-md-12">
<div class="text-right" style="background-color: #66B3FF">
        <button type="button" style="color:white" class="btn btn-link">Upload File</button>
        <button type="button" style="color:white" class="btn btn-link">Email Modification</button>
        <button type="button" style="color:white" class="btn btn-link">Feedback</button>
        </div>
</div>

<div class="col-md-6">
	<div class="text-left">
	<br>
		&emsp;<button class="btn btn-default" type="">Sort</button>&emsp;
		<button class="btn btn-default" type="">Delete</button>&emsp;
		<button class="btn btn-default" onclick="allSelect();" />Select All/Cancel All</button>&emsp;
		<a class="btn btn-default" href="{{ url('/enquireies') }}" role="button">Add Student</a>&emsp;
		<button class="btn btn-default" type="">Modify</button>&emsp;
		<button class="btn btn-default" type="">Donload</button><br><br>
	</div>
</div>

<div class="col-md-6">
	<div class="text-right">
	<br><ul class="breadcrumb">
			<li>过滤</li>&emsp;
		</ul>
	</div>
</div>
	



<div class="row-fliod">
<table class="table table-striped table-hover datatable">
<div class="checkbox">
	<thead>
		<tr>
		    <th></th>
			<th>Name</th>
			<th>Country</th>
			<th>Email Address</th>
			<th>Stuff</th>
			<th>Date</th>
			<th>Department</th>
			<th>Sending</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
	    
		<tr>
			<div id="content">
        		<ul>
            	@foreach ($students as $student)
            		<li style="margin: 50px 0;">
               			<td>
							<label><input type="checkbox" id="chk_list_4" value="option1" aria-label="..."></label>
						</td>
						<td> {{ $student->surname }} </td>
						<td> {{ $student->nationality }} </td>
						<td> {{ $student->email }} </td>
						<td> {{ $student->manager }} </td>
						<td> {{ $student->created_at }} </td>
						<td> {{ $student->subject }} </td>
						<td>
							<button type="button" class="btn btn-default">Send Email</button>
						</td>
						<td>
							<button type="button" class="btn btn-link">Detail</button>
						</td>
					</li>
            	@endforeach
        		</ul>
    		</div> 
    	</tr>
	</tbody>
</table>
</div>

</body>

<footer>
        <div class="text-center">
                <p>Uniersity of Sheffield/ Conmputer of Science/ Software System of Internet Technology/ Maxi Project/ Team Three </p> 
        </div>
</footer> 

</html>




