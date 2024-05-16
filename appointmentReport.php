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
        
        <title>Appointment Report</title>
        
        <link rel="icon" href="img/Dog_Cat_Logo.png" type="image/jpg" sizes="50x50">
        
        <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

        <style>
            body{
                background-image: url(img/reportBackground.png);
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }
            
            .backAppointmentReport{
                text-align: left;
                margin-left: 30px;
                margin-top: 10px;
            }

            #back{
                width: 100px;
                height: 40px;
                border-radius: 20px;
                font-weight: bold;
            }

            #back:hover, #back:active, #back:focus{
                background-color: #d3d4d3;
            }

            h2{
                font-family: 'Poppins', sans-serif;
                color: rgba(0, 0, 0, 0.711);
                font-size: 40px;
                text-align: center;
                text-shadow: .3rem .3rem 0 rgba(0, 0, 0, .15);
                margin-left: 80px;
                margin-top: 5px;
            }

            .tableDesign{
                margin: 20px 80px 40px;
                box-shadow: 0px 35px 50px rgba(0, 0, 0, 0.2);
            }

            .lvl1-table{
                border-radius: 5px;
                font-size: 15px;
                font-family: 'Roboto', sans-serif;
                font-weight: normal;
                border: none;
                border-collapse: collapse;
                width: 100%;
                max-width: 100%;
                white-space: nowrap;
                background-color: white;
            }

            .lvll1-table td, .lvl1-table th {
                text-align: center;
                border: 3px solid black;
                padding: 8px;
            }

            .lvl1-table td {
                text-align: center;
                border: 3px solid black;
                font-size: 17px;
                padding: 4px;
            }

            .lvl1-table thead th {
                color: black;
                background: #eab170;
            }

            .lvl1-table thead th:nth-child(odd) {
                
                background: #fdd8ae;
            }

            .lvl1-table tr:nth-child(even) {

                background: #F8F8F8;
            }

            h3{
                text-align: center;
                border: 3px solid black;
                border-radius: 15px;
                width: 400px;
                margin-left: 500px;
                padding: 10px;
                background: #4FC3A1;
            }

            #backToTop{
                width: 35px;
                height: 40px;
            }

            #scrollToTop{
                border: 3px solid black;
                float: right;
                margin-right: 10px;
            }

        </style>
    </head>

    <body>
        <div class="backAppointmentReport">
            <form method="post" action="appointment.php">
                <input type="submit" id="back" name="back" value="Back">
            </form>
        </div>

        <h2>Appointment Volume Report</h2>

        <div class="tableDesign">
            <table class="lvl1-table">
                <thead>
                    <tr>
                        <th>Appointment<br>ID</th>
                        <th>Service<br>ID</th>
                        <th>Customer<br>ID</th>
                        <th>Appointment<br>Date</th>
                        <th>Appointment<br>Time</th>
                        <th>Customer<br>Address</th>
                        <th>Pet<br>Name</th>
                        <th>Pet<br>Species</th>
                        <th>Pet<br>Gender</th>
                        <th>Status</th>
                        <th>Notes</th>
                        <th>Booking<br>Date</th>
                    </tr>
                </thead>

                <?php
                    //Fetch the current year's appointment date and count the total appointment on that month and store to results
                    $sql = "SELECT * FROM appointment_record 
                    WHERE YEAR(appointmentDate) = YEAR(CURRENT_DATE()) AND MONTH(appointmentDate) = MONTH(CURRENT_DATE())";
                    $result = mysqli_query($con, $sql);

                    //Fetch the current month's appointment date and print total
                    $sql2 = "SELECT count(*) as total FROM appointment_record 
                    WHERE YEAR(appointmentDate) = YEAR(CURRENT_DATE()) AND MONTH(appointmentDate) = MONTH(CURRENT_DATE())";
                    $result2 = mysqli_query($con, $sql2);
                ?>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["appointmentID"]?></td>
                        <td><?php echo $row["serviceID"]?></td>
                        <td><?php echo $row["customerID"]?></td>
                        <td><?php echo $row["appointmentDate"]?></td>
                        <td><?php echo $row["appointmentTime"]?></td>
                        <td><?php echo $row["customerAddress"]?></td>
                        <td><?php echo $row["petName"]?></td>
                        <td><?php echo $row["petSpecies"]?></td>
                        <td><?php echo $row["petGender"]?></td>
                        <td><?php echo $row["status"]?></td>
                        <td><?php echo $row["notes"]?></td>
                        <td><?php echo $row["bookingDate"]?></td>
                    </tr>
                    <?php
                        }
                    ?>
                    
                </tbody>
            </table>
        </div>
        <!--Here is current month total appointment amount-->
        <?php
            while ($row2 = mysqli_fetch_array($result2)) {
        ?>
        <h3><?php echo date("F");?> Total Appointment Amount: <?php echo $row2["total"];?></h3>
        <?php
            }
        ?>

        <!--back to top button-->
        <button id="scrollToTop"><img src="img/scrollToTop.png" title="Back To Top" alt="Back To Top" id="backToTop"></img></button>
        <script>
            // Smooth scroll to top when button is clicked
            document.getElementById("scrollToTop").addEventListener("click", function() {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
            });
        </script>
    </body>
</html>