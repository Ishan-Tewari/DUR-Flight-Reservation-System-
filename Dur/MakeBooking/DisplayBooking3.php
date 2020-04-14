<?php

    session_start();
    $airline = $_SESSION['airline'];
    $departure = $_SESSION['departure'];
    $arrival = $_SESSION['arrival'];
    $flightTime = $_SESSION['flightTime'];
    $source = $_SESSION['source'];
    $destination = $_SESSION['destination'];
    $fare = $_SESSION['fare'];
    $flightDate = $_SESSION['flightDate'];
    $logo = $_SESSION['logo'];

    
    if (isset($_POST["submitNumOfPassengers"])) {
        # code...

        $numOfPassengers = $_POST["numOfPassengers"];
        $_SESSION['numOfPassengers'] = $numOfPassengers;
    }
    else{
        echo "<script>location.href = '/Dur/home/index.php'</script>";
    }
    

    // echo "$airline<br>";
    // echo "$departure<br>";
    // echo "$arrival<br>";
    // echo "$flightTime<br>";
    // echo "$source<br>";
    // echo "$destination<br>";
    // echo "$fare<br>";
    
?>





<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>page-5</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/dh-card-image-left-dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="DisplayBooking3.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <section style="width: 100%;background-color: #fbf7f7;">
        <section style="margin-left: 70px;">
            <div class="table-responsive" style="margin-top: 10px;">
                <table class="table">
                    <thead style="width: 90%;margin-left: 100px;">
                        <tr>
                            <th style="margin-left: 100px;">DUR</th>
                            <th>COME FLY WITH US</th>
                            <th style="padding-left: 0px;padding-right: 15px;"><a href="/Dur/home/index.php">LOG OUT</a></th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            <div class="table-responsive" style="width: 90%;margin-left: 50px;margin-top: 20px;">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Review Your Booking</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            <section>
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

            <?php
                $temp = $numOfPassengers;
                while ($numOfPassengers != 0) {
                    # code...
                    $passengerNumber = $temp - $numOfPassengers + 1;

                    echo '

                        <section style="margin-top: 50px;height: 200px;">
                            <div class="container" style="width: 100%;max-width: 1500px;">
                                <div class="photo-card" style="width: 1200px;margin-right: 50px;margin-left: 50px;max-width: 1500px;height: 200px;">
                                    <div class="photo-details" style="width: 100%">
                                        <div class="w3-container">
                    ';

                    echo "                        
                                            <h2 style='color: white'>Passenger $passengerNumber</h2>
                                            <div class='passengerDetailsClass'>
                                                <form id='passengerDetails$passengerNumber' action='DisplayBooking4.php' method='POST'>
                                                    
                                                    <input type='text' name='passengerNumber' value='$passengerNumber' style='display: none;'>
                                                    <input class='w3-input' type='text' name='firstName$passengerNumber' id='firstName' placeholder='First Name'>
                                                    <input class='w3-input' type='text' name='lastName$passengerNumber' id='lastName' placeholder='Last Name'>
                                                    <input type='radio' name='gender$passengerNumber' id='male' value='Male' onclick='autoSubmit($passengerNumber)'>
                                                    <label>Male</label>
                                                    <input type='radio' name='gender$passengerNumber' id='female' value='Female' onclick='autoSubmit($passengerNumber)'>
                                                    <label>Female</label>
                                                  
                                                </form>
                                                
                                                

                    ";
                                   
                    echo '             
                                            </div>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    ';

                    $numOfPassengers -= 1;
                }

            ?>



            <button class="btn btn-primary" data-toggle="modal" data-target="#modal1" type="button" style="margin-left: 500px;margin-top: 50px;width: 300px;margin-bottom: 70px;"><strong>CONFIRM BOOKING</strong></button></section>
    </section>
    <script>
        function autoSubmit(passengerNum){

            document.getElementById('passengerDetails' + passengerNum).submit();
        }   
    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>