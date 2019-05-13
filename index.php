<?php 
  include_once 'inc/database.php';
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
    <section class="specialist-area" style="padding-top:80px;">
       <div class="container">
           
            <div class="row">
               
                <div class="col-lg-10 offset-lg-1" style="text-align:center">
                    <h2>Caring for better life leading the way in medical excellence. We care Allah cure</h2>
                     
                    <a href="#go" class="template-btn mt-3">take appointment</a>
                </div>
            </div>
        </div>
        <br/>
        <div class="container">
            <div class="row"  id="go">
                <div class="col-lg-6 offset-lg-3" style="padding: 50px 0px 0px; margin-bottom: -50px;">
                    <div class="section-top text-center">
                       <h3>Internet Doctor Appoinment</h3>
                        <h4>Our Specialists</h4>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor mb-4 mb-lg-0">
                        <div class="doctor-img">
                            <img src="assets/images/doctor1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Pran Gopal Datta</h3>
                                <h6>MBBS, MCPS, Ph.D (Kiev)</h6>
                                <p>Saturday-Tuesday</p>
                                <p>5pm-7pm</p>
                            </div>
                            <div class="doctor-text text-center">
 
<!-- modal -->
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#doctor1">
   Book An Appoinment
 
</button>

<!-- Modal for doctor 1 -->
<div class="modal fade" id="doctor1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">


  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Book an Appointment</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
         <form action="inc/database.php" method="post">
      <div class="modal-body">
             <label class="form-control-label" for="doctor"> Doctor Name:</label>
              <input type="text" name="doctor" class="form-control" value="Rahi Chowdory" readonly><br>
             <input type="text"  name='paname' class="form-control" placeholder="Patient Name"><br>
             <input type="text"   name='phone' class="form-control" placeholder="Phone Number"> <br>
             <input type="text"   name='email' class="form-control" placeholder="Email(optional)"><br>
             <input type="text"   name='address' class="form-control" placeholder="Address(optional)"><br>
             <input type="date"   name='appointment_date' class="form-control" placeholder="Date of Appointment"><br>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <input type="submit" name="submit" class="btn btn-primary" value="Book Now">
      </div>
         </form>
      
    </div>
  </div>
</div>
                           
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor mb-4 mb-lg-0">
                        <div class="doctor-img">
                            <img src="assets/images/doctor2.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. Sumon</h3>
                                <h6>Child Specialist, MBBS, MPH, Phd</h6>
                                <p>Tuesday-Friday</p>
                                <p>10am-12pm</p>
                            </div>
                            <div class="doctor-text text-center">
                                  <!-- modal -->
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#doctor2">
   Book An Appoinment
 
</button>

<!-- Modal for doctor 1 -->
<div class="modal fade" id="doctor2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Book an Appointment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
         <form action="inc/database.php" method="post">
      <div class="modal-body">
             <label class="form-control-label" for="doctor"> Doctor Name:</label>
              <input type="text" name="doctor" class="form-control" value="Imran Hasan" readonly><br>
             <input type="text"  name='paname' class="form-control" placeholder="Patient Name"><br>
             <input type="text"   name='phone' class="form-control" placeholder="Phone Number"> <br>
             <input type="text"   name='email' class="form-control" placeholder="Email(optional)"><br>
             <input type="text"   name='address' class="form-control" placeholder="Address(optional)"><br>
             <input type="date"   name='appointment_date' class="form-control" placeholder="Date of Appointment"><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <input type="submit" name="submit" class="btn btn-primary" value="Book Now">
      </div>
         </form>
    </div>
  </div>
</div>
                                 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor mb-4 mb-sm-0">
                        <div class="doctor-img">
                            <img src="assets/images/doctor3.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Rithisha Khan</h3>
                                <h6>MBBS, DCH,FCPS(Paed)</h6>
                                <p>Saturday-Tuesday</p>
                                <p>5pm-7pm</p>
                            </div>
                            <div class="doctor-text text-center">
                        <!-- modal -->
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#doctor3">
   Book An Appoinment
 
</button>

<!-- Modal for doctor 1 -->
<div class="modal fade" id="doctor3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Book an Appointment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
         <form action="inc/database.php" method="post">
      <div class="modal-body">
             <label class="form-control-label" for="doctor"> Doctor Name:</label>
              <input type="text" name="doctor" class="form-control" value="Rithisha Khan" readonly><br>
             <input type="text"  name='paname' class="form-control" placeholder="Patient Name"><br>
             <input type="text"   name='phone' class="form-control" placeholder="Phone Number"> <br>
             <input type="text"   name='email' class="form-control" placeholder="Email(optional)"><br>
             <input type="text"   name='address' class="form-control" placeholder="Address(optional)"><br>
             <input type="date"   name='appointment_date' class="form-control" placeholder="Date of Appointment"><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <input type="submit" name="submit" class="btn btn-primary" value="Book Now">
      </div>
         </form>
    </div>
  </div>
</div>
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor">
                        <div class="doctor-img">
                            <img src="assets/images/doctor4.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Asharaful Islam</h3>
                                <h6>MBBS, FCPS (Cardiology), D-Card</h6>
                                <p>Saturday-Tuesday</p>
                                <p>5pm-7pm</p>
                            </div>
                            <div class="doctor-text text-center">
                                 <!-- modal -->
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#doctor4">
   Book An Appoinment
 
</button>

<!-- Modal for doctor 1 -->
<div class="modal fade" id="doctor4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Book an Appointment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
         <form action="inc/database.php" method="post">
      <div class="modal-body">
             <label class="form-control-label" for="doctor"> Doctor Name:</label>
              <input type="text" name="doctor" class="form-control" value="Asharul Islam" readonly><br>
             <input type="text"  name='paname' class="form-control" placeholder="Patient Name"><br>
             <input type="text"   name='phone' class="form-control" placeholder="Phone Number"> <br>
             <input type="text"   name='email' class="form-control" placeholder="Email(optional)"><br>
             <input type="text"   name='address' class="form-control" placeholder="Address(optional)"><br>
             <input type="date"   name='appointment_date' class="form-control" placeholder="Date of Appointment"><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <input type="submit" name="submit" class="btn btn-primary" value="Book Now">
      </div>
         </form>
    </div>
  </div>
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
  </section>


    <!-- Javascript -->
    <script src="assets/js/jquery-2.2.4.min.js"></script>
  <script src="assets/js/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    
   
     
    
    <script src="assets/js/main.js"></script>

</body>
</html>
