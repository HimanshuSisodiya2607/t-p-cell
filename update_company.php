<?php

include("assets\conn.php");


 if(strlen(trim($_REQUEST["id"]))>0){
        $code=$_REQUEST["id"];
        $cname = $_POST['cname'];
        $pkg = $_POST['pkg'];
        $dt = $_POST['dt'];
        $back = $_POST['back'];
        $agg = $_POST['agg'];
        $branch_cs ="";
        $branch_it ="";

        if(!empty($_FILES["pdf"])){
            
            $target_dir = "image/";
            $custom_name = "$cname.pdf"; // Set your custom name here
            $target_file = $target_dir . $custom_name;
            if(move_uploaded_file( $_FILES["pdf"]["tmp_name"], $target_file)){
            echo $cname;}
            }else{echo "done";}



        if(strlen($_POST['cs'])>0){

            $branch_cs =$_POST['cs'];

        }
        if(strlen($_POST['it'])>0){
            $branch_it =$_POST['it'];
        }
        
        

    $sql = "UPDATE `company` SET `cname`='$cname',`pkg`='$pkg',`dt`='$dt',`agg`='$agg',`back`='$back',`branch`=' $branch_cs,$branch_it' WHERE `cname` = '$code'";
           $result = mysqli_query($conn,$sql);

           if(mysqli_query($conn,"delete from branch where cname='$cname'")>0){

            if(isset($_POST['cs'])){
                $cs =$_POST['cs'];
                $sql ="INSERT INTO `branch`(`cname`, `branch`) 
                VALUES ('$cname','$cs')";
                $result =mysqli_query($conn,$sql);
            
            }
            if(isset($_POST['it'])){
                $it =$_POST['it'];
                $sql ="INSERT INTO `branch`(`cname`, `branch`) 
                VALUES ('$cname','$it')";
                $result =mysqli_query($conn,$sql);
            }
            
        }

        }
             
          
    ?>