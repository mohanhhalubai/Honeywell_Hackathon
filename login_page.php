<!DOCTYPE html>
<html lang="en">
<head>
  <title>Food Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
 <script>
 $(document).ready(function(){
	$("#login").validate({
		rules:{
			email: {required : true , email : true},
			pass : {required : true}
		},
		messages : {
			email : {required : "Invalid email" ,email : "Invalid email"},
			pass : "Enter password"
		}
	}); 
	$("#regist").validate({
		rules:{
			name : {required:true},
			email: {required : true , email : true},
			pass : {required : true},
			re : {required : true},
			location : {required : true},
			ph_no : {required : true, digits : true}
		},
		messages : {
			name : "Enter name" ,
			email : "Enter email" ,
			pass : "Enter password" ,
			re : "Confirm password",
			location : "Enter Location",
			ph_no : "Enter Valid Phone Number",
			
		}
	}); 
 });
 </script>
</head>
<body>
<style>
body  {
    background-image: url("login.jpg");
    background-color: #F0FFFF;
    background-attachment: fixed;
    height: 100%; 

    /* Center and scale the image nicely 
    */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
#k{
    background-image: url("login.jpg");
    background-color: #F0FFFF;
    background-attachment: fixed;
    height: 100%; 

    /* Center and scale the image nicely 
    */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

</style>
<div class="container-fluid">
  <div class = "row">
  		
  	<div class = "col-md-3">
  		<div class = "col-md-7"></div>
  		<div class = "col-md-5">
  		<img src="bms.png" class="img-circle" alt="" width="200" height="200"> 
  		</div>
  	</div>
  	<div class = "col-md-9">
  		<div class = "col-md-1"></div>
  		<div class = "col-md-6">
  		<br/>
  		<br/>
 		<h1>Food Management System</h1>
 		<h3>Bengaluru</h3>
 		</div>
 		<div class="col-md-3"></div>
    
 	</div>
  
	</div>
	<hr style="width: 1000px;background-color:grey;height: 1px;size: 1px" />
	<div class = "row">
		<div class = "col-md-9"></div>
		<div class="col-md-3"> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="background-color: #B0E0E6;color: black">What is it?</button>

		<div class="modal fade"  id = "myModal">
			<div class="modal-dialog" >
				<div class="modal-content" id="k" >
        			<div class="modal-header" >
        		 <button type="button" class="close" data-dismiss="modal">&times;</button>
          		<h4 class="modal-title">Food Management System</h4>
        			</div>
        			<div class="modal-body">
          		<p> In highly populated countries like India, food wastage is a disturbing issue. The streets, garbage bins and landfills have ample proof to prove it. Marriages, canteens, restaurants, social and family get-togethers and functions expel out so much food. Our objective is to provide common platform which enable the needy or non profitable organisation to make use of excess or surplus food from other organisation, hotels or restaurants </p>
        			</div>
				
					<div class="modal-footer">
         	 <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: #F0FFFF">Close</button>
        			</div>
      			</div>
      		</div>
      </div>
      </div>
      </div>
      
      
    <div class="row">
    	<div class="col-md-2"></div>
    	<div class="col-md-8">
    	
 
  	<ul class="nav nav-pills ">
    	<li class="active"><a data-toggle="pill" href="#home">Login</a></li>
    	<li><a data-toggle="pill" href="#menu1">Register</a></li>
    	
  	</ul>
  <br/>
  <div class="tab-content" >
    <div id="home" class="tab-pane fade in active">
      <form  id = "login" action = "stud_login.php" method = "post" >
                        <div >
                            <input type="Email" name="email" id = "email" class="form-control" placeholder="Email" style="width: 500px">
                        </div>
                        <br/>
                        <div >
                            <input type="password" name="pass" id = "pass" class="form-control" placeholder="Password"
                            style="width: 500px">
                        </div>
                        <br/>
                         <button class="btn btn-primary btn-block" type = "submit" id = "s" style="width: 500px;background-color:#B0E0E6;color: black ">Submit</button>
                    	</form>
    </div>
    <div id="menu1" class="tab-pane fade">
       <form  id = "regist" action = "stud_enter.php" method = "post" >
                    <input type="text" class="form-control" placeholder="Name" id="name" name="name" style="width: 500px">
                     <br/>
                     <input type="Email" class="form-control" placeholder="Email" id="email" name="email" style="width: 500px">
                     <br/>
					 <input type="text" class="form-control" placeholder="Location" id="location" name="location" style="width: 500px">
                     <br/>
					  <input type="number" class="form-control" placeholder="Contact Number" id="ph_no" name="ph_no" style="width: 500px">
                     <br/>
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Password"
                            style="width: 500px">
                        <br/>
                        <input type="password" class="form-control" placeholder="Re-enter Password" name="re" id = "re"
                            style="width: 500px">
                        <br/>
                        
                         <button class="btn btn-primary btn-block" type="submit" style="width: 500px;background-color:#B0E0E6;color: black ">Register</button>

        </form>
    </div>
    
   
  </div>

                      
                      </div>
                      
                      <div class="col-md-2"></div>

</div>
</div>
</body>
</html>