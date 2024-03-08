<?php

@include 'config.php';

session_start();

if(!isset($_SESSION[''])){
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>mainpage</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/css.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>HI, <span>DOCTOR/NURSE/PHARMACIST</span></h3>
      <br>
      <h1>WELCOME BACK TO YOUR DASHBOARD</h1>
      <br>
      <h3>This is where <span>VITALS</span> can be recorded</h3>
      <br>
      <h3>and also where <span>PRESCRIPTIONS</span> are recorded</h3>
      <br>
      <br>
      <a href="vitals.php" class="btn">Vitals Check</a>
      <a href="confirmation.php" class="btn">Doctors Appointments Confirmation</a>
      <a href="prescription.php" class="btn">Doctors/Pharmacist Prescription</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>