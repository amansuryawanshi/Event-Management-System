<!DOCTYPE html>
<html>
<head>
	<title>Register For Event</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="./css/style.css">
<script type="text/javascript" src="js/jquery.js"></script>
<style>


</style>
</head>
<body>
	<?php $page="register";
     include 'header.php';?>
<div class="container register">
                <div class="row">
                    <div class="col-md-4 register-left">
                        <img src="./img/lpulogo.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>Register Yourself in just 30 Seconds</p>
                       <a href="login.php"> <input type="submit" name=""  value="Login"/><br/></a>
                    </div>
                    <div class="col-md-8 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Participant</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Volunteer</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Apply as a Participant</h3>

                                  
                                <form class="row register-form" action="register.php" method="POST" enctype="multipart/form-data">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" required placeholder=" Name *" name="fname" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control" required placeholder="Registration No *" name="rno" value="" />
                                        </div>
                                        <div class="form-group">
                                        	  <label >Payment Screenshot:</label>

                                            <input type="file" class="form-control"  name="photo" required  />
                                        </div>
                                      
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" required name="email" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control" placeholder="Phone No *" required name="phoneno" />
                                        </div>
                                        <div class='form-group'>
                                            
                                            <?php
                                            include'./dbcon.php';
						$query="SELECT * from events ";
						$result=mysqli_query($con,$query);
						
						
                        echo "<select name='event'  id=event  class='form-control' required >

                        <option  readonly>Select Event</option>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='$row[event_name]' data-officialcharges='$row[fee]'>" . $row['event_name'] . "</option>";
                        }
                        echo "</select>";

					?>
                                          
                                        </div>
                                        <div class="form-group">
                                      <input type="number" class="form-control" name="fee"  readonly="true" placeholder="Fees">
                                      </div>
                                        <input type="submit" class="btnRegister"  value="Register" name="submit" />
                                    </div>
                                 </form>
                                 
                                 <script type="text/javascript">

$('#event').change(function() {
    selectedOption = $('option:selected', this);
    $('input[name=fee]').val( selectedOption.data('officialcharges') );
   
});

  </script>
                            </div>
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Apply as a Volunteer</h3>
                                <form class="row register-form" action="register_volunteer.php" method="POST">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                            <input type="text" class="form-control" placeholder="UID" name="uid" readonly value="<?php echo time(); ?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name *" name="name" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control" placeholder="Registration No. *" name="rno" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email *" name="email" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" maxlength="11" class="form-control" placeholder="Phone *" name="phone" value="" />
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                       
                                        <div class="form-group">
                                        <?php
                                            include'./dbcon.php';
						$query="SELECT * from events";
						$result=mysqli_query($con,$query);
						
						
                        echo "<select name='event'  id=event  class='form-control' required >

                        <option  readonly>Select Event</option>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='$row[event_name]' >" . $row['event_name'] . "</option>";
                        }
                        echo "</select>";

					?>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="comment" placeholder="Why should we take you  *" value="" />
                                        </div>
                                         <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                        <input type="submit" class="btnRegister" name="submit"  value="Register"/>
                                    </div>
                    </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>