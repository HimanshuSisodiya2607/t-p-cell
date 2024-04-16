<?php
session_start();
if(!isset($_SESSION['login'])){
  header("location:login.php");
 }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Change</title>

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
</head>
  <body>
  <?php
    include("navbar2.php");
    ?>
  <section class="vh-100" style ="background-color:#fb246a">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

            <b>    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4" style ="color:#fb246a">Change Password</p></b>

            <?php
                
                if(isset($_SESSION['not_login'])){
               
                ?>

                   <div class="alert alert-danger" role="alert">
                    Use Valid Password or Email
                    </div>

                  <?php
                     unset($_SESSION['not_login']);
              }

                  ?>

              <?php
                
                if(isset($_SESSION['wrongpass'])){
               
                ?>

                   <div class="alert alert-danger" role="alert">
                    Entred Wrong Current Password
                    </div>

                  <?php
                     unset($_SESSION['wrongpass']);
              }

                  ?>

             <?php
                
                if(isset($_SESSION['missmatch'])){
               
                ?>

                   <div class="alert alert-danger" role="alert">
                   Mismatch
                    </div>

                  <?php
                     unset($_SESSION['missmatch']);
              }

                  ?>
                  <?php
                
                if(isset($_SESSION['ss'])){
               
                ?>

                   <div class="alert alert-success" role="alert">
                   Password Changed Successfully
                    </div>

                  <?php
                     unset($_SESSION['ss']);
              }

                  ?>

            
                <form  class="mx-1 mx-md-4" action ="uchangepass.php" method = "post">


                <div class="d-flex flex-row align-items-center mb-4">
                   
                   <div class="form-outline flex-fill mb-0">
                     <input name ="cpass" type="password" id="form3Example4c" class="form-control" placeholder = "Enter Current Password" required/>
                     <label class="form-label" for="form3Example4c">Current Password</label>
                   </div>
                 </div>

                 <div class="d-flex flex-row align-items-center mb-4">
                   
                   <div class="form-outline flex-fill mb-0">
                     <input name ="npass" type="password" id="form3Example4c" class="form-control" placeholder = "Enter New Password" required/>
                     <label class="form-label" for="form3Example4c">New Password</label>
                   </div>
                 </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                   
                    <div class="form-outline flex-fill mb-0">
                      <input name ="cnpass" type="password" id="form3Example4c" class="form-control" placeholder = "Confirm Password" required/>
                      <label class="form-label" for="form3Example4c">Retype Password</label>
                    </div>
                  </div>

                  
     
      

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg" style="border-radius:8px;">Update</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="assets\img\register.webp" class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
    include("footer.php");
    ?>
</section>
  
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>