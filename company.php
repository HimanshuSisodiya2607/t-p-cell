<?php
session_start();
if(!isset($_SESSION['admin_login'])){
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
            <script>// Smooth scrolling functionality
document.addEventListener("DOMContentLoaded", function() {
    const navLinks = document.querySelectorAll("nav a");

    navLinks.forEach(link => {
        link.addEventListener("click", smoothScroll);
    });

    function smoothScroll(event) {
        event.preventDefault();
        const targetId = event.target.getAttribute("href");
        const targetSection = document.querySelector(targetId);

        if (targetSection) {
            const targetOffset = targetSection.offsetTop - 50; // Adjust as needed
            window.scrollTo({
                top: targetOffset,
                behavior: "smooth"
            });

            // Add active class to the clicked link
            navLinks.forEach(link => link.classList.remove("active"));
            event.target.classList.add("active");
        }
    }
});
</script>
</head>
  <body>
  <?php
    include("navbar3.php");
    ?> 
  <section class="vh-100" style ="background-color:#fb246a">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

            <b>    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4" style ="color:#fb246a">Add Company </p></b>
                
            <form class="mx-1 mx-md-4" action ="insertcompany.php" method ="post" enctype="multipart/form-data">
                  <div class="d-flex flex-row align-items-center mb-4" >
                    
                    <div class="form-outline flex-fill mb-0">
                      <input name ="cname" type="text" id="form3Example1c" class="form-control" required/>
                      <label class="form-label" for="form3Example1c">Company Name</label>
                    </div>
                  </div>
                  <fieldset data-role="controlgroup">
        <label class="form-label" for="form3Example4c">Eligible Branch's</label><br>
        <input type="checkbox" name="cs" id="cs" value="CS" >
        <label for="cs">CS</label>&nbsp;&nbsp;
        <input type="checkbox" name="it" id="it" value="IT">
        <label for="it">IT</label>
      </fieldset><br>
                  <div class="d-flex flex-row align-items-center mb-4" >
                    
                    <div class="form-outline flex-fill mb-0">
                      <input name ="pkg" type="text" id="form3Example1c" class="form-control" required/>
                      <label class="form-label" for="form3Example1c">Package</label>
                    </div>
                  </div>
                  

                <div class="d-flex flex-row align-items-center mb-4" >
                    
                    <div class="form-outline flex-fill mb-0">
                      <input name ="dt" type="date" id="form3Example1c" class="form-control" required/>
                      <label class="form-label" for="form3Example1c">Date Of Arrival</label>
                    </div>
                  </div>

                 
      <br>
      <div class="d-flex flex-row align-items-center mb-4" >
                    
                    <div class="form-outline flex-fill mb-0">
                      <input name ="back" type="text" id="form3Example1c" class="form-control" required/>
                      <label class="form-label" for="form3Example1c">Maximum Backs</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4" >
                    
                    <div class="form-outline flex-fill mb-0">
                      <input name ="agg" type="text" id="form3Example1c" class="form-control" required/>
                      <label class="form-label" for="form3Example1c">Minimum Agreegate's required</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4" >
                    
                    <div class="form-outline flex-fill mb-0">
                      <input  type="file"  name ="pdf" class="form-control" required/>
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
  <?php
    include("footer.php");
    ?>
</section>
  
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>