<?php include "./dbcon.php";
include "header.php";


if(isset($_REQUEST['idd'])){
    $id=$_REQUEST['idd'];
    $sql = "SELECT * from certificate WHERE certid='$id'";
    $query = mysqli_query($con,$sql);
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate for <?php echo $id; ?></title>
   
</head>
<body>


<div class="page-heading text-center">
<h1>Certificate for <?php echo $id ?></h1>
</div>
<div class="container mt-5 border border-primary rounded p-2 ">

 
<?php

 while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){
    header('content-type:image/png');
$image=imagecreatefrompng("certtemp.png");
$color=imagecolorallocate($image,19,21,22);


	
		$name=$result['name'];
		imagettftext($image,50,0,365,420,$color,$font,$name);
		$date="6th may 2020";
		imagettftext($image,20,0,450,595,$color,"AGENCYR.TTF",$date);
		
		imagepng($image);
		imagedestroy($image);
	}

 ?>
</body>
</html>