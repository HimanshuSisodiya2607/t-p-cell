<?php
session_start();
include("assets\conn.php");
$email =  $_SESSION['email'];

$cpass= $_POST['cpass'];
$npass= $_POST['npass'];
$cnpass= $_POST['cnpass'];

if($npass==$cnpass){

$sql = "SELECT * FROM `student` WHERE `email` = '$email'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if($cpass==$row['password']){
    $sql = "UPDATE `student` SET `password`=' $cnpass' WHERE `email` = '$email'";
           $result = mysqli_query($conn,$sql);
           $_SESSION['ss'] = true;
           header("location:change_pass.php");
}else{
    $_SESSION['wrongpass'] = true;
    header("location:change_pass.php");
}
}else{
    $_SESSION['missmatch'] = true;
    header("location:change_pass.php");
}



?>