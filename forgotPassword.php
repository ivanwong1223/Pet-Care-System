<!DOCTYPE html>
<?php
include("connectToDatabase.php");
session_start();
if(isset($_POST["verify"])){

    $sql = "SELECT * FROM customer_record WHERE customerEmail = '" . $_POST["userEmail"] . "' AND customerIC = '" . $_POST["ic"] . "' AND customer_status = 'Active'";

    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    if($row) {
        //clear the password field that matches the user email
        $_SESSION["customerEmail"] = $_POST["userEmail"];
        $update_sql = "UPDATE customer_record SET customerPass = '' WHERE customerEmail = '" . $_POST["userEmail"] . "'";
        mysqli_query($con, $update_sql);
            //redirect to reset password page
            echo "<script>window.location.href='resetPassword.php';</script>";

    } else {
        $message = "Invalid Email and IC, Please Try Again";
    }

}

?>
<html>
    <head>
        <meta charset="UTF-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Forgot Password</title>

        <link rel="icon" href="img/Dog_Cat_Logo.png" type="image/jpg" sizes="50x50">
        
        <link href="forgotPassword.css" rel="stylesheet">
        
        <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
    </head>
    
        <body>
            <!--some space before icon-->
            <br><br>
            <!--the icon/title-->
            <img src="img/Dog_Cat_Logo.png">
            <h2>Forgot Password</h2>
            <p>Fill in your details<br>to verify and reset password</p>

            <!--Input-->
            <div class="verify">
                <form method="post" action="">
                    <div><?php if(isset($message)) { echo $message; } ?></div>
                    
                    <!--email part-->
                    <input type="email" id="userEmail" name="userEmail" placeholder="Your Email" required/>
                    <br>
                    
                    <!--ic part-->
                    <input type="number" id="ic" name="ic" placeholder="Your IC" required/>
                    <br>

                    <!--goback button-->
                    <p>Remember your password ?<a href="CustomerLogin.php">&nbsp;Go Back Now!</a></p>

                    <!--verify button-->
                    <input type="submit" id="verify" name="verify" value="Verify Now">
                </form>
            </div>
        </body>
</html>