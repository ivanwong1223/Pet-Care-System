<?php
    session_start();
    if(isset($_SESSION["customerID"])){
        include("conn.php");
    }else {
        echo "<script>alert('Please Login!');window.location.href='CustomerLogin.php';</script>"; 
    }
?>

<?php
    if(isset($_SESSION["customerID"])){
        include("conn.php");

        if(isset($_POST["submit-btn"])){
            $appointmentID = $_POST["appointmentID"];
            $customerID = $_SESSION["customerID"];
            $paymentAmount = $_POST["paymentAmount"];
            $paymentDate = date("Y-m-d");
            $payment_type = $_POST["paymentType"];

            $insert_sql= "INSERT INTO payment_record(appointmentID, customerID, paymentAmount, paymentDate, paymentType) 
            VALUES ('$appointmentID', '$customerID', '$paymentAmount', '$paymentDate', '$payment_type')";

            $result = mysqli_query($con, $insert_sql);
            $insert_id = mysqli_insert_id($con);
            if($result){
                echo '<script>alert("Payment Process Completed.");window.location.href="customer_view_appointment.php";</script>';
            }else{
                echo '<script>alert("Please Try Again!");window.location.href="customer_payment.php?appointmentID='.$insert_id.'";</script>';
            }
        }
    }else {
        echo "<script>alert('Please Login!');window.location.href='CustomerLogin.php';</script>"; //Here change the file link to where
      }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Payment Page
        </title>
        <link rel="icon" href="images/Dog_Cat_Logo.png" type="image/jpg" sizes="50x50">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans&display=swap" rel="stylesheet"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>


        <style>

            body{
            background-color: #F0EAD6;
            }
            
            .title{
                font-family: 'Sofia Sans', sans-serif;
                font-size: 30px;
                text-align: center;
            }
            .details{
                margin: auto;
                display: flex;
                justify-content: center;
                align-items: center;
                font-family: 'Oxygen', sans-serif;
                width: 500px;
            }
            
            form{
                background: #fff;
                width: 600px;
                border-radius: 4px;
                box-shadow: 1px 1px 15px rgba(0,0,0,0.15);
                padding: 30px 30px;
                margin-bottom: 50px;
            }
            form .action {
                display: flex;
                margin-top: 32px;
                justify-content: center;
                align-items: center;
               
            }
            form .action button{
                border-radius: 4px;
                border: 1px solid white;
                cursor: pointer;
                font-size: 13px;
                font-weight: 600;
                height: 44px;
                letter-spacing: 3px;
                outline: 0;
                padding: 0 20px 0 22px;
                margin-right: 30px;
            }
            form .action button[type="submit"] {
                background: rgb(0, 0, 0);
                color: white;
            }
            input[type=text], textarea {
                transition: 0.3s;
                outline: none;
                border: 2px solid #DDDDDD;
            }
            
            input[type=text]:focus, textarea:focus {
                box-shadow: 0 0 5px rgb(102, 194, 220);
                border: 2px solid rgb(92, 203, 234);
            }
            .displaybox{
                width: 200px;
                border: 2px solid black;
                padding-left: 6px;
                height: 30px;
            }
            .content-LEFT{
                float: left;
            }
            .content-RIGHT{
                float: right;
            }
            .form1{
                height: 60px;
            }
        </style>
    </head>
    <body>
        <br>
        <br>
        <br>
        <?php
        $con = mysqli_connect("localhost","root","","purrfect_care");
        $id = intval($_GET["appointmentID"]);
        $sql = "SELECT a.*, s.serviceType, s.servicePrice, s.serviceDuration, c.customerFullname FROM appointment_record a INNER JOIN service_record s ON a.serviceID = s.serviceID INNER JOIN customer_record c 
        ON a.customerID = c.customerID WHERE a.appointmentID = $id";
        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_array($result))
        {
        ?>
        <div class="title"><p>Payment for Reservation</p></div>
        
        <div class="details">

                <form action="" method="post">
                <input type="hidden" name="appointmentID" value="<?php echo $row['appointmentID'] ?>">
                    <div class="form1">
                        <div class="content-LEFT">
                            <label>APP ID:</label><br>
                            <div class="displaybox"><?php echo $row['appointmentID'] ?></div>
                        </div>
                        <div class="content-RIGHT">
                            <label>Service Name:</label><br>
                            <div class="displaybox"><?php echo $row['serviceType'] ?></div>
                        </div>
                    </div>
                    <br>
                    <div class="form1">
                        <div class="content-LEFT">
                            <label>Customer Name:</label><br>
                            <div class="displaybox"><?php echo $row['customerFullname'] ?></div>
                        </div>
                        <div class="content-RIGHT">
                            <label>Payment Date:</label><br>
                            <div class="displaybox"><?php echo $row['bookingDate'] ?></div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="form">
                        <label>Service Duration:</label><br>
                        <div class="displaybox"><?php echo $row['serviceDuration'] ?></div>
                    </div>
                    <br>
                    <div class="form">
                        <label>Total Charges:</label><br>
                        <div class="displaybox"><?php echo $row['servicePrice'] ?></div>
                        <input type="hidden" name="paymentAmount" value="<?php echo $row['servicePrice'] ?>">
                    </div>
                    <br>
                    <br>
                    <div class="form">
                        <label>Payment Type:</label> <br>
                        <select name="paymentType" required="required">
                            <option selected disabled>Please select payment method</option>
                            <option value="Credit/Debit card">Credit/Debit card</option>
                            <option value="Online Banking">Online Banking</option>
                            <option value="PayPal">PayPal</option>
                        </select>
                    </div>
                    <div class="action">
                        <button type="submit" class="btn" name="submit-btn">Submit</button>
                    </div>
                </form>
        </div>
        <?php
        }
        mysqli_close($con);
        ?>
      
        
    </body>
</html>