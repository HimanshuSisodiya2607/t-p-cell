<?php
$id=$_REQUEST['id'];
session_start();
$_SESSION['send_email'] =true;
header("location:admin_sportal.php?id=$id");

?>