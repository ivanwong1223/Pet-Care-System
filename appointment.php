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
        
        <title>Appointment</title>
        
        <link rel="icon" href="img/Dog_Cat_Logo.png" type="image/jpg" sizes="50x50">
        
        <link href="appointment.css" rel="stylesheet">
        
        <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    </head>

    <body>
        <?php
            //Fetch the current year's appointment date and count the total appointment for different month and store to results
            $sql = "SELECT MONTHNAME(appointmentDate) as mname, count(appointmentTime) as total FROM appointment_record 
            WHERE YEAR(appointmentDate) = YEAR(CURRENT_DATE()) GROUP BY month(appointmentDate)";
            $result = mysqli_query($con, $sql);

            //Fetch all data and store to results
            $sql2 = "SELECT count(appointmentTime) as totalAppointment FROM appointment_record ";
            $result2 = mysqli_query($con, $sql2);

            //Fetch all data that matches the current year and store to results
            $sql3 = "SELECT count(appointmentTime) as yearAppointment FROM appointment_record WHERE YEAR(appointmentDate) = YEAR(CURRENT_DATE())";
            $result3 = mysqli_query($con, $sql3);
        ?>

        <!--This is the month and total table-->
        <table class="month-table">
            <tr>
                <th>Month (<?php echo date("Y");?>)</th>
                <th>Total Appointment</th>
            </tr>

            <?php
                while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $row["mname"]?></td>
                <td><?php echo $row["total"]?></td>
            </tr>

            <?php
                }
            ?>
            
        </table>

        <?php
            while ($row2 = mysqli_fetch_array($result2)) {
        ?>
        <!--This is total appointment-->
        <div class="totalAppointment">
            <p id="totals-heading"><b>Total Appointment</b></p>
            <p><?php echo $row2["totalAppointment"]?></p>
        </div>
        <?php
            }
        ?>

        <?php
            while ($row3 = mysqli_fetch_array($result3)) {
        ?>
        <!--This is appointment in a year-->
        <div class="yearAppointment">
            <p id="totals-heading"><b><?php echo date("Y");?> Appointment</b></p>
            <p><?php echo $row3["yearAppointment"]?></p>
        </div>
        
        <!--This is average appointment in a year-->
        <div class="averAppointment">
            <p id="totals-heading"><b>Average Appointment in <?php echo date("Y");?></b></p>
            <p><?php echo round($row3["yearAppointment"] / 12,2)?></p>
        </div>
        <?php
            }
        ?>

        <div class="generateReport">
            <h4>This Month Report Details</h4>
            <form method="post" action="appointmentReport.php">
                <input type="submit" id="generate" name="generate" value="Generate Report">
            </form>
        </div>
    </body>
</html>