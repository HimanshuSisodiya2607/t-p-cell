<?php
session_start();
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
</head>
  <body>
  <?php
    include("navbar.php");
    ?> 
  <section class="vh-100" style ="background-color:#fb246a">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

            <b>    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4" style ="color:#fb246a">Register User </p></b>

            <?php
                
                if(isset($_SESSION['pass_notmatch'])){
               
                ?>

                   <div class="alert alert-danger" role="alert">
                     password not match
                    </div>

                  <?php
                     unset($_SESSION['pass_notmatch']);
              }

                  ?>
                   <?php
                
                if(isset($_SESSION['accountalready'])){
               
                ?>

                   <div class="alert alert-danger" role="alert">
                    Email Already Ragistered
                    </div>

                  <?php
                     unset($_SESSION['accountalready']);
              }

                  ?>
                  <?php
                
                if(isset( $_SESSION['plenth_max'])){
               
                ?>

                   <div class="alert alert-danger" role="alert">
                    Enter Vailed Phone Number
                    </div>

                  <?php
                     unset($_SESSION['plenth_max']);
              }

                  ?>
                <form class="mx-1 mx-md-4" action ="insert.php" method = "post">

                  <div class="d-flex flex-row align-items-center mb-4" >
                    
                    <div class="form-outline flex-fill mb-0">
                      <input name ="sname" type="text" id="form3Example1c" class="form-control" required/>
                      <label class="form-label" for="form3Example1c">Your Name</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4" >
                    
                    <div class="form-outline flex-fill mb-0">
                      <input name ="fname" type="text" id="form3Example1c" class="form-control" required/>
                      <label class="form-label" for="form3Example1c">Father's Name</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                  
                  <div class="form-outline flex-fill mb-0">
                    <input name ="email" type="email" id="form3Example3c" class="form-control" required/>
                    <label class="form-label" for="form3Example3c">Your Email</label>
                  </div>
                </div>

                <div class="d-flex flex-row align-items-center mb-4" >
                    
                    <div class="form-outline flex-fill mb-0">
                      <input name ="dob" type="date" id="form3Example1c" class="form-control" required/>
                      <label class="form-label" for="form3Example1c">Date Of Birth</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4" >
                    
                    <div class="form-outline flex-fill mb-0">
                      <input name ="mobile" type="tel" id="form3Example1c" class="form-control" required/>
                      <label class="form-label" for="form3Example1c">Mobile Number</label>
                    </div>
                  </div>
                 

                  <div class="d-flex flex-row align-items-center mb-4">
                   
                    <div class="form-outline flex-fill mb-0">
                      <input name ="pass" type="password" id="form3Example4c" class="form-control" required/>
                      <label class="form-label" for="form3Example4c">Choose Password</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                  
                    <div class="form-outline flex-fill mb-0">
                      <input name ="cpass" type="password" id="form3Example4cd" class="form-control" required/>
                      <label class="form-label" for="form3Example4cd">Repeat password</label>
                    </div>
                  </div>

        <fieldset data-role="controlgroup">
        <label class="form-label" for="form3Example4c">Gender:</label><br>
        <input type="radio" name="gender" id="male" value="male" checked>
        <label for="male">Male</label>
        <input type="radio" name="gender" id="female" value="female">
        <label for="female">Female</label>
        
      </fieldset>
      <br>
      <fieldset data-role="controlgroup">
        <label class="form-label" for="form3Example4c">Branch:</label><br>
        <input type="radio" name="branch" id="cs" value="CS" checked>
        <label for="cs">Cs</label>
        <input type="radio" name="branch" id="it" value="IT">
        <label for="it">IT</label>
      </fieldset>
      <br>
      <div class="d-flex flex-row align-items-center mb-4" >
                    
                    <div class="form-outline flex-fill mb-0">
                      <input name ="back" type="text" id="form3Example1c" class="form-control" required/>
                      <label class="form-label" for="form3Example1c">How Many Backs</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4" >
                    
                    <div class="form-outline flex-fill mb-0">
                      <input name ="agg" type="text" id="form3Example1c" class="form-control" required/>
                      <label class="form-label" for="form3Example1c">Agreegate's</label>
                    </div>
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                    
                    <label class="form-check-label" for="form2Example3">
                      <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" required/>
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg" style="border-radius:8px;">Register</button>
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
<div>
  <?php
    include("footer.php");
    ?>
</div>
</section>
  
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>