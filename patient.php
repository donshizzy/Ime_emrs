<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>patient page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/css.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>HI, <span>Patient</span></h3>
      <h1>HEALTH IS WEALTH</h1>
      <p>Thank you for filling the booking form.</p>
      <p>We would get back to you via e-mail.</p>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>