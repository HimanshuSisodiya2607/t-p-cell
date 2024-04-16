<?php
session_start();
include("assets\conn.php");

$sname = $_POST['sname'];
$fname = $_POST['fname'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$branch = $_POST['branch'];
$back = $_POST['back'];
$agg = $_POST['agg'];


           $sql = "UPDATE `student` SET `sname`='$sname',`fname`='$fname',`email`='$email',
           `phone`='$mobile',`dob`='$dob',`gender`='$gender',`branch`='$branch',`agg`='$agg',`back`='$back'
            WHERE `email`='".$_SESSION['email']."'";
           $result = mysqli_query($conn,$sql);
           if($result){
            session_start();
            $_SESSION['updated'] = true;
            header("location:profile.php");
           }else{
            session_start();
            $_SESSION['notupdated'] = true;
            header("location:profile.php");
           }
          
?>
       