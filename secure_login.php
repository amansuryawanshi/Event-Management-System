<?php
include 'dbcon.php';

$username = ltrim($_POST['username']);
$username = rtrim($username);

$password = ltrim($_POST['password']);
$password = rtrim($_POST['password']);

$username = stripslashes($username);
$password     = stripslashes($password);



if($password=="" &&  $username==""){
   echo "<head><script>alert('Username and Password can't be empty');</script></head></html>";
               echo "<meta http-equiv='refresh' content='0; url=login.php'>";
  
}
else if($password=="" ){
   echo "<head><script>alert('Password can be empty');</script></head></html>";
               echo "<meta http-equiv='refresh' content='0; url=login.php'>";
  
}
else if($username=="" ){
   echo "<head><script>alert('Username can be empty');</script></head></html>";
               echo "<meta http-equiv='refresh' content='0; url=login.php'>";
  
}

else{

$username = mysqli_real_escape_string($con, $username);
$password     = mysqli_real_escape_string($con, $password);
$sql          = "SELECT * FROM admin WHERE username='$username' and password='$password'";
$result       = mysqli_query($con, $sql);
$count        = mysqli_num_rows($result);
if ($count == 1) {
    $row = mysqli_fetch_assoc($result);
    session_start();
    // store session data
    $_SESSION['user_data']  = $username;
    $_SESSION['logged']     = "start";
    // $_SESSION['auth_level'] = $row['level'];
    $_SESSION['full_name']  = $username;
    $_SESSION['username']=$row['Full_name'];
    // $auth_l_x               = $_SESSION['auth_level'];
    // if ($auth_l_x == 5) {
        header("location: ./admin/");
    // } else if ($auth_l_x == 4) {
    //     header("location: ../dashboard/cashier/");
    // } else if ($auth_l_x == 3) {
    //     header("location: ../dashboard/member/");        
    // } else {
    //     header("location: ../login/");
    // }
} else {
    include 'login.php';
    echo "<html><head><script>alert('Username OR Password is Invalid');</script></head></html>";
}
}
?>
