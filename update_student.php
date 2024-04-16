<?php
session_start();

include("assets\conn.php");
    if(strlen(trim($_REQUEST["id"]))>0){
        $code=$_REQUEST["id"];

    


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
            WHERE `code`='$code'";
           $result = mysqli_query($conn,$sql);
           if($result){
            session_start();
            $_SESSION['student_updated'] = true;
            header("location:all_student.php");
           }else{
            session_start();
            $_SESSION['student_notupdated'] = true;
            header("location:all_student.php");
           }
          

        }
        ?>