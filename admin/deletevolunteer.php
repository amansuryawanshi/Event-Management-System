<?php

include '../dbcon.php';
error_reporting(0);
$id =$_GET['idd'];
$query ="DELETE from volunteer where uid='$id'";
$data =mysqli_query($con,$query);
if($data){
    echo "<head><script>alert('Deleted successfuly')</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=./view_volunteers.php'>";

}else{
    echo "not deleted";
}

?>