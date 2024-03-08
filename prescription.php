<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $past_diagnosis = mysqli_real_escape_string($conn, $_POST['past_diagnosis']);
   $present_diagnosis = mysqli_real_escape_string($conn, $_POST['present_diagnosis']);
   $prescribed_drugs = mysqli_real_escape_string($conn, $_POST['prescribed_drugs']);
   $admission = mysqli_real_escape_string($conn, $_POST['admission']);


   $select = " SELECT * FROM prescription_form WHERE  = '$' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = '';

   }else{

      if($name != $name){
         $error[] = 'confirm name on appointment, must be same!';
      }else{
         $insert = "INSERT INTO prescription_form(name, past_diagnosis, present_diagnosis, prescribed_drugs, admission) VALUES('$name','$past_diagnosis','$present_diagnosis','$prescribed_drugs','$admission')";
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
   <title>prescription form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/css.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>prescriptions</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="Enter Name">
      <input type="text" name="past_diagnosis" required placeholder="Input Past Diagnosis">
      <input type="text" name="present_diagnosis" required placeholder="Input Present Diagnosis">
      <input type="text" name="prescribed_drugs" required placeholder="Input Prescribed Drugs">
      <input type="text" name="admission" required placeholder="Does the Patient Need to be Admitted">
      <input type="submit" name="submit" value="SUBMIT" class="form-btn">
      <a href="mainpage.php" class="btn">Go Back</a>
    </form>

</div>

</body>
</html>