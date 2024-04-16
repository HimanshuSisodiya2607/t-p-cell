<?php
session_start();
include("assets\conn.php");
$email =  $_SESSION['email'];
if(!isset($_SESSION['login'])){
  header("location:login.php");
 }   
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ragister User</title>

  <!-- CSS here -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/price_rangs.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            
<style>body{
    margin-top:20px;
    color: #1a202c;
    text-align: center;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}</style>
</head>
  <body>
  <?php
    include("navbar2.php");
    ?> 
<br>

<?php
            
            $s =1;
            $sql = "SELECT * FROM `student` WHERE`email` = '".$_SESSION['email']."'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result);
          
            ?>
 <form  class="mx-1 mx-md-4" action ="updateedit.php" method = "post">
<div class="container">
    <div class="main-body" id ="profile">
<div class="row gutters-sm">
           
              <div class="card mt-3">
               
              </div>
            </div>
            <div class="col-md-12">
           
              <div class="card mb-3">
                <div class="card-body">
              
                 <h2 class="mb-0" style="color:#fb246a"><b style="color:#fb246a">Edit Details</b></h2><br>
                 <div class="row">
                 <div class="col-sm-3">
                      <h6 class="mb-0">Students's Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input class="form-control" style="width:250px;" name="sname" type="text" value="<?php echo $row['sname'];?>">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                 <div class="col-sm-3">
                      <h6 class="mb-0">Students's Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input class="form-control" style="width:250px;" name="mobile" type="text" value="<?php echo $row['phone'];?>">
                 </div>
                  </div>
                  <hr>
                  <div class="row">
                 <div class="col-sm-3">
                      <h6 class="mb-0">Students's Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input class="form-control" style="width:250px;" name="email" type="text" value="<?php echo $row['email'];?>">
                 </div>
                  </div>
                  <hr>
                  <div class="row">
                 <div class="col-sm-3">
                      <h6 class="mb-0">Father's Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input class="form-control" style="width:250px;" name="fname" type="text" value="<?php echo $row['fname'];?>">
                  </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date of Birth</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="date" class="form-control" name="dob" style="width:250px;"  value="<?php echo $row['dob'];?>">
                
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Branch</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input class="form-control" style="width:250px;" name="branch" type="text" value="<?php echo $row['branch'];?>">
                
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input class="form-control" style="width:250px;" name="gender" type="text" value="<?php echo $row['gender'];?>">
                
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Back</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input class="form-control" style="width:250px;" name="back" type="text" value="<?php echo $row['back'];?>">
                
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Agreegate's</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input class="form-control" style="width:250px;" name="agg" type="text" value="<?php echo $row['agg'];?>">
                
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">

                     <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg" id="<?=$row['code']?>" style="border-radius:8px;">Update</button>
                  </div>
                 </div>
                  </div>
                </div>
              </div>

              
</div></div></div></div></form>
<br>


   

<?php
    include("footer.php");
    ?>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>