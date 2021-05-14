<?php

if(isset($_POST['generate'])){
	header('content-type:image/jpeg');
	$font="BRUSHSCI.TTF";
	$image=imagecreatefromjpeg("certificate.jpg");
	$color=imagecolorallocate($image,19,21,22);
	while($row=mysqli_fetch_assoc($res)){
		$name=$row['name'];
		imagettftext($image,50,0,365,420,$color,$font,$name);
		$date="6th may 2020";
		imagettftext($image,20,0,450,595,$color,"AGENCYR.TTF",$date);
		$file=time().'_'.$row['id'];
		imagejpeg($image,"certificate/".$file.".jpg");
		imagedestroy($image);
		mysqli_query($con,"update student set status=1 where id='".$row['id']."'");
	}
}
?>