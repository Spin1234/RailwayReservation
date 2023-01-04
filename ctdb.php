<?php
$con = mysqli_connect("localhost", "root", "", "indianrailway");
if ($con==false) {
    echo "Error!";
}
$email=$_POST['email'];
$sql = "SELECT * FROM `booking`";
$result = mysqli_query($con,$sql);
  $num = mysqli_num_rows($result);
  if ($num>0) {
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row["email"]==$email) {
?>
<div style="border: 4px solid; padding: 23px; margin: 50px; width: 30%; border-radius: 10px; box-sizing: border-box">
<h2 style="text-align: center; border: 2px solid; border-radius: 10px"><b>Indian Railways</b></h2>
    <h3 id="name"><b>Name: <?php echo $row['FirstName']." ". $row['LastName'];?></b></h3>
    <p>
       <b> <?php echo $row['trip']. " : ". $row['departure']. " To ". $row['arrival'];?></b>
    </p>
    <p><b>Issue Date:</b> <?php echo $row['date'];?></p>
    <p><b>Ticket Id:</b> <?php echo $row['uid'];?></p>
</div>

<?php
        }
    }
}
    ?>