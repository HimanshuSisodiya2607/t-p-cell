<?php

include("assets\conn.php");

$cname = $_POST['cname'];
$pkg = $_POST['pkg'];
$dt = $_POST['dt'];
$back = $_POST['back'];
$agg = $_POST['agg'];
$cs ="";
$it ="";


$target_dir = "image/";
$custom_name = "$cname.pdf"; // Set your custom name here
$target_file = $target_dir . $custom_name;

move_uploaded_file( $_FILES["pdf"]["tmp_name"], $target_file);

if(isset($_POST['cs'])){
    $cs = $_POST['cs'];
    $sql = "INSERT INTO `branch`(`cname`, `branch`) 
    VALUES ('$cname','$cs')";
    $result = mysqli_query($conn,$sql);

}
if(isset($_POST['it'])){
    $it = $_POST['it'];
    $sql = "INSERT INTO `branch`(`cname`, `branch`) 
    VALUES ('$cname','$it')";
  
}

 $sql = "INSERT INTO `company`(`cname`, `pkg`, `branch`, `dt`, `agg`, `back`) 
         VALUES ('$cname','$pkg','$cs,$it','$dt','$agg','$back')";
           $result = mysqli_query($conn,$sql);
           
       if($result){header("location:all_company.php");}

?>