<?php 

    include 'connection.php';

    session_start();
    if (isset($_SESSION['uname']) == false) {
        echo "<script>location.href = '/Dur/home/index.php'</script>";
    }
    $uname = $_SESSION['uname'];
    $numOfPassengers = $_SESSION["numOfPassengers"];
    $flightDate = $_SESSION['flightDate'];
    $airline = $_SESSION['airline'];
    $fare = $_SESSION['fare'];

    $source = $_SESSION['source'];
    $destination = $_SESSION['destination'];
    $departure = $_SESSION['departure'];
    $flightTime = $_SESSION['flightTime'];
    $arrival = $_SESSION['arrival'];
    $logo = $_SESSION['logo'];


    $totalFare = $fare * $numOfPassengers;
    
    $query3 = "INSERT INTO reservations
                    VALUES(NULL,'$uname',current_timestamp(),'$flightDate','$totalFare','$airline')
                ";
    $insert2 = mysqli_query($connect,$query3) or die(mysqli_error($connect));

?>


<html>
<head>
    <title>Thank You Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>page-5</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/dh-card-image-left-dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="/Dur/SelectFlightPage/BookingStyle.css">
    <link rel="stylesheet" type="text/css" href="DisplayBooking3.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="ThankyouStyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/Dur/SelectFlightPage/ThankyouStyle.css">
    
</head>
<body style="background-image: none;">

    <ul>
        <li><a class="active" href="/Dur/home/index.php">DUR</a></li>
        <li style="float: right;padding-left: 0px;padding-right: 15px;"><a href="/Dur/home/index.php">LOG OUT</a></li>
        <li style="float: right;padding-left: 0px;padding-right: 15px;"><a href="#">Contact</a></li>
        
    </ul>
    <div class="thnkyou-page">

        <section style="margin: 4%">
            <div class="container" style="width: 100%;max-width: 1500px;">
                <div class="photo-card" style="width: 1200px;margin-right: 50px;margin-left: 50px;max-width: 1500px;height: 270px;">
                    <div class="photo-details" style="width: 100%">
                        <h1>Flight Details</h1>
                            <div class="primary">
                                <div class="source"><?php echo "$source"?></div>
                                <img class="arrow" src="Images/arrow.png">
                                <div class='destination'><?php echo "$destination"?></div>
                                <div class='flightDate'><?php echo "$flightDate"?></div>
                            </div>

                            <div class="secondary">
                                <img class="flightLogo" src=<?php echo "$logo";?>>
                                <div class='airline'><?php echo "$airline"?></div>
                                <div class='departure'><?php echo "$departure"?></div>
                                <div class='flightTime'><?php echo "$flightTime hours"?></div>
                                <div class='arrival'><?php echo "$arrival"?></div>
                                
                                
                            </div>

                        <div class="photo-tags"></div>
                    </div>
                    
                </div>
            </div>
        </section>



        <div class="details-table">
            <table style="width: 50%; margin: auto;">
                <tr>
                    <th>Passenger No.</th>
                    <th>Passenger</th>
                </tr>
<?php
            $i = 1;
            while ($i <= $numOfPassengers) { 
                # code...

                $value =  "firstName$i";
                $passengerFirstName= $_SESSION["$value"];

                $value =  "lastName$i";
                $passengerLastName= $_SESSION["$value"];

                $passengerFullName = $passengerFirstName. " ". $passengerLastName;

                $query2 = "SELECT * FROM passengers
                            WHERE Username='$uname' AND Name='$passengerFullName' 
                            ";

                
                $extract = mysqli_query($connect,$query2) or die(mysqli_error($connect));
                $row = mysqli_fetch_assoc($extract);
                if (!(isset($row['Username']) && isset($row['Name']))) {
                    # code...
                    $query = "INSERT INTO passengers
                                VALUES(NULL,'$uname','$passengerFullName')
                                ";

                    
                    $insert = mysqli_query($connect,$query) or die(mysqli_error($connect));
                    
                }
                


                echo "
                    <tr>
                        <td>$i</td>
                        <td>$passengerFullName</td>
                        
                    </tr>
                ";
                $i += 1;
            }
                           
?>
            </table>
        </div>

         <div class="thanks">
            <center>
                <h1>Booking Confirmed.</h1>
                <img src="Images/tick.png">
            </center>
            
        </div>

        <div align="center" style="margin-top: 5%">
            <h1>Total fare: <?php echo"₹ $totalFare";?></h1>
        </div>
        
        <div align="center" style="margin-top: 2%">
            <a class="btn btn-primary" style="margin-left: auto;;width: 300px;margin-bottom: 70px; color: white" href="/Dur/home/index.php"><strong>Log Out</strong></a>
            <h3><i>Thank you for Booking with us.</i></h3>
        </div>
    </div>
</body>
</html>