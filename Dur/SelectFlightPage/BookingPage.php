<?php 

    session_start();
    $uname = $_SESSION['uname'];
    $pass = $_SESSION['pass'];
    
    if (isset($_SESSION['fullName'])) {
        # code...
        $fullName = $_SESSION['fullName'];
    }
 ?>


<html>

<head>
    <title>Bookings</title>
    <link rel="stylesheet" href="BookingStyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    <ul>
        <li><a class="active" href="/Dur/home/index.php">DUR</a></li>
        <li style="float: right;padding-left: 0px;padding-right: 15px;"><a href="/Dur/home/index.php">LOG OUT</a></li>
        <li style="float: right;padding-left: 0px;padding-right: 15px;"><a href="#">Contact</a></li>
        <li style="margin-left: 3%; margin-top: 0.8%">
            <div style="font-size: 20px;color: white;">
                <b>Welcome</b>, <i><?php echo "$fullName";?></i>
            </div>
        </li>
    </ul>


    <form method="POST" action="/Dur/MakeBooking/FlightDetails.php">
        <div class="booking-form-box">
            <br><br>
            <div class="booking-form">
                <label>Flying From :</label>
                <input type="text" class="form-control" placeholder="City / Airport" required="required" name="Source">
                <label>Flying To :</label>
                <input type="text" class="form-control" placeholder="City / Airport" required="required" name="Destination">

                <div class="input-grp" style="margin-left: 0%">
                    <label>Departure Date :</label>
                    <input type="date" class="form-control select-date" required="required" name="FlightDate">
                </div>
                
                <br>
                <div class="input-grp" style="margin-left: 0%;">
                    <label>Travel Class :</label>
                    <select class="custom-select" required="required">
                        <option value="1">Economy Class</option>
                        <option value="2">Bussiness Class</option>
                        <option value="2">First Class</option>
                    </select>
                </div>
                <br><br>
                <center>
                    <div class="input-grp" style="margin-left: auto;">
                        <button type="submit" class="btn btn-primary flight" name="submit">Show Flights</button>
                    </div>
                </center>
                <br><br>
            </div>
        </div>
    </form>
</body>

</html>