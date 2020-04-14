<?php
    

    session_start();
    if (isset($_SESSION['uname']) == false) {
        echo "<script>location.href = '/Dur/home/index.php'</script>";
    }
    $airline = $_SESSION['airline'];
    $departure = $_SESSION['departure'];
    $arrival = $_SESSION['arrival'];
    $flightTime = $_SESSION['flightTime'];
    $source = $_SESSION['source'];
    $destination = $_SESSION['destination'];
    $fare = $_SESSION['fare'];
    $flightDate = $_SESSION['flightDate'];
    $numOfPassengers = $_SESSION['numOfPassengers'];
    $logo = $_SESSION['logo'];



    $passengerNumber = $_POST['passengerNumber']; 
    $_SESSION["passengerNumber"] = $passengerNumber;

    $value =  "firstName$passengerNumber";
    $passengerFirstName["$value"] = $_POST["$value"];

    
    $_SESSION["$value"] = $passengerFirstName["$value"];
    

    $value =  "lastName$passengerNumber";
    $passengerLastName["$value"] = $_POST["$value"];

    
    $_SESSION["$value"] = $passengerLastName["$value"];

    $value =  "gender$passengerNumber";
    $passengerGender["$value"] = $_POST["$value"];

    
    $_SESSION["$value"] = $passengerGender["$value"];

    //echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
    

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
                    ";


                                                    $value = "firstName$passengerNumber";
                                                    if (isset($_SESSION["$value"])) {

                                                        $x = $_SESSION["$value"];
                                                        
                                                        echo "
                                                            <input class='w3-input' type='text' name='$value' id='firstName' value='$x' disabled style='background-color: #E1E1E1;'>
                                                        ";

                                                    }
                                                    else{
                                                        echo "
                                                            <input class='w3-input' type='text' name='$value' id='firstName' placeholder='First Name' required>
                                                        ";
                                                    }

                                                    $value = "lastName$passengerNumber";
                                                    if (isset($_SESSION["$value"])) {

                                                        $x = $_SESSION["$value"];
                                                        
                                                        echo "
                                                            <input class='w3-input' type='text' name='$value' id='lastName' value='$x' disabled style='background-color: #E1E1E1;'>
                                                        ";

                                                    }
                                                    else{
                                                        echo "
                                                            <input class='w3-input' type='text' name='$value' id='lastName' placeholder='Last Name' required>
                                                        ";
                                                    }

                                                    $value = "gender$passengerNumber";
                                                    if (isset($_SESSION["$value"])) {

                                                        $x = $_SESSION["$value"];
                                                        
                                                        if ($x == "Male") {
                                                            # code...
                                                            echo "
                                                                <input type='radio' name='$value' id='male' value='Male' checked='checked' disabled>
                                                                <label>Male</label>

                                                                <input type='radio' name='$value' id='female' value='Female' disabled>
                                                                <label>Female</label>
                                                            ";
                                                        }
                                                        else{
                                                            echo "
                                                                <input type='radio' name='$value' id='male' value='Male' disabled>
                                                                <label>Male</label>

                                                                <input type='radio' name='$value' id='female' value='Female' checked='checked' disabled>
                                                                <label>Female</label>
                                                            ";
                                                        }

                                                    }
                                                    else{
                                                        echo "
                                                            <input type='radio' name='$value' id='male' value='Male' onclick='autoSubmit($passengerNumber)' required>
                                                            <label>Male</label>

                                                            <input type='radio' name='$value' id='female' value='Female' onclick='autoSubmit($passengerNumber)' required>
                                                            <label>Female</label>
                                                  
                                                        ";
                                                    }
                    echo "                          
                                                    
                                                
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
            


            <a class="btn btn-primary" style="margin-left: 500px;margin-top: 50px;width: 300px;margin-bottom: 70px; color: white" href="ThankyouPage.php"><strong>CONFIRM BOOKING</strong></a>

        </section>
    </section>

    <!-- <h1 style="background-color: "></h1> -->
    <script>
        function autoSubmit(passengerNum){

            document.getElementById('passengerDetails' + passengerNum).submit();
        }   
    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>