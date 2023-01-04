<?php
$con = mysqli_connect("localhost", "root", "", "indianrailway");
if ($con==false) {
    echo "Error!";
}
$FirstName=$_POST['fn'];
$LastName=$_POST['ln'];
$Age=$_POST['age'];
$gender=$_POST['gender'];
$departure=$_POST['departure'];
$arrival=$_POST['arrival'];
$trip=$_POST['trip'];
$email=$_POST['email'];
$date=$_POST['date'];
$uid=uniqid();

$sql = "INSERT INTO `booking`(`id`, `FirstName`, `LastName`, `Age`, `gender`, `departure`, `arrival`, `trip`, `email`, `date`, `uid`) VALUES ( ' ','$FirstName',
'$LastName','$Age','$gender','$departure','$arrival','$trip','$email','$date','$uid')";

if(mysqli_query($con, $sql)){
   
   ?>
   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   </head>
   <body>
   <div class="card text-center">
  <div class="card-header">
    <?php echo "Hello $FirstName $LastName you hava successfully booked your ticket!"; ?>
  </div>
  <div class="card-body">
    <h5 class="card-title"><?php echo "Your ticket id is ".$uid;?></h5>
    <p class="card-text">Please copy your ticket id to get your ticket.</p>
    <a href="Home.php" class="btn btn-primary">Go Home</a>
  </div>
  <div class="card-footer text-muted">
    Thank You
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
   </body>
   </html>
   <?php

} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($con);
}

// Close connection
mysqli_close($con);
    

?>