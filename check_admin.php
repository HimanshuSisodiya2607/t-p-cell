<?php
include("assets\conn.php");

$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM `admin` WHERE `email` = '$email' AND `password` = '$pass'";
$result = mysqli_query($conn,$sql);
$row=mysqli_num_rows($result);


if($row>=1){
    session_start();
    $_SESSION['admin_login'] = true;
    $_SESSION['email'] = $email;
    header("location:dashbord.php");
   
}else{

    session_start();
    $_SESSION['admin_not_login'] = true;
    header("location:admin.php");
    
}

?>