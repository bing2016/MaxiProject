<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8"> 
	<title>Email Module</title>
  <script src="{{ URL::asset('/js/jquery.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/shiyishi.css') }}">



  <script>
   $(function() {
    $("#select_id").change(function() {
      var key = $(this).val();
      $("#a_id").attr("href", "/emailmodule/" + key );
    });
  });
</script>


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
  <div class="col-md-4">
   <a href="{{ url('/home') }}"><img src="{{URL::asset('/images/TUOS_Logo_CMYK.png')}}" alt="profile Pic" height="200" style="margin-left: 13%;" ></a>
 </div>
 <div class="col-md-8">
   <div class="text-center" style="font-size: 50px; margin-top:5%">
    <h><strong>Overseas Student Recruitment Management</strong></h>
  </div>
</div>
</div>
<div class="col-md-12">
  <div class="text-right" style="background-color: #66B3FF">
    <a class="btn btn-link" style="color:white" href="{{ url('/course/_default') }}" role="button">Add Courses</a>
    <a class="btn btn-link" style="color:white" href="{{ url('/department') }}" role="button">Add Department</a>
    <a href="{{ url('/upload') }}"><button type="button" style="color:white" class="btn btn-link"> Upload File</button></a>
    <a href="{{ url('/emailmodule/_default') }}"><button type="button" style="color:white" class="btn btn-link"  >Email Modification</button></a>
    <button type="button" style="color:white" class="btn btn-link" onclick="feedBack()">Feedback</button>
  </div>
</div>

<div class="text-center col-md-12 content">
	<br>
 <span style="font-size:45px;margin-left: 5%">Email Module</span>
</div>



<div class="col-md-12">

  <div class="col-md-9" style="margin-left: 15%; border: 4px solid #a1a1a1;margin-top: 20px;padding: 50px;">

    <div class="form-group">
      <table class="table table-hover">
        <tr>
          <th>Content Name</th>
          <th></th>
        </tr>
        <tr>
          <td> 

            <select id="select_id" class="form-control" value="">
             <option value="_default" >select part</option>

             @foreach ($email_modules as $module)
             <option value="{{$module['name']}}" >{{$module['name']}}</option>
             @endforeach

           </select>
         </td>
         <td>
          <button class="btn btn-link" type="button" style="color:white" ><a id="a_id">Search</a></button>
        </td>
      </tr>

    </table>


    <form method="POST" enctype="multipart/form-data" action="{{url('emailmodule')}}">
     {{ csrf_field() }}

     <label>Name</label>
   </label><input class="form-control" name="name" value="{{ $emailModule['name']}}"><br/>

   <label>Content</label>
   <textarea name="content" rows="6"  class="form-control" > {{$emailModule['content']}} </textarea>
   <br>

   <label>Manager</label>
   @if(($emailModule['manager'])!="")
   <input class="form-control" name="manager" value="{{ $emailModule['manager'] }}" readonly>
   @else
   <input class="form-control" name="manager" value=" {{ Auth::user()->name }}" readonly>
   @endif

    <br>
    <table style="margin-left: 30%">
    <tr>
    
     <td><button class="btn btn-primary " name="id" value="{{ $emailModule['id']}}" type="submit" style="color:white;float:left;margin-left:40px;" >Update</button></td>

   </form>

   <form method="POST" enctype="multipart/form-data" action="{{url('emailmodule/delete')}}">

     <td><button class="btn btn-primary " name="id" type="submit" value="{{ $emailModule['id']}}" style="color:white;float:left;margin-left:40px;" >Delete</button></td>
   </form>
    <td><a href="{{ url('/main') }}"><button class="btn btn-warning " type="button" style="color:white;float:left;margin-left:40px;" > Cancel</button></a></td>
    </tr>
    </table>


</div>
</div>

</body>
<footer>
	<div class="text-center col-md-12 content" >
    <p>University of Sheffield/ Computer of Science/ Software System of Internet Technology/ Maxi Project/ Team Three </p>  
  </div>
</footer>

</html>