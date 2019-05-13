<?php 
    include_once 'inc/database.php';
    if( !isset( $_SESSION['name']) ) {
      header('Location: http://localhost/doctor/index.php');
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Doctor Appoinment</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
     
     
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    
    
   
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
    
 
        



    
    
     

    <!-- Specialist Area Starts -->
    <section class="" style="padding-top:80px;">
       <div class="container">
           
            <div class="row">
               
                <div class="col-lg-10 offset-lg-1" style="text-align:center">
                   <h1 style="color:green;"> Congratulation <?php
                        if( isset( $_SESSION['name'] ) ) {
                          echo $_SESSION['name'];
                          $_SESSION['name'] = null;
                        }
                    ?>!</h1>
                    <h3>Your Appoinment has booked successfully</h3>
                    <h3 style="text-transform: capitalize;"> for Doctor <span style="color:green"><?php
                        if( isset( $_SESSION['dr'] ) ) {
                          echo $_SESSION['dr'];
                          $_SESSION['dr'] = null;
                        }
                        ?>!</span></h3>
                    <h2 style="color:red"> Your serial no is # <?php
                        if( isset( $_SESSION['serial'] ) ) {
                          echo $_SESSION['serial'];
                          $_SESSION['serial'] = null;
                        }
                    ?></h2>
                    <h4>Be there in <?php if( isset( $_SESSION['date'] ) ) {
                          echo $_SESSION['date'];
                          $_SESSION['date'] = null;
                        }
                        ?>. Thank You</h4>
                     
                    <a href="/doctor/index.php" class="template-btn mt-3">Take Another Appointment</a>
                </div>
            </div>
        </div>
        <br/>
        
  </section>


    <!-- Javascript -->
    <script src="assets/js/jquery-2.2.4.min.js"></script>
  <script src="assets/js/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    
   
     
    
    <script src="assets/js/main.js"></script>

</body>
</html>
