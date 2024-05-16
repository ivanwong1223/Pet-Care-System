<?php
session_start();
include 'managerNavi.php';
include 'connectToDatabase.php';
include 'managerSession.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Manager Dashboard</title>
        
        <link rel="icon" href="images/Dog_Cat_Logo.png" type="image/jpg" sizes="50x50">
        
        <link href="ManagerDashboard.css" rel="stylesheet">
        
        <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    </head>
    <?php
    $sql = "SELECT * FROM staff_record WHERE staffID = $_SESSION[staffID]";
    $result = mysqli_query($con, $sql);
    
    while ($row = mysqli_fetch_array($result))
    {
    ?>
        <body>
            
            <h2>Welcome Back, Manager <?php print '<td>'.$row['staffFullName'].'</td>'; ?></h2>

            <div class="todayDateAndTime">
                <h3><u>Today's Date and Time</u></h3>
                <div class="todayCard">
                    <todayDay id="todayDay">
                        <script>
                            const today = new Date();
                            document.getElementById("todayDay").innerHTML = today.getDate();
                        </script>
                    </todayDay>

                    <todayMonth id="todayMonth">
                        <script>
                            const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                            const m = new Date();
                            let month = months[m.getMonth()];
                            document.getElementById("todayMonth").innerHTML = month;
                        </script>
                    </todayMonth>

                    <todayYear id="todayYear">
                        <script>
                            const y = new Date();
                            document.getElementById("todayYear").innerHTML = y.getFullYear();
                        </script>
                    </todayYear>
                </div>

                <div id="currentClock">

                    <script>
                        function updateClock() {
                        var today = new Date();
                        var hours = today.getHours();
                        var minutes = today.getMinutes();
                        var seconds = today.getSeconds();

                        hours = (hours < 10 ? "0" : "") + hours;
                        minutes = (minutes < 10 ? "0" : "") + minutes;
                        seconds = (seconds < 10 ? "0" : "") + seconds;
                        var time = hours + ":" + minutes + ":" + seconds;
                        document.getElementById("currentClock").innerHTML = time;
                        setTimeout(updateClock, 1000);
                        }
                        updateClock();
                    </script>
                </div>
            </div>
            
            <?php
            $sql = "SELECT count(paymentAmount) as total FROM payment_record 
            WHERE YEAR(paymentDate) = YEAR(CURRENT_DATE()) AND MONTH(paymentDate) = MONTH(CURRENT_DATE())";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);
            $total = $row["total"] ?? 0;
            ?>
            
            <div class="mData">
                <p id="totals-heading">This Month Total Sales</p>
                <p><b><?php echo $total?></b></p>
                <a href="sales.php">View more details</a>
            </div>
            
            <?php
            $sql2 = "SELECT count(appointmentTime) as total FROM appointment_record 
            WHERE YEAR(appointmentDate) = YEAR(CURRENT_DATE()) AND MONTH(appointmentDate) = MONTH(CURRENT_DATE())";
            $result2 = mysqli_query($con, $sql2);
            $row2 = mysqli_fetch_array($result2);
            $total2 = $row2["total"] ?? 0;
            ?>
            <div class="mData">
                <p id="totals-heading">This Month Total Appointment</p>
                <p><b><?php echo $total2?></b></p>
                <a href="appointment.php">View more details</a>
            </div>
            
            <?php
            $sql3 = "SELECT count(rating) as total FROM feedback_record 
            WHERE YEAR(feedbackDate) = YEAR(CURRENT_DATE()) AND MONTH(feedbackDate) = MONTH(CURRENT_DATE())";
            $result3 = mysqli_query($con, $sql3);
            $row3 = mysqli_fetch_array($result3);
            $total3 = $row3["total"] ?? 0;
            ?>
            <div class="mData">
                <p id="totals-heading">This Month Total Feedback</p>
                <p><b><?php echo $total3?></b></p>
                <a href="feedback.php">View more details</a>
            </div>

        </body>
    <?php
    }
    ?>
</html>