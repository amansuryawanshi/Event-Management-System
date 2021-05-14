<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<style>
.share:hover {
        text-decoration: none;
    opacity: 0.8;
}
.card{


    box-shadow: rgba(50, 50, 105, 0.15) 0px 2px 5px 0px, rgba(0, 0, 0, 0.05) 0px 1px 1px 0px;
    }
.card:hover{
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
}
.fa{
    color:orange;
}
</style>
</head>
<body>
<?php $page="home"; include'./header.php';
 ?>
<div class="container">
<div class="row">
<?php

require "./dbcon.php";
$sql="SELECT * from events ORDER BY id desc";
$query_run=mysqli_query($con,$sql);
$check_event=mysqli_num_rows($query_run)>0;
if($check_event){
while($row=mysqli_fetch_array($query_run)){
 ?>
 
 <div class="col-md-3">  
         <div class="card bg-light mt-5 ">
         <img src="./admin/<?php echo $row['poster'] ; ?>" class="card-img-top">
            <div class="card-body">
                
               <h4 class="card-title border-bottom pb-3"><a href="./viewsingle_event.php?id=<?php echo $row['id']  ?>" style="text-decoration: none; color:black;" > <?php echo  $row['event_name']; ?></a> <a href="./viewsingle_event.php?id=<?php echo $row['id']  ?>" class="btn btn-warning" style="float: right;"><i class="fas fa-angle-double-right"></i></a> </h4>
               <div class="row">
               <h5 class="col-md-5"><i class="fa fa-rupee-sign"></i>  <?php echo  $row['fee']; ?></h6>
               <h5 class="col-md-7"><i class="fa fa-calendar-alt"></i> <?php echo  $row['event_date']; ?></h6>
               </div>
              <p class="" style="display:block;text-overflow: ellipsis;width: 200px;overflow: hidden; white-space: nowrap;"><?php echo  $row['shortd']; ?></p>
            </div>
         </div>
      </div>
 <?php
    
}
}else{
    echo "No Event Found";
}

?>

   </div>   
   </div>
   <?php include 'footer.php' ?> 
</body>
</html>