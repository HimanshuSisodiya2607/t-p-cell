<?php
include("assets\conn.php");

$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM `student` WHERE `email` = '$email' AND `password` = '$pass'";
$result = mysqli_query($conn,$sql);
$row=mysqli_num_rows($result);


if($row>=1){
    session_start();
    $_SESSION['login'] = true;
    $_SESSION['email'] = $email;
    header("location:profile.php");
}else{

    session_start();
    $_SESSION['not_login'] = true;
    header("location:login.php");
    
}

?>