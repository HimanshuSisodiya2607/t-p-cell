<?php
    if(strlen(trim($_REQUEST["id"]))>0){
        $code=$_REQUEST["id"];
        $conn=mysqli_connect("localhost","root","","t&p");
        if(mysqli_query($conn,"delete from student where code='$code'")>0){
            header("location:all_student.php?success==1");
        }
    }
?>