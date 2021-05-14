<?php 
include '../dbcon.php';

if(isset($_POST['submit'])){

$event = $_POST['event'];
$fee = $_POST['fee'];
$venue = $_POST['venue'];
$date= date('Y-m-d' ,strtotime($_POST['date']));
$desc=$_POST['description'];
$shortd=$_POST['shortd'];
$file =$_FILES['poster']?? null;
$filename =$file['name']??null;
$filepath = $file['tmp_name']?? null;
$fileerror = $file['error']?? null;
if($fileerror == 0){
	$destfile ='posters/'.$filename;
	move_uploaded_file($filepath,$destfile);

	$insertquery ="insert into events(event_name,fee,description,poster,event_date,venue,shortd) values('$event','$fee','$desc','$destfile','$date','$venue','$shortd')";
	$query=mysqli_query($con,$insertquery);
	if($query){
		echo "<head><script>alert('registered successfuly')</script></head></html>";
		echo "<meta http-equiv='refresh' content='0; url=index.php'>";

	}else{
echo"not registerd";
	}

}

}else{
	echo "nobutton clicked";
}

?>