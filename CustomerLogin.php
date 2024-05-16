<!DOCTYPE html>
<?php
include("connectToDatabase.php");
session_start();
if(isset($_POST["login"])){

    $sql = "SELECT * FROM customer_record WHERE customerEmail = '" . $_POST["userEmail"] . "' AND customerPass = '" . $_POST["userPass"] . "' AND customer_status = 'Active'";

    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    if($row) {
        $_SESSION["customerID"] = $row["customerID"];
        if(isset($_POST["remember"])) {
            setcookie ("member_login",$_POST["userEmail"],time() + (604800), "/"); 
        //604800 seconds = 7 days
        } else {
            unset($_COOKIE['member_login']); 
            setcookie('member_login', null, -1, '/');
        }
            //redirect to customer homepage
            echo "<script>window.location.href='customer_homepage.php';</script>";

    } else {
        $message = "Wrong Email or Password, Please Try Again";
    }

}

?>
<html>
    <head>
        <meta charset="UTF-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Customer Login Page</title>

        <link rel="icon" href="img/Dog_Cat_Logo.png" type="image/jpg" sizes="50x50">
        
        <link href="CustomerLogin.css" rel="stylesheet">
        
        <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
    </head>
    
        <body>
            <!--some space before icon-->
            <br><br>
            <!--the icon/title-->
            <img src="img/Dog_Cat_Logo.png">
            <h2>Login</h2>
            <p>We're here to make your<br>pet's life Purrfect</p>

            <!--login Input-->
            <div class="login">
                <form method="post" action="">
                    <div><?php if(isset($message)) { echo $message; } ?></div>
                    
                    <!--email part-->
                    <input type="email" id="userEmail" name="userEmail" placeholder="Your email" required value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>"/>
                    <br>
                    
                    <!--password part-->
                    <input type="password" id="userPass" name="userPass" placeholder="Your password" required/>
                    <br>
                    <div class="remember">
                    <input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> />
                        <label for="remember-me">Remember me</label>
                    </div>

                    <!--signup button-->
                    <p>No account?<a href="Registration_Page.html">&nbsp;Sign up Now!</a></p>

                    <!--forgot button-->
                    <p>Forgot password?<a href="forgotPassword.php">&nbsp;Reset Now!</a></p>

                    <!--login button-->
                    <input type="submit" id="login" name="login" value="Login">
                </form>
            </div>
        </body>
</html>