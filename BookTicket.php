<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Railway Reservation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body class="bg-light">
    <nav class="navbar bg-dark text-light">
        <div class="container-fluid">
            <h3><strong>Online Railway Reservation</h3></strong>
        </div>
    </nav>

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-sm-3">
                <strong class="text-info">Dashboard</strong><br><br>
                <ul>
                    <li><a href="Home.php">Home</a></li>
                    <br>
                    <li><a href="GetYourTicket.php">Get your Ticket</a></li>
                    <br>
                    <li><a href="Check your booked Tickets.php">Check your booked Tickets</a></li>
                </ul>
                <img class="img-fluid rounded-circle" src="indian-railways-irctc-1601651073.jpg" alt="IRCTC">
            </div>
            <div class="col-sm-6">
                <strong class="text-info">Book Your Ticket</strong>
                <br><hr>
                <div class="container-fluid">
                <form action="dbconn.php" method="POST">
                    <br>
                    <p>
                        <label for="FirstName">First Name: </label>
                        <input type="text" name="fn" id="FirstName" required>
                        <label for="LastName">Last Name: </label>
                        <input type="text" name="ln" id="LastName" required>
                    </p>
                    <br>
                    <p>
                        <label for="Age">Age:</label>
                        <input type="number" name="age" id="Age" required>
                    </p><br>
                <p>
                    Gender :
                <input type="radio" id="male" name="gender" value="Male" required>
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="Female" required>
                <label for="female">Female</label>
                <input type="radio" id="others" name="gender" value="Others" required>
                <label for="others">Others</label>
            </p><br>
                    <p>
                        <label for="Departure">Departure:</label>
                        <input type="text" name="departure" id="Departure" required>
                        <label for="Arrival">Arrival:</label>
                        <input type="text" name="arrival" id="Arrival" required>
                    </p><br>
                    <p>
                        <label for="Trip">Choose your Trip: </label>
                        <select id="Trip" name="trip">
                            <option value="One-Way">One-Way</option>
                            <option value="Round-Trip">Round-Trip</option>
                        </select>
                    </p><br>
                    <p>
                        <label for="emailAddress">Email Address: </label>
                        <input type="email" name="email" id="emailAddress" required>
                    </p>
                        <label for="Date">Date: </label>
                        <input type="date" name="date" id="Date"><br><br>
                    <input type="submit" value="Submit"><?php echo " ";?><input type="reset" value="Reset">
                </form>
            </div>
        </div>
        <div class="col-sm-3">
            <h2 class="text-primary"><strong>Indian Railways</strong></h2>
        <br><br>
        
        <img class="img-fluid rounded" src="6a724b9501764fd83a4abcd37b58144d.jpg" alt="IRCTC">
        
        </div>
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