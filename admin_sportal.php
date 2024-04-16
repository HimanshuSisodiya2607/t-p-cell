<?php
session_start();
include("assets\conn.php");
if(!isset($_SESSION['admin_login'])){
    header("location:login.php");
   }  
$email =  $_SESSION['email'];
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
}

</style>
</head>
  <body>
  <?php
    include("navbar3.php");
  ?> 
<br>
                                  <!--it is for the alert-->
         <?php
             if(isset($_SESSION['send_email'])){
                ?>
             <div class="alert alert-success" role="alert">
                   Email Sent Succesfully
            </div>
                <?php
                     unset($_SESSION['send_email']);
              } ?>

   <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6" id="cel">
            
          <table id="example" class="table table-bordered" style="width:200%" >
        <thead>
            <tr>
            <th >#</th>
                <th>Student Name</th>
                <th>Father's Name</th>
                <th>Email</th>
                <th>Phone No.</th>
                <th>DOB </th>
                <th>Gender</th>
                <th>Branch</th>
                <th>Aggrigate</th>
                <th>Back</th>
                

            </tr>
        </thead>
        <tbody>
                     
<?php
 $company = $_REQUEST['id'];


 $sql = "SELECT * FROM `company` WHERE `cname`='$company'";
 $result = mysqli_query($conn,$sql);
 $company_detail=mysqli_fetch_array($result);
 $agg=$company_detail['agg'];
 $back=$company_detail['back'];

 $sql_branch = "SELECT * FROM `branch` WHERE `cname`='$company'";
 $result_branch = mysqli_query($conn,$sql_branch);

 while($company_branch=mysqli_fetch_array($result_branch)){
    $branch=$company_branch['branch'];
                 
    $sql1 = "SELECT * FROM `student` WHERE `agg`>'$agg' AND `back`<'$back' AND `branch`='$branch'";
   $result1 = mysqli_query($conn,$sql1);

       $s=1;
        while($row = mysqli_fetch_array($result1)){
            ?>
            <tr>
                <td ><?php echo"$s." ?></td>
                <td><?php echo $row['sname'] ?> </td>
                <td><?php echo $row['fname'] ?></td>
                <td ><?php echo $row['email'] ?></td>
                <td><?php echo $row['phone'] ?> </td>
                <td><?php echo $row['dob'] ?></td>
                <td ><?php echo $row['gender'] ?></td>
                <td><?php echo $row['branch'] ?> </td>
                <td><?php echo $row['agg'] ?></td>
                <td ><?php echo $row['back'] ?></td> 
            </tr>

    <?php $s++;}}?>
</tbody>
    </table>

    <a style="margin-left:90%" href="email.php?id=<?=$company?>"><button style="border-radius:15px;" class="btn">Send Email</button></a>
  
</div>
          
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<?php
    include("footer.php");
    ?>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>




