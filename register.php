<?php
include 'dbcon.php';

if(isset($_POST['submit'])){

$fname = $_POST['fname'];
$registrationno = $_POST['rno'];
$email = $_POST['email'];
$phone = $_POST['phoneno'];
$event = $_POST['event'];
$gender = $_POST['gender'];
$to_email="suryawanshiaman71@gmail.com";
$subject = "Registration Confirmation";
$body="Hi ".$fname."\nYou have Successfully registered for event - ".$event;
$headers = "From: amanwebtest@gmail.com";
		

$file =$_FILES['photo'];
$fee = $_POST['fee']?? null;
$filename =$file['name'];
$filepath = $file['tmp_name'];
$fileerror = $file['error'];
if($fileerror == 0){
	$destfile ='fileholder/'.$filename;
	move_uploaded_file($filepath,$destfile);

	$insertquery ="insert into registration(name,registrationno,email,phone,event,fee,gender,image) values('$fname','$registrationno','$email','$phone','$event','$fee','$gender','$destfile')";
	$query=mysqli_query($con,$insertquery);
	if($query){
		
		if(mail($to_email, $subject, $body, $headers)){
		echo "<head><script>alert('registered successfuly')</script></head></html>";
		echo "<meta http-equiv='refresh' content='0; url=index.php'>";
		}
	}else{
echo"not registerd";
	}
}


}else{
	echo "nobutton clicked";
}


?>