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

        <meta http-equiv="refresh" content="10; monitorOperations.php">
        
        <title>Monitor Operations</title>
        
        <link rel="icon" href="img/Dog_Cat_Logo.png" type="image/jpg" sizes="50x50">
        
        <link href="monitorOperations.css" rel="stylesheet">
        
        <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    </head>

    <body>

        <h2>Live Appointment Status Tracker - Updated Every 10 Seconds</h2>

        <div class="tableDesign">
            <table class="lvl1-table">
                <thead>
                    <tr>
                        <th>Appointment<br>ID</th>
                        <th>Service<br>ID</th>
                        <th>Customer<br>ID</th>
                        <th>Booking<br>Date</th>
                        <th>Appointment<br>Date</th>
                        <th>Appointment<br>Time</th>
                        <th>Pet<br>Name</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <?php
                    //Fetch the current year's appointment date and in the sequence of status (Pending, Request Cancel, Cancel, Accept, Complete) and store to results
                    $sql = "SELECT * FROM appointment_record 
                    WHERE YEAR(appointmentDate) = YEAR(CURRENT_DATE()) AND MONTH(appointmentDate) = MONTH(CURRENT_DATE())
                    ORDER BY CASE WHEN status = 'Pending' THEN 1 
                    WHEN status = 'Request Cancel' THEN 2 
                    WHEN status = 'Cancelled' THEN 3 
                    WHEN status = 'Accepted' THEN 4
                    WHEN status = 'Completed' THEN 5
                    ELSE 6 END";
                    $result = mysqli_query($con, $sql);

                    //Fetch the current month's appointment date where status is Accept and print total
                    $sql2 = "SELECT count(*) as total FROM appointment_record 
                    WHERE YEAR(appointmentDate) = YEAR(CURRENT_DATE()) AND MONTH(appointmentDate) = MONTH(CURRENT_DATE()) AND status = 'Accepted'";
                    $result2 = mysqli_query($con, $sql2);

                    //Fetch the current month's appointment date where status is Cancel and print total
                    $sql3 = "SELECT count(*) as total FROM appointment_record 
                    WHERE YEAR(appointmentDate) = YEAR(CURRENT_DATE()) AND MONTH(appointmentDate) = MONTH(CURRENT_DATE()) AND status = 'Cancelled'";
                    $result3 = mysqli_query($con, $sql3);

                    //Fetch the current month's appointment date where status is Pending and print total
                    $sql4 = "SELECT count(*) as total FROM appointment_record 
                    WHERE YEAR(appointmentDate) = YEAR(CURRENT_DATE()) AND MONTH(appointmentDate) = MONTH(CURRENT_DATE()) AND status = 'Pending'";
                    $result4 = mysqli_query($con, $sql4);

                    //Fetch the current month's appointment date where status is Request Cancel and print total
                    $sql5 = "SELECT count(*) as total FROM appointment_record 
                    WHERE YEAR(appointmentDate) = YEAR(CURRENT_DATE()) AND MONTH(appointmentDate) = MONTH(CURRENT_DATE()) AND status = 'Request Cancel'";
                    $result5 = mysqli_query($con, $sql5);

                    //Fetch the current month's appointment date where status is Completed and print total
                    $sql6 = "SELECT count(*) as total FROM appointment_record 
                    WHERE YEAR(appointmentDate) = YEAR(CURRENT_DATE()) AND MONTH(appointmentDate) = MONTH(CURRENT_DATE()) AND status = 'Completed'";
                    $result6 = mysqli_query($con, $sql6);
                ?>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["appointmentID"]?></td>
                        <td><?php echo $row["serviceID"]?></td>
                        <td><?php echo $row["customerID"]?></td>
                        <td><?php echo $row["bookingDate"]?></td>
                        <td><?php echo $row["appointmentDate"]?></td>
                        <td><?php echo $row["appointmentTime"]?></td>
                        <td><?php echo $row["petName"]?></td>
                        <td><?php echo $row["status"]?></td>
                    </tr>
                    <?php
                        }
                    ?>
                    
                </tbody>
            </table>
        </div>
        <div class="status-box">
            <!--Here is current month total accept status-->
            <?php
                while ($row2 = mysqli_fetch_array($result2)) {
            ?>
            <h3 class="accept"><?php echo date("F");?> Total Accepted Appointment: <?php echo $row2["total"];?></h3>
            <?php
                }
            ?>
            <!--Here is current month total cancel status-->
            <?php
                while ($row3 = mysqli_fetch_array($result3)) {
            ?>
            <h3 class="cancel"><?php echo date("F");?> Total Cancelled Appointment: <?php echo $row3["total"];?></h3>
            <?php
                }
            ?>
            <!--Here is current month total pending status-->
            <?php
                while ($row4 = mysqli_fetch_array($result4)) {
            ?>
            <h3 class="pending"><?php echo date("F");?> Total Pending Appointment: <?php echo $row4["total"];?></h3>
            <?php
                }
            ?>
        </div>
        <div class="status-box2">
            <!--Here is current month total request cancel status-->
            <?php
                while ($row5 = mysqli_fetch_array($result5)) {
            ?>
            <h3 class="req-cancel"><?php echo date("F");?> Total Request Cancel Appointment: <?php echo $row5["total"];?></h3>
            <?php
                }
            ?>
            <!--Here is current month total complete status-->
            <?php
                while ($row6 = mysqli_fetch_array($result6)) {
            ?>
            <h3 class="complete"><?php echo date("F");?> Total Completed Appointment: <?php echo $row6["total"];?></h3>
            <?php
                }
            ?>
        </div>
    </body>
</html>