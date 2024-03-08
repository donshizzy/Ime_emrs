<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $designation_type = $_POST['designation_type'];
   $sid_mno = mysqli_real_escape_string($conn, $_POST['sid_mno']);
   $department_type = $_POST['department_type'];  
   $address = mysqli_real_escape_string($conn, $_POST['address']);
   $phone = mysqli_real_escape_string($conn, $_POST['phone']);
   $dofa = mysqli_real_escape_string($conn, $_POST['dofa']);
   $dob = mysqli_real_escape_string($conn, $_POST['dob']);
   $gender_type = $_POST['gender_type'];
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'User email already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, designation_type, sid_mno, department_type, address, phone, dofa, dob, gender_type, password, user_type) VALUES('$name','$email','$designation_type','$sid_mno','$department_type','$address','$phone','$dofa','$dob','$gender_type','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login.php');
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
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/css.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>registration/information form</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="Enter Name">
      <input type="email" name="email" required placeholder="Enter Email">
      <select name="designation_type">
         <option value="staff">Staff</option>
         <option value="student">Student</option>
         <option value="others">Others</option>
      </select>
      <input type="text" name="sid_mno" required placeholder="Enter Staff ID or Matric Number">
      <select name="department_type">
         <option value="Accountancy Department">Accountancy Department</option>
         <option value="Agricultural & Bio-Environmental Engineering Department">Agricultural & Bio-Environmental Engineering Department</option>
         <option value="Agricultural Technology Department">Agricultural Technology Department</option>
         <option value="Architecture Department">Architecture Department</option>
         <option value="Art Education Department">Art Education Department</option>
         <option value="Banking and Finance Department">Banking and Finance Department</option>
         <option value="Biological Science Department">Biological Science Department</option>
         <option value="Building Technology Department">Building Technology Department</option>
         <option value="Business Administration Department">Business Administration Department</option>
         <option value="Business Education Department">Business Education Department</option>
         <option value="Chemical Engineering Department">Chemical Engineering Department</option>
         <option value="Chemical Science Department">Chemical Science Department</option>
         <option value="Civil Engineering Department">Civil Engineering Departmen</option>
         <option value="Computer Engineering Department">Computer Engineering Department</option>
         <option value="Computer Technology Department">Computer Technology Department</option>
         <option value="Educational Foundations Department">Educational Foundations Department</option>
         <option value="Electrical Electronics Engineering Department">Electrical Electronics Engineering Department</option>
         <option value="Estate Management Department">Estate Management Department</option>
         <option value="Fashion Design Department">Fashion Design Department</option>
         <option value="Fine Art Department">Fine Art Department</option>
         <option value="Food Technology Department">Food Technology Department</option>
         <option value="Graphics Design Department">Graphics Design Department</option>
         <option value="Hospitality Management Technology Department">Hospitality Management Technology Department</option>
         <option value="Industrial Design Department">Industrial Design Department</option>
         <option value="Industrial Maintenance Engineering Department">Industrial Maintenance Engineering Department</option>
         <option value="Languages Department">Languages Department</option>
         <option value="Leisure and Tourism Department">Leisure and Tourism Department</option>
         <option value="Marine Engineering Department">Marine Engineering Department</option>
         <option value="Marketing Department">Marketing Department</option>
         <option value="Mass Communication Department">Mass Communication Department</option>
         <option value="Mathematics Department">Mathematics Department</option>
         <option value="Mechanical Engineering Department">Mechanical Engineering Department</option>
         <option value="Mechatronics Engineering Department">Mechatronics Engineering Department</option>
         <option value="Metallurgical Engineering Department">Metallurgical Engineering Department</option>
         <option value="Mineral & Petroleum Resources Engineering Department">Mineral & Petroleum Resources Engineering Department</option>
         <option value="Nutrition and Dietetics Department">Nutrition and Dietetics Department</option>
         <option value="Office Technology Management Department">Office Technology Management Department</option>
         <option value="Physical Science Department">Physical Science Department</option>
         <option value="Polymer and Textile Department">Polymer and Textile Department</option>
         <option value="Printing Technology Department">Printing Technology Department</option>
         <option value="Public Administration Department">Public Administration Department</option>
         <option value="Quantity Surveying Department">Quantity Surveying Department</option>
         <option value="Science Labouratory Technology Department">Science Labouratory Technology Department</option>
         <option value="Social Science Department">Social Science Department</option>
         <option value="Statistics Department">Statistics Department</option>
         <option value="Surveying & Geoinformatics Department">Surveying & Geoinformatics Department</option>
         <option value="Technical Education Department">Technical Education Department</option>
         <option value="Urban & Regional Planning Department">Urban & Regional Planning Department</option>
         <option value="Vocational Education Department">Vocational Education Department</option>
         <option value="Welding & Fabrication Engineering Department">Welding & Fabrication Engineering Department</option>
         <option value="Others">Others</option>
      </select>
      <input type="text" name="address" required placeholder="Enter Home Address">
      <input type="tel" name="phone" required placeholder="Enter Phone Number">
      <p>Input the Date of your First Attendance</p>
      <input type="date" name="dofa" required placeholder="Enter Date of First Attendance">
      <p>Input your Date of Birth</p>
      <input type="date" name="dob" required placeholder="Enter Date of Birth">
      <select name="gender_type">
         <option value="Male">Male</option>
         <option value="Female">Female</option>
         <option value="Others">Others</option>
      </select>
      <input type="password" name="password" required placeholder="Enter Password">
      <input type="password" name="cpassword" required placeholder="Confirm Password">
      <select name="user_type">
         <option value="patient">Patient</option>
         <option value="staff">Staff</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>Already have an account? <a href="login.php">Login</a></p>
      <a href="index.php" class="btn">Homepage</a>
   </form>

</div>

</body>
</html>