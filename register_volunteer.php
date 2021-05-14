<?php
include 'dbcon.php';

if(isset($_POST['submit'])){

$name = $_POST['name'];
$registrationno = $_POST['rno'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$event = $_POST['event'];
$gender = $_POST['gender'];
$comment=$_POST['comment'];
$uid=$_POST['uid'];

	$insertquery ="insert into volunteer (uid,name,registrationno,email,phone,event,gender,comment) values('$uid','$name','$registrationno','$email','$phone','$event','$gender','$comment')";
	$query=mysqli_query($con,$insertquery);
	if($query){
		echo "<head><script>alert('registered successfuly')</script></head></html>";
		echo "<meta http-equiv='refresh' content='0; url=index.php'>";

	}else{
echo"not registerd";
	}



}else{
	echo "nobutton clicked";
}


?>