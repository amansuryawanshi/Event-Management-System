<?php

session_start();
if(isset($_SESSION["user_data"]))
{
	header("location:./admin/");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
.form-reg{
	padding-top: 50px;
	
}
.container{
	justify-content: center;
}
.card{
	z-index: 100;
    color: #fff;
    font-family: Montserrat, sans-serif;
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-flow: column;
    -ms-flex-flow: column;
    flex-flow: column;
    box-shadow: 0 15px 50px 10px rgb(0 0 0 / 20%);
    box-sizing: border-box;
    height: 460px;
    width: 360px;
    background: #fff;
    border-radius: 10px;
	justify-content: center;
	margin-top: 13%;
	margin-left: 32%;
}
</style>
</head>
<body>

<body >
    
	

		<div class="container">
		<div class="card">		
		<div class=" " style=" margin-left:102px;">
			
			
				<img src="img/lpulogo.png" style="max-height:150px; display:inline-block;" class="logo" alt="" />
		
			
		
		</div>
				<div class="mt-4">	<p class="text-center "style="color:black"  >Dear user, log in to access the admin area!</p>
		</div>

	

		
		
			<div class="d-flex justify-content-center form-reg" >
			<form action="secure_login.php" method='POST' class="col-md-10 form">				
				<div class="form-group ">					
			
						
					<input type="text"  placeholder="UserName" class="form-control" name="username" required>
					
				</div>				
								
				<div class="form-group">					
					
						
						<input type="password" name="password"  class="form-control" placeholder="Password">
							
				</div>
				
				<div class="form-group">
					<button type="submit" name="btnLogin" class="col-md-12 btn btn-primary" >
						Login 
					
					</button>
				</div>
			</form>
			</div>
	
			</div>
			</div>

</body>
</html>
