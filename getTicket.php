<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
<?php
$conn = mysqli_connect("localhost", "root", "", "indianrailway");
if ($conn==false) {
    echo "Error!";
}

    $tid=$_POST["tid"];
    $sql1 = "SELECT * FROM `booking`";
    $result1 = mysqli_query($conn,$sql1);
  $num = mysqli_num_rows($result1);
  if ($num>0) {
    while ($row = mysqli_fetch_assoc($result1)) {
        if ($row["uid"]==$tid) {
         
            ?>
            <div class="container mt-5">
        <div class="card">
  <div class="card-header">
    Indian Railways
  </div>
  <div class="card-body">
    <h5 class="card-title"><?php echo "Name: ".$row['FirstName']." ".$row['LastName'];?></h5>
    <p class="card-text"><?php echo "Age:".$row['Age']."<br>"."Departure:".$row['departure']."<br>"."Arrival:".$row['arrival']."<br>"."Date Issued:".$row['date']."<br>"."Status: Approved";?></p>
    <strong>Happy Journey</strong>
  </div>
</div>
</div>
<br>
<center><button class="btn btn-success" onclick="window.print()">Print Your Ticket</button></center>

            <?php
        }
    }
}
?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>
</html>