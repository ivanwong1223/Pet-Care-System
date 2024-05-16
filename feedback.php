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
        
        <title>Feedback</title>
        
        <link rel="icon" href="img/Dog_Cat_Logo.png" type="image/jpg" sizes="50x50">
        
        <link href="feedback.css" rel="stylesheet">
        
        <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    </head>

    <body>
        <?php
            //Fetch the current year's feedback date and count the total feedback for different month and store to results
            $sql = "SELECT MONTHNAME(feedbackDate) as mname, count(rating) as total FROM feedback_record 
            WHERE YEAR(feedbackDate) = YEAR(CURRENT_DATE()) GROUP BY month(feedbackDate)";
            $result = mysqli_query($con, $sql);

            //Fetch all data that rating is 5 and store to results
            $sql2 = "SELECT count(rating) as totalFeedback FROM feedback_record WHERE rating=5";
            $result2 = mysqli_query($con, $sql2);

            //Fetch all data that matches the current year and is more than or equal 4, then store to results
            $sql3 = "SELECT count(rating) as Feedback45 FROM feedback_record
            WHERE YEAR(feedbackDate) = YEAR(CURRENT_DATE()) AND rating>=4";
            $result3 = mysqli_query($con, $sql3);

            //Fetch all data that matches the current year and is equal 3, then store to results
            $sql4 = "SELECT count(rating) as Feedback3 FROM feedback_record
            WHERE YEAR(feedbackDate) = YEAR(CURRENT_DATE()) AND rating=3";
            $result4 = mysqli_query($con, $sql4);

            //Fetch all data that matches the current year and is less than or equal 2, then store to results
            $sql5 = "SELECT count(rating) as Feedback12 FROM feedback_record
            WHERE YEAR(feedbackDate) = YEAR(CURRENT_DATE()) AND rating<=2";
            $result5 = mysqli_query($con, $sql5);
        ?>

        <!--This is the month and total table-->
        <table class="month-table">
            <tr>
                <th>Month (<?php echo date("Y");?>)</th>
                <th>Total Feedback</th>
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
        <!--This is total 5 star feedback-->
        <div class="totalFeedback">
            <p id="totals-heading"><b>Total 5 Star Feedback</b><br>
            <?php echo $row2["totalFeedback"]?></p>
        </div>
        <?php
            }
        ?>

        <?php
            while ($row3 = mysqli_fetch_array($result3)) {
        ?>
        <!--This is 4-5 star feedback in a year-->
        <div class="Feedback45">
            <p id="totals-heading"><b><?php echo date("Y");?> 4-5 Star Feedback</b><br>
            <?php echo $row3["Feedback45"]?></p>
        </div>
        <?php
            }
        ?>

        <?php
            while ($row4 = mysqli_fetch_array($result4)) {
        ?>
        <!--This is 3 star feedback in a year-->
        <div class="Feedback3">
            <p id="totals-heading"><b><?php echo date("Y");?> 3 Star Feedback</b><br>
            <?php echo $row4["Feedback3"]?></p>
        </div>
        <?php
            }
        ?>

        <?php
            while ($row5 = mysqli_fetch_array($result5)) {
        ?>
        <!--This is 1-2 star feedback in a year-->
        <div class="Feedback12">
            <p id="totals-heading"><b><?php echo date("Y");?> 1-2 Star Feedback</b><br>
            <?php echo $row5["Feedback12"]?></p>
        </div>
        <?php
            }
        ?>

        <div class="generateReport">
            <h4>This Month Report Details</h4>
            <form method="post" action="feedbackReport.php">
                <input type="submit" id="generate" name="generate" value="Generate Report">
            </form>
        </div>
    </body>
</html>