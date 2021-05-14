<?php

$server ="localhost";
$user ="root";
$password="";
$db = "eventregis";

$con = mysqli_connect($server,$user,$password,$db);


if(isset($_REQUEST['id'])){
    $id=$_REQUEST['id'];
    $sql = "SELECT * from events WHERE id=$id";
    $query = mysqli_query($con,$sql);
}

?>