<?php

    if (isset($_POST['submit'])) {
        # code...
    
        session_start();
        $airline = $_POST['airline'];
        $departure = $_POST['departure'];
        $arrival = $_POST['arrival'];
        $flightTime = $_POST['flightTime'];
        $source = $_POST['source'];
        $destination = $_POST['destination'];
        $fare = $_POST['fare'];
        $flightDate = $_POST['flightDate'];
        $logo = $_POST['logo'];
        $airlineName = $_POST['airlineName'];
        $airId = $_POST['airId'];

        $_SESSION['airline'] = $airline;
        $_SESSION['departure'] = $departure;
        $_SESSION['arrival'] = $arrival;
        $_SESSION['flightTime'] = $flightTime;
        $_SESSION['source'] = $source;
        $_SESSION['destination'] = $destination;
        $_SESSION['flightDate'] = $flightDate;
        $_SESSION['fare'] = $fare;
        $_SESSION['logo'] = $logo;
        $_SESSION['airlineName'] = $airlineName;
        $_SESSION['airId'] = $airId;
        
        

        // echo "$airline<br>";
        // echo "$departure<br>";
        // echo "$arrival<br>";
        // echo "$flightTime<br>";
        // echo "$source<br>";
        // echo "$destination<br>";
        // echo "$fare<br>";
    }
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
    
    <link rel="stylesheet" type="text/css" href="Submit.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="DisplayBooking2.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
 

    <section style="width: 100%;background-color: #fbf7f7;">
        <section style="margin-left: 70px;">
            <div class="table-responsive" style="margin-top: 10px;">
                <table class="table">
                    <thead style="width: 90%;margin-left: 100px;">
                        <tr>
                            <th style="margin-left: 100px;">BRAND</th>
                            <th>COME FLY WITH US</th>
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
                        <!-- <div class="photo-details">
                            <p>Here display some pic, kuch bhi random</p>
                            <div class="photo-tags"></div>
                        </div> -->
                    </div>
                </div>
            </section>
            <section style="margin-top: 50px;height: 300px;">
                <div class="container" style="width: 100%;max-width: 1500px;">
                    <div class="photo-card" style="width: 1200px;margin-right: 50px;margin-left: 50px;max-width: 1500px;height: 180px;">
                        <div class="photo-details" style="width: 100%">
                            <h1>Enter the number of passengers</h1>
                            <div class="NumberOfPassengers">
                                <form action="DisplayBooking3.php" method="post">
                                    <div class="form-group">

                                      <input type="number" name="numOfPassengers" class="form-control" id="sel1" min="1" max="10"> 
                                       
                                      <input type='submit' name='submitNumOfPassengers' class='green button' value='Go' id="submitNumOfPassengers">                         
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        
            <button class="btn btn-primary" data-toggle="modal" data-target="#modal1" type="button" style="margin-left: 500px;margin-top: 50px;width: 300px;margin-bottom: 70px;"><strong>CONFIRM BOOKING</strong></button></section>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>