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
   <title>confirmation page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/css.css">

</head>
<body>
<div class="container1">

<div class="content">
   <h3><span>Doctors Confirmation of Appointments</span></h3>
   <h1>Please Note that in order to archieve this process, you must be connected to an internet service provider.</h1>
   <br>
   <p>Kindly click the link below to Redirect you to the Microsoft Office Online Excel sheet.</p>
   <br>
   <a href="https://onedrive.live.com/View.aspx?resid=535E049DD3322B!224&authkey=!AL-IcRNKJpzJF0Y" class="btn">Doctors Schedule</a>
   <br>
   <br>
   <p>OR</p>
   <br>
   <a href="mainpage.php" class="btn">Go Back</a>
</div>

</div>

</body>
</html>