<?php

	include 'connection.php';
	session_start();
	

	//-----------------------------------extracting data-----------------------------------

		if (isset($_POST['submit'])) {
			# code...
			$flightDate = $_POST['FlightDate'];
			$source = $_POST['Source'];
			$destination = $_POST['Destination'];

			$query = "SELECT * FROM flights
						WHERE FlightDate='$flightDate' AND Source='$source' AND Destination='$destination'
						";

			
			$extract = mysqli_query($connect,$query) or die(mysqli_error($connect));

		}
		else{
?>	
			<script type="text/javascript">
				location.href = "/Dur/home/index.html";
			</script>
<?php
		}
  		

  		//-------------------------------------------------------------------------------------



?>


<!DOCTYPE html>
<html>
<title>Flight Details</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" type="text/css" href="Submit.css">
<link rel="stylesheet" type="text/css" href="FlightDetails.css">
<body>

<div class="navbar">
	<ul>
        <li><a class="active" href="#home">BRAND</a></li>
        <li style="float: right;padding-left: 0px;padding-right: 15px;"><a href="#">Contact</a></li>
        
    </ul>
</div>

<div class="w3-container">

  	<h2>Flights</h2>


  

  	<?php

  		

  		
  		while ($row = mysqli_fetch_assoc($extract)) {
			# code...
			$airline = $row['Airline'];
			$departure = $row['Departure'];
			$arrival = $row['Arrival'];
			$flightTime = $row['FlightTime'];
			$source = $row['Source'];
			$destination = $row['Destination'];
			$fare = $row['Fare'];

			$query2 = " SELECT Airline FROM aircrafts
						WHERE ACID = '$airline'
						";
			$extract2 = mysqli_query($connect,$query2) or die(mysqli_error($connect));
			$row2 = mysqli_fetch_assoc($extract2);


			$airId = $row2['Airline'];

		
			$query3 = " SELECT * FROM airlines
						WHERE AirId = '$airId'
						";
			$extract3 = mysqli_query($connect,$query3) or die(mysqli_error($connect));
			$row3 = mysqli_fetch_assoc($extract3);


			$logo = $row3['Logo'];
			$airlineName = $row3['Name'];
			


			echo "

			<ul class='w3-ul w3-card-4'>
				
			    <li class='w3-bar'>

			      <img src='$logo' class='w3-bar-item w3-circle w3-hide-small' style='width:85px; height:69px'>
			      <div class='left'>
				      <div class='w3-bar-item' id='li1'>
				        <font class='primary'>$airlineName</font><br>
				        <font class='secondary'>$airline</font>
				      </div>
			      </div>
			      


			      <div class='middle'>
				      <div class='w3-bar-item' id='li2'>
				      	<font class='primary'>$departure</font><br>
				        <font class='secondary'>$source</font>
				      </div>

				      <div class='w3-bar-item' id='li3'>
				      	<font class='primary'>$flightTime hours</font><br>
				        <font class='nonstop'>Non-Stop</font>
				      </div>

				      <div class='w3-bar-item' id='li4'>
				      	<font class='primary'>$arrival</font><br>
				        <font class='secondary'>$destination</font>
				      </div>
			      </div>

			      <div class='right'>

				      <div class='w3-bar-item' id='fare'>
				      	<font>₹ $fare</font><br>
				      </div>

				      <div class='w3-bar-item' id='book'>
				      	
				      		<form action='DisplayBooking2.php' method='POST' id='submitDetails'>

				      		<input type='text' name='flightDate' value='$flightDate' style='display: none;'>
				      		<input type='text' name='airline' value='$airline' style='display: none;'>
				      		<input type='text' name='departure' value='$departure' style='display: none;'>
				      		<input type='text' name='arrival' value='$arrival' style='display: none;'>
				      		<input type='text' name='flightTime' value='$flightTime' style='display: none;'>
				      		<input type='text' name='source' value='$source' style='display: none;'>
				      		<input type='text' name='destination' value='$destination' style='display: none;'>
				      		<input type='text' name='fare' value='$fare' style='display: none;'>
				      		<input type='text' name='logo' value='$logo' style='display: none;'>
				      		<input type='text' name='airlineName' value='$airlineName' style='display: none;'>
				      		<input type='text' name='airId' value='$airId' style='display: none;'>
				      		
				      		<input type='submit' name='submit' class='blue button' value='Book'>
				   			</form>
				      </div>
			      </div>

			    </li>

			    
			  </ul>
			  
			  <br>
			  
			";
			

		}
  ?>
</div>

<!-- <input type="" name="" style="display: none;"> -->
</body>
</html>

