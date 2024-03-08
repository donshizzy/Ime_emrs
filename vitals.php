<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $pulse_rate = mysqli_real_escape_string($conn, $_POST['pulse_rate']);
   $respiratory_rate = mysqli_real_escape_string($conn, $_POST['respiratory_rate']);
   $blood_pressure = mysqli_real_escape_string($conn, $_POST['blood_pressure']);
   $body_temperature = mysqli_real_escape_string($conn, $_POST['body_temperature']);


   $select = " SELECT * FROM vitals_form WHERE  = '$' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = '';

   }else{

      if($name != $name){
         $error[] = 'confirm name on appointment, must be same!';
      }else{
         $insert = "INSERT INTO vitals_form(name, pulse_rate, respiratory_rate, blood_pressure, body_temperature) VALUES('$name','$pulse_rate','$respiratory_rate','$blood_pressure','$body_temperature')";
         mysqli_query($conn, $insert);
         header('location:mainpage.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>vitals form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/css.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>vitals check</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="Enter Name">
      <input type="text" name="pulse_rate" required placeholder="Input Pulse Rate">
      <input type="text" name="respiratory_rate" required placeholder="Input Respiratory Rate">
      <input type="text" name="blood_pressure" required placeholder="Input Blood Pressure">
      <input type="text" name="body_temperature" required placeholder="Input Body Temperature">
      <input type="submit" name="submit" value="SUBMIT" class="form-btn">
      <a href="mainpage.php" class="btn">Go Back</a>
    </form>

</div>

</body>
</html>