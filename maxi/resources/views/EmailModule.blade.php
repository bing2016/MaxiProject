<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8"> 
	<title>Email Module</title>
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script src="./jquery.js"></script>
	<link rel="stylesheet" href="{{ asset('css/shiyishi.css') }}">
		<link rel="stylesheet" type="text/css" href="http://sandbox.runjs.cn/uploads/rs/238/n8vhm36h/bootstrap-responsiv.css">
		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>

	<link rel="stylesheet" type="text/css" href="http://sandbox.runjs.cn/uploads/rs/238/n8vhm36h/dataTables.bootstra.css">

</head>

<body>
	
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
	             <a href="{{ url('/upload') }}"><button type="button" style="color:white" class="btn btn-link">Upload File</button></a>
	           	<a href="{{ url('/emailmodify') }}"><button type="button" style="color:white" class="btn btn-link"  >Email Modification</button></a>
				<button type="button" style="color:white" class="btn btn-link">Feedback</button>
	        </div>
	</div>
	        
	<div class="text-center col-md-12 content">
	     	<span style="font-size:45px;">Email Module</span>
	</div>

<div class="col-md-12 ">
<div class="col-md-4" style="margin-left: 30%" >
<table class="table">

    <thead>
        <tr>
            <th>Typle</th>
            <th>Name</th>
            <th>Manager</th>
            
    </thead>
    <tbody>

               
                <tr> 
                <td>Normal</td>

                		
                		 <td>
                		 <select type="text" name="name" value="" required>
                                <option value="welcome">Welcome</option>
                                <option value="apply">Apply</option>
                                <option value="fees">Fees</option>
                                <option value="officeInfo">OfficeInfo</option>
                        </select><br/>
                		</td>

                		<td>
                	
                		</td>
                		
        </tr>

    </tbody>
</table>
</div>
</div>


		
		<div class="col-md-4 text-center" style="margin-left:30% ">
		<br>
		<span>Content</span>
		<input class="form-control" type="" name=""><br>
		
				<button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-primary "> Delete</button>
                <button type="button" class="btn btn-primary "> Cancel</button>
        </div>
                

<div class="col-md-12 ">
<div class="col-md-4" style="margin-left: 30%" >
<table class="table">

    <thead>
        <tr>
            <th>Typle</th>
            <th>Name</th>
            <th>Manager</th>
            
    </thead>
    <tbody>

               
                <tr> 
                <td>Country</td>

                		
                		 <td >

                		 <input type="text" name="country_name" style="width: 50%">
                		 <button type="submit" name="submit" class="btn btn-primary">Search</button><br>
                		
                		
                		</td>

                		<td>
                	
                		</td>
                		
        </tr>

    </tbody>
</table>
</div>



		
		<div class="col-md-4 text-center" style="margin-left:30% ">
		<br>
		<span>Content</span>
		<input class="form-control" type="" name=""><br>
		
				<button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-primary "> Delete</button>
                <button type="button" class="btn btn-primary "> Cancel</button>
        </div>
</body>
<footer>
	<div class="text-center col-md-12 content" >
              <p>Uniersity of Sheffield/ Conmputer of Science/ Software System of Internet Technology/ Maxi Project/ Team Three </p> 
        </div>
</footer>

</html>