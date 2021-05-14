<?php 
include "dbcon.php";
include "header.php";





$output='';
if(isset($_POST['search'])){
    $searchq =$_POST['search'];
    $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
$searchquery="SELECT * FROM certificate WHERE registrationno LIKE '$searchq' OR certid LIKE '$searchq'";
    $query = mysqli_query($con,$searchquery) or die ("Could not search");
    $count =mysqli_num_rows($query);
    if($count==0){
        $output = "No result found";
    }else{
        while ($row = mysqli_fetch_array($query)){
            $name =$row['name'];
            $certid =$row['certid'];
            $event =$row['event'];
            $reg =$row['registrationno'];
            $output = '<div class="text-center"><h3>Results for "'.$searchq. '"</div><table class="table table-bordered table-striped table-hover mt-5"><thead><tr><th>CertID</th><th>Name</th><th>Registration No</th><th>Event</th></tr></thead><tbody><tr><td>'.$certid.'</td><td>'.$name.'</td><td>'.$reg.'</td><td>'.$event.'</tr></table>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    input[type=text]{
        width: 240px;
        color: black;
        border: none;
        border-bottom: solid red 1px;
    }
    input[type=text]:focus {
        outline: none;
  border: none;
  border-bottom: solid orange 1px;
}
    </style>
</head>
<body>
    <div class="container mt-5">
        <form action="certificate.php" method="POST" class="form  text-center "  >
            <input type="text" name="search" placeholder="Certificate ID or Registration No." class=" p-2 mr-2">
            <input type="submit" value="search" class="btn btn-warning">
        </form>
    </div>
    <div class="container mt-5"><?php print("$output")?></div>
 

</body>
</html>