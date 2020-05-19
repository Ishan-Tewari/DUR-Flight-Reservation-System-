<?php
    
    sadasdasdada

    session_start();
    if (isset($_POST['login_button'])) {
        
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];


        if ($uname && $pass) {
            

            //--------------------------------------extracting uname and pass from db------------------------------
            $connect = mysqli_connect("localhost","root","","AirlineReservationSystem") or die("Can't connect to database!");

            $query = "SELECT * FROM authentication
                        WHERE Username = '$uname' AND Password = '$pass' 
                        ";
            $extract = mysqli_query($connect,$query) or die(mysqli_error($connect));



            //--------------------------------------matching with entered uname & pass------------------------------

            $row = mysqli_fetch_assoc($extract);
            
            if (!$row) {

                echo "  <script>
                            alert('Wrong Username or Password!')
                            location.href = '/Dur/home/index.php';
                        </script>
                ";

            }

            else{
                
                $uname_db = $row['Username'];
                $pass_db = $row['Password'];

                if ($uname == $uname_db && $pass == $pass_db) {

                    
                    $_SESSION['uname'] = $uname_db;
                    $_SESSION['pass'] = $pass_db;
                    

                    $query = "SELECT Name FROM users
                                WHERE Username = '$uname' 
                                ";
                    $extract = mysqli_query($connect,$query) or die(mysqli_error($connect));
                    $row = mysqli_fetch_assoc($extract);

                    $fullName = $row['Name'];
                   

                    $_SESSION['fullName'] = $fullName;

                    echo "<script>location.href = '/Dur/SelectFlightPage/BookingPage.php'</script>";
                }
                
            }
        }
    }
    else{
        echo "<script>location.href = '/Dur/home/index.php'</script>";
    }

    if (isset($_SESSION['uname']) && isset($_SESSION['pass'])) {

        $query = "SELECT Name FROM users
                    WHERE Username = '$uname' 
                    ";
        $extract = mysqli_query($connect,$query) or die(mysqli_error($connect));
        $row = mysqli_fetch_assoc($extract);

        $fullName = $row['Name'];
        

        $_SESSION['fullName'] = $fullName;
        echo "<script>location.href = '/Dur/SelectFlightPage/BookingPage.php'</script>";
        
    }

?>