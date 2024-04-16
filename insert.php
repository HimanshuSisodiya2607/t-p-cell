<?php

include("assets\conn.php");

$sname = $_POST['sname'];
$fname = $_POST['fname'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$mobile = $_POST['mobile'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
$gender = $_POST['gender'];
$branch = $_POST['branch'];
$back = $_POST['back'];
$agg = $_POST['agg'];
$sql = "SELECT * FROM `student` WHERE `email` = '$email'";
$result = mysqli_query($conn,$sql);
$row = mysqli_num_rows($result);

if($row<1){

if($pass==$cpass){

    $plenth = strlen($mobile);
  

    if($plenth>9&&$plenth<11){

    $code = rand(10000,99999);

           $sql = "INSERT INTO `student`( `code`, `sname`, `fname`, `email`, `phone`, `dob`, `gender`, `branch`, `agg`, `back`, `password`)
                   VALUES ('$code','$sname','$fname','$email','$mobile','$dob','$gender','$branch','$agg','$back','$pass')";
           $result = mysqli_query($conn,$sql);
           header("location:index.php");

        }else{
            session_start();
            $_SESSION['plenth_max'] = true;
            header("location:register.php");
        }
}else{
    
    session_start();
    $_SESSION['pass_notmatch'] = true;
    header("location:register.php");
}


}else{
    
    session_start();
    $_SESSION['accountalready'] = true;
    header("location:register.php");
}
?>