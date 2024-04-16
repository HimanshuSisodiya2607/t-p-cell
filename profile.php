<?php
session_start();
include("assets\conn.php");
$email =  $_SESSION['email'];

if(!isset($_SESSION["login"])){
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

<?php
                
                if(isset($_SESSION['notupdated'])){
               
                ?>

                   <div class="alert alert-danger" role="alert">
                    Detail Not Upadted
                    </div>

                  <?php
                     unset( $_SESSION['notupdated']);
              }

                  ?>

<?php
                
                if(isset( $_SESSION['updated'])){
               
                ?>

                   <div class="alert alert-success" role="alert">
                    Detail Updated
                    </div>

                  <?php
                     unset($_SESSION['updated']);
              }

                  ?>


<div class="container">
    <div class="main-body" id ="profile">
<div class="row gutters-sm">
            <div class="col-md-12 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="assets\simg.jpg" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $row['sname'];?></h4>
                      <p class="text-secondary mb-1"><?php echo $row['phone'];?></p>
                      <p class="text-muted font-size-sm"><?php echo $row['email'];?> </p>
                     </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
               
              </div>
            </div>
            <div class="col-md-12">
           
              <div class="card mb-3">
                <div class="card-body">
              
                 <h2 class="mb-0" style="color:#fb246a"><b style="color:#fb246a">Other Details</b></h2><br>
                 
                  <div class="row">
                 <div class="col-sm-3">
                      <h6 class="mb-0">Father's Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['fname'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date of Birth</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['dob'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Branch</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['branch'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['gender'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Agreegate's</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['agg'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " style="border-radius:8px;" target="__blank" href="edit.php">Edit Details</a>
                    </div>
                  </div>
                </div>
              </div>

              
</div></div></div></div>
<br>

<div class="container"  id="check_agg">
   <section class="content-header" id="check_agg">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6" id="cel">
            
          <table id="example" class="table table-bordered" style="width:200%" >
        <thead>
          <?php 
         $agg = $row['agg'];
         $back = $row['back'];
         $branch = $row['branch'];

           $sql1 = "SELECT * FROM `company` WHERE `agg`<'$agg' AND `back`>'$back'";
           $result1 = mysqli_query($conn,$sql1);
          
          ?>
            <tr>
                <th >#</th>
                <th>Company Name</th>
                <th>Date</th>
                <th>Pakage</th>
                <th>More Details</th>
               
            </tr>
        </thead>
        <tbody>

       <?php   
        $s=1;
        while($row = mysqli_fetch_array($result1)){
            ?>
            <tr>

                <td ><?php echo"$s."?></td>
                <td ><?php echo $row['cname'] ?></td>
                <td ><?php echo $row['dt'] ?></td>
                <td ><?php echo $row['pkg'] ?></td>
                <td><a href="pdf.php?id=<?=$row['cname']?>" style="color:blue">View</a></td>
                
            </tr>

            <?php
        
             $s++;
            }
            ?>
           
            
           
           
        </tbody>
        
    </table>




          </div>
          
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    </div>

<?php
    include("footer.php");
    ?>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>