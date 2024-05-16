<!DOCTYPE html>
<?php
include("connectToDatabase.php");
session_start();
if(isset($_POST["login"])){

    $sql = "SELECT * FROM staff_record WHERE staffID = '" . $_POST["staffID"] . "' AND staffPass = '" . $_POST["staffPass"] . "' AND staff_status = 'Active'";

    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    if($row) {
        $_SESSION["staffID"] = $row["staffID"];
        $_SESSION["staffType"] = $row["staffType"];

        #check is provider or not#
        if($_SESSION["staffType"] == "1"){
            echo "<script>window.location.href='provider_view_appointment.php';</script>";
        }
        #check is manager or not#
        else if($_SESSION["staffType"] == "2"){
            echo "<script>window.location.href='ManagerDashboard.php';</script>";
        }
        #check is admin or not#
        else if($_SESSION["staffType"] == "3"){
            echo "<script>window.location.href='admin_homepage.php';</script>";
        }

    } else {
        $message = "Wrong ID or Password, Please Try Again";
    }

}

?>
<html>
    <head>
        <meta charset="UTF-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Staff Login Page</title>
        
        <link rel="icon" href="images/Dog_Cat_Logo.png" type="image/jpg" sizes="50x50">
        
        <link href="StaffLogin.css" rel="stylesheet">
        
        <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
    </head>
    
        <body>
            <!--some space before icon-->
            <br><br>
            <!--the icon/title-->
            <img src="img/Dog_Cat_Logo.png">
            <h2>Staff Login</h2>
            <p>We're here to make your<br>pet's life Purrfect</p>

            <!--login Input-->
            <div class="login">
                <form method="post" action="">
                    <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
                    
                    <!--id part-->
                    <input type="text" id="staffID" name="staffID" placeholder="Your ID" required/>
                    <br>
                    
                    <!--password part-->
                    <input type="password" id="staffPass" name="staffPass" placeholder="Your password" required/>
                    <br>

                    <!--login button-->
                    <input type="submit" id="login" name="login" value="Login">
                </form>
            </div>
        </body>
</html>