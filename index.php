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
   <title>homepage</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/css.css">

</head>
<body>
   
<div class="container1">

   <div class="content">
      <h3><span>WELCOME TO</span></h3>
      <br>
      <h1>YABA COLLEGE OF EDUCATION</h1>
      <br>
      <h3><span>IME EMRS</span></h3>
      <br>
      <br>
      <a href="about.php" class="btn">About EMRS</a>
      <a href="registration.php" class="btn">Register</a>
      <a href="login.php" class="btn">DASHBOARD</a>
      <a href="contact.php" class="btn">Contact US</a>
   </div>

</div>

</body>
</html>