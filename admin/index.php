<?php
include '../dbcon.php';

include'header.php';
$part = mysqli_num_rows(mysqli_query($con,"SELECT * FROM registration"));
$eve = mysqli_num_rows(mysqli_query($con,"SELECT * FROM events"));
$vol = mysqli_num_rows(mysqli_query($con,"SELECT * FROM volunteer"));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>
    body{
    background-color: #F2EDF3;    
    }
	input{
		margin-top: 10px;}
		textarea{
			margin-top: 10px;
		}
		.counter {
    background-color:#f5f5f5;
    padding: 20px 0;
    border-radius: 15px;
	box-shadow: 3px 3px 17px -3px orangered ;
}

.count-title {
    font-size: 40px;
    font-weight: normal;
    margin-top: 10px;
    margin-bottom: 0;
    text-align: center;
}

.count-text {
    font-size: 17px;
    font-weight: bold;
    margin-top: 10px;
    margin-bottom: 0;
    text-align: center;
}

.fa-2x {
    margin: 0 auto;
    float: none;
    display: table;
    color: orange;
}
		</style>
</head>
<body>
<div class="container">
	<div class="row">
	    <br/>
	 <br>
	 <br>
		
             
		
	</div>
		<div class="row text-center">
	        <div class="col">
	        <div class="counter">
      <i class="fa fa-users fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="<?php echo  $part ;  ?>" data-speed="1500"></h2>
       <p class="count-text ">Participants</p>
    </div>
	        </div>
              <div class="col">
               <div class="counter">
      <i class="fa fa-calendar-check fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="<?php echo  $eve ;  ?>" data-speed="1500"></h2>
      <p class="count-text ">Events</p>
    </div>
              </div>
              <div class="col">
                  <div class="counter">
      <i class="fa fa-hands-helping fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="<?php echo  $vol ;  ?>" data-speed="1500"></h2>
      <p class="count-text ">Volunteers</p>
    </div></div>
         </div>
</div>
	<div class="box">
    <div class="container">
     	<div class="row">
			 
			    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
					<div class="box-part text-center">
                        
                        <i class="fa fa-users fa-3x" aria-hidden="true"></i>
                        
						<div class="title">
							<h4>Participants</h4>
						</div>
                        
						<div class="text">
							<span>View All Registered Participants</span>
						</div>
                        
						<button class="button" onclick="document.location='./viewparticipant.php'">View Participants</button>
                        
					 </div>
				</div>	 
				
				 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
					<div class="box-part text-center">
					    
					    <i class="fa fa-hands-helping fa-3x" aria-hidden="true"></i>
                    
						<div class="title">
							<h4>Volunteers</h4>
						</div>
                        
						<div class="text">
							<span>View All Registered Volunteers</span>
						</div>
                        
						<button class="button" onclick="document.location='./view_volunteers.php'">
							View Volunteers
						</button>
                        
					 </div>
				</div>	 
				
				 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
					<div class="box-part text-center">
                        
                        <i class="fa fa-calendar-plus fa-3x" aria-hidden="true"></i>
                        
						<div class="title">
							<h4>Add New Event</h4>
						</div>
                        
						<div class="text">
							<span>Add New Event</span>
						</div>
						<button type="button" class="button"  onclick="document.location='./newevent.php'">
Add New Event</button>
                        
					 </div>
				</div>	 
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
					<div class="box-part text-center">
					    
					    <i class="fa fa-calendar-check fa-3x" aria-hidden="true"></i>
                    
						<div class="title">
							<h4>View Events</h4>
						</div>
                        
						<div class="text">
							<span>View Active Events</span>
						</div>
                        
						<button class="button" onclick="document.location='./view_events.php'">
							View Events
						</button>
                        
					 </div>
				</div>	 
				
				
				
				
		</div>		
    </div>
</div>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Event</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<?php include'footer.php'; ?>
<script src="js/counter.js"></script>
<script src="../ckeditor/ckeditor.js"></script>
<script>
CKEDITOR.replace('editor')
</script>
</body>
</html>