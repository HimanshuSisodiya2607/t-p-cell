<?php
$cname=$_REQUEST['id'];
$filename = "image/" . $cname . ".pdf"; 

header("Content-type: application/pdf");
header("Content-Disposition: inline; filename='$filename'");
@readfile($filename);
?>
