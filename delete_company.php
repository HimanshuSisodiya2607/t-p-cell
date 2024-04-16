<?php
    if(strlen(trim($_REQUEST["id"]))>0){
        $cname=$_REQUEST["id"];
        $conn=mysqli_connect("localhost","root","","t&p");
        if(mysqli_query($conn,"delete from company where cname='$cname'")>0){
            if(mysqli_query($conn,"delete from branch where cname='$cname'")>0){
            header("location:all_company.php?success=1");
        }
        }
    }
  
    
?>