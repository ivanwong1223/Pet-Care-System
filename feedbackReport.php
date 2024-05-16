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
        
        <title>Feedback Report</title>
        
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
            
            .backFeedbackReport{
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
                margin-left: 50px;
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
        </style>
    </head>

    <body>
        <div class="backFeedbackReport">
            <form method="post" action="feedback.php">
                <input type="submit" id="back" name="back" value="Back">
            </form>
        </div>

        <h2>Feedback Report</h2>

        <div class="tableDesign">
            <table class="lvl1-table">
                <thead>
                    <tr>
                        <th>Feedback ID</th>
                        <th>Customer ID</th>
                        <th>Appointment ID</th>
                        <th>Rating</th>
                        <th>Comment</th>
                        <th>Feedback Date</th>
                    </tr>
                </thead>

                <?php
                    //Fetch the current year's feedback date and count the total feedback on that month and store to results(5star to 1star order)
                    $sql = "SELECT * FROM feedback_record
                    WHERE YEAR(feedbackDate) = YEAR(CURRENT_DATE()) AND MONTH(feedbackDate) = MONTH(CURRENT_DATE()) ORDER BY rating DESC";
                    $result = mysqli_query($con, $sql);

                    //Fetch the current month's feedback date and print total
                    $sql2 = "SELECT count(*) as total FROM feedback_record 
                    WHERE YEAR(feedbackDate) = YEAR(CURRENT_DATE()) AND MONTH(feedbackDate) = MONTH(CURRENT_DATE())";
                    $result2 = mysqli_query($con, $sql2);
                ?>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["feedbackID"]?></td>
                        <td><?php echo $row["customerID"]?></td>
                        <td><?php echo $row["appointmentID"]?></td>
                        <td><?php echo $row["rating"]?></td>
                        <td>
                            <!--if the string length of the comment is more than 50, it will print \n behind the length 50 and continue-->
                            <?php
                            $comment = $row["comment"];
                            $max_length = 50;
                            if (strlen($comment) > $max_length) {
                                echo nl2br(wordwrap($comment, $max_length, "\n", true));
                            } else {
                                echo nl2br($comment);
                            }
                            ?>
                        </td>
                        <td><?php echo $row["feedbackDate"]?></td>
                    </tr>
                    <?php
                        }
                    ?>
                    
                </tbody>
            </table>
        </div>
        <!--Here is current month total feedback amount-->
        <?php
            while ($row2 = mysqli_fetch_array($result2)) {
        ?>
        <h3><?php echo date("F");?> Total Feedback Amount: <?php echo $row2["total"];?></h3>
        <?php
            }
        ?>
    </body>
</html>