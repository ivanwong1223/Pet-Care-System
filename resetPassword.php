<!DOCTYPE html>
<?php
include("connectToDatabase.php");
session_start();
if(isset($_POST["reset"])){
    $customerEmail = $_SESSION["customerEmail"];
    $customerPass = $_POST["userPass"];
    $sql = "UPDATE customer_record SET customerPass = '$customerPass' WHERE customerEmail = '$customerEmail'";

    $result = mysqli_query($con, $sql);
    if($result) {
        //alert box
        echo "<script>alert('Password Reset Successfully');window.location.href='CustomerLogin.php';</script>";
    }

}

?>
<html>
    <head>
        <meta charset="UTF-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Reset Password</title>

        <link rel="icon" href="img/Dog_Cat_Logo.png" type="image/jpg" sizes="50x50">
        
        <link href="resetPassword.css" rel="stylesheet">
        
        <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
    </head>
    
        <body>
            <!--some space before icon-->
            <br><br>
            <!--the icon/title-->
            <img src="img/Dog_Cat_Logo.png">
            <h2>Reset Password</h2>
            <p>Fill in your<br>new password</p>

            <!--Input-->
            <div class="reset">
                <form method="post" action="" onsubmit="return passwordValidation()">
                    
                    <!--password part-->
                    <input type="text" id="userPass" name="userPass" placeholder="Your new password" required/>
                    <br>

                    <!--reset button-->
                    <input type="submit" id="reset" name="reset" value="Reset Your Password">
                </form>
            </div>
            <script>
                //for sign up validation//
                function passwordValidation() {
                    var password=document.getElementById("userPass");
                    var passwordValue=password.value.trim();
                    var errormessage="";
                    
                    if (passwordValue.length <6){
                        errormessage+="Password must be at least 6 characters!\n";
                    }

                    if (errormessage !=""){
                        alert(errormessage);
                        return false;
                    }

                    return true;
                }

            </script>
        </body>
</html>