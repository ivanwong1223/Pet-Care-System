<?php
    session_start();
    if(isset($_SESSION["staffID"])){
        include("conn.php");
    }else {
        echo "<script>alert('Please Login!');window.location.href='StaffLogin.php';</script>"; 
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Edit Customer Appointment Page
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
        $sql = "SELECT * FROM appointment_record WHERE appointmentID=$id";
        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_array($result))
        {
        ?>
        <div class="title"><p>Editing Customer Appointment</p></div>
        
        <div class="details">

                <form action="update_customer_appointment_provider" method="post">
                <input type="hidden" name="appointmentID" value="<?php echo $row['appointmentID'] ?>">
                    <div class="form">
                        <label>APP ID:</label><br>
                        <input type="text" value="<?php echo $row['appointmentID'] ?>" placeholder="Enter Appointment ID" name="appointmentID">
                    </div>
                    <br>
                    <div class="form">
                        <label>Service ID:</label> <br>
                        <input type="text" value="<?php echo $row['serviceID'] ?>" placeholder="Enter Service ID" name="serviceID">
                    </div>
                    <br>
                    <div class="form">
                        <label>Customer ID:</label> <br>
                        <input type="text" value="<?php echo $row['customerID'] ?>" placeholder="Enter Customer ID" name="customerID">
                    </div>
                    <br>
                    <div class="form1">
                        <div class="content-LEFT">
                            <label>Customer Address:</label><br>
                            <div class="displaybox"><?php echo $row['customerAddress'] ?></div>
                        </div>
                        <div class="content-RIGHT">
                            <label>Customer Notes:</label><br>
                            <div class="displaybox"><?php echo $row['notes'] ?></div>
                        </div>
                    </div>
                    <br>
                    <div class="form1">
                        <label>Booking Date:</label><br>
                        <div class="displaybox"><?php echo $row['bookingDate'] ?></div>
                    </div>
                    <br>
                    <div class="form">
                        <label>Date:</label> <br>
                        <input type="date" value="<?php echo $row['appointmentDate'] ?>" name="appointmentDate">
                    </div>
                    <br>
                    <div class="form">
                        <label>Time slot:</label> <br>
                        <input type="text" value="<?php echo $row['appointmentTime'] ?>" placeholder="Enter Time Slot in 24hr format" name="appointmentTime">
                    </div>
                    <br>
                    <div class="form">
                    <label>Status:</label> <br>
                    <select name="status" required="required">
                        <option value="">Please select status</option>
                        <option value="Accepted" 
                        <?php if ($row['status'] == "Accepted") { ?>
                        selected
                        <?php } ?>
                        >Accepted</option>
                        <option value="Pending" 
                        <?php if ($row['status'] == "Pending") { ?>
                        selected
                        <?php } ?>
                        >Pending</option>
                        <option value="Rejected"
                        <?php if ($row['status'] == "Rejected") { ?>
                        selected
                        <?php } ?>
                        >Rejected
                        <option value="Completed" 
                        <?php if ($row['status'] == "Completed") { ?>
                        selected
                        <?php } ?>
                        >Completed</option>
                        <option value="Cancelled" 
                        <?php if ($row['status'] == "Cancelled") { ?>
                        selected
                        <?php } ?>
                        >Cancelled</option>
                        </select>
                    </div>
                    <div class="action">
                        <button type="reset" class="btn">Reset</button>
                        <button type="submit" class="btn">Submit</button>
                    </div>
                </form>
        </div>
        <?php
        }
        mysqli_close($con);
        ?>
      
        
    </body>
</html>