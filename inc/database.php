<?php
session_start();
include_once 'constant.php';
if (isset($_POST['submit'])) {
	$doctorName = $_POST['doctor'];
	$patient_name = $_POST['paname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$appointment_date = $_POST['appointment_date'];
    
	$connection = mysqli_connect($servername, $username, $password, $dbname);
		
	
	$query = "INSERT INTO da_appointment (doctor_name,patient_name,phone_num,email,address,appointment_date)
	    VALUES ('$doctorName', '$patient_name', '$phone','$email','$address','$appointment_date')";
    if(mysqli_query($connection, $query)){
        $_SESSION['serial'] = mysqli_insert_id($connection);
        $_SESSION['name'] = ucwords($patient_name);
        $_SESSION['dr'] = ucwords($doctorName);
        $_SESSION['date'] = $appointment_date;
        header('Location: http://localhost/doctor/serial.php');
    }else{
        echo 'Fail';
    }


}
