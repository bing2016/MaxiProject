<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<meta charset="UTF-8"> 
	<title>Teacher-Stu Interface</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<link rel="stylesheet" href="{{ asset('css/shiyishi.css') }}">
	<link rel="stylesheet" type="text/css" href="http://sandbox.runjs.cn/uploads/rs/238/n8vhm36h/bootstrap-responsiv.css">
	<link rel="stylesheet" type="text/css" href="http://sandbox.runjs.cn/uploads/rs/238/n8vhm36h/dataTables.bootstra.css">
    <script src="{{ URL::asset('/js/jquery.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

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
        <a href="{{ url('/home') }}">Main</a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

{{ csrf_field() }}

        </form>
    </div>

@endif

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
        <a href="{{ url('/emailmodify') }}"><button type="button" style="color:white" class="btn btn-link"  >Email Modification</button></a>
        <button type="button" style="color:white" class="btn btn-link">Feedback</button>
        </div>
</div>

<div class="col-md-6">
	<div class="text-left">

	<br>
		&emsp;<button class="btn btn-default" type="">Sort</button>&emsp;
		<button class="btn btn-default" type="">Delete</button>&emsp;
		<button class="btn btn-default" onclick="allSelect();" >Select All/Cancel All</button>&emsp;
		<a class="btn btn-default" href="{{ url('/enquireies') }}" role="button">Add Student</a>&emsp;
		<button class="btn btn-default" type="">Modify</button>&emsp;
		<button class="btn btn-default" type="">Donload</button><br><br>
	</div>
</div>

<div class="col-md-3"></div>
<div class="col-md-3" ><br>
 <form class="form-inline" role="form" >

      <div class="form-group">
        
        <select id="select_id" class="form-control">
            <option>first_name</option>
            <option>last_name</option>
        </select>
        <input type="text" id="input_id" class="form-control">
        <button class="btn"><a id="a_id">Search</a></button>
        
        <script>
            $(function() {
                $("#select_id").change(function() {
                    var key = $(this).val();
                    var value = $("#input_id").val();
                    $("#a_id").attr("href", "{{  url(' (/main/" + key + "/" + value + "') }}" );
                });

                $("#input_id").keyup(function() {
                    var key = $("#select_id").val();
                    var value = $(this).val();
                    $("#a_id").attr("href", "/main/" + key + "/" + value);
                });
            });
        </script>
      </div>
     </form>
</div>


<div class="row-fliod">
<table class="table table-striped table-hover datatable">
<div class="checkbox">
    <thead>
        <tr>
            <th></th>
            <th>Q?</th>
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

        
                
                @foreach ($students as $student)
                <tr>
                        <td>
                            <label><input type="checkbox" id="chk_list_4" value="option1" ></label>
                        </td>
                        <td>
                        @if ($student->is_special == 1)
                        <label><input type="checkbox" checked disabled></label>
                        @else
                        <label><input type="checkbox" disabled></label>
                        @endif
                        </td>
                        <td> {{ $student->first_name }} </td>
                        <td> {{ $student->nationality}} </td>
                        <td> {{ $student->email }} </td>
                        <td> {{ $student->manager }} </td>
                        <td> {{ $student->date }} </td>
                        <td> {{ $student->department }} </td>
                        <td>
                            <button type="button" class="btn btn-default">Send Email</button>
                        </td>
                        <td>
                            <a href="{{ url(str_replace('{id}',$student->id,'/details/{id}')) }} "><button type="button" class="btn btn-link">Detail</button></a>
                        </td>
                @endforeach
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




