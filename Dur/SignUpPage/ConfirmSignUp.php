<?php 

	session_start();

	if (isset($_POST['submit'])) {
		# code...
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$uname = $_POST['uname'];
		$pass = $_POST['pass'];
		$confirmPass = $_POST['confirmPass'];

		$contactNumber = $_POST['contactNumber'];
		$age = $_POST['age'];
		$street = $_POST['street'];
		$state = $_POST['state'];
		$country = $_POST['country'];
		$lastName = $_POST['lastName'];
		$fullName = $firstName ." ". $lastName;

		//-----------------------checking if user already exists-----------------------

		$connect = mysqli_connect("localhost","root","","AirlineReservationSystem") or die("Can't connect to database!");

		$query = "SELECT * FROM authentication
		            WHERE Username = '$uname' 
		            ";
		$extract = mysqli_query($connect,$query) or die(mysqli_error($connect));

		$row = mysqli_fetch_assoc($extract);

		if (!$row) {

    		if ($pass == $confirmPass) {
    			# code...
    			//--------------------------------------adding to db------------------------------
                

                $query = "INSERT INTO users
                           	VALUES('$uname','$fullName','$age','$contactNumber','$street','$state','$country')
                            ";
                $insert = mysqli_query($connect,$query) or die(mysqli_error($connect));

                $query = "INSERT INTO authentication
                           	VALUES(NULL,'$uname','$pass')
                            ";
                $insert = mysqli_query($connect,$query) or die(mysqli_error($connect));

                $_SESSION['uname'] = $uname;
                $_SESSION['pass'] = $pass;
                $_SESSION['fullName'] = $fullName;

                echo "
                	<script type='text/javascript'>
    				
    				
    				location.href='/Dur/SelectFlightPage/BookingPage.php';
    					

    				</script>

                ";
    		}

    		else{
?>
    			
    			<script type="text/javascript">
    				
    				window.alert("Passwords don't match.");
    				location.href="SignUp.php";
    					

    			</script>

<?php
    		}
		}
        elseif ($pass == $row['Password']) {
            # code...
?>
            <script type="text/javascript">
            
                window.alert("You are already registered. Please log in..");
                location.href="/Dur/home/index.php";
                        
            </script>
<?php
        }
		elseif ($pass != $row['Password']) {
?>
			<script type="text/javascript">
    		
    			window.alert("Username taken!");
				location.href="SignUp.php";
    					
    		</script>
<?php
		}

	}
	else{
		echo "<script>location.href = '/Dur/home/index.php'</script>";
	}
	

?>




<!DOCTYPE html>
<html>
<head>
	<title>confirm sign up</title>
</head>
<body>
	
</body>
</html>