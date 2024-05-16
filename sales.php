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
        
        <title>Sales</title>
        
        <link rel="icon" href="img/Dog_Cat_Logo.png" type="image/jpg" sizes="50x50">
        
        <link href="sales.css" rel="stylesheet">
        
        <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    </head>

    <body>

        <?php
            //Fetch the current year's payment date and count the total revenue for different month and store to results
            $sql = "SELECT MONTHNAME(paymentDate) as mname, sum(paymentAmount) as total FROM payment_record 
            WHERE YEAR(paymentDate) = YEAR(CURRENT_DATE()) GROUP BY month(paymentDate)";
            $result = mysqli_query($con, $sql);

            //Fetch all data and store to results
            $sql2 = "SELECT sum(paymentAmount) as totalSales FROM payment_record ";
            $result2 = mysqli_query($con, $sql2);

            //Fetch all data that matches the current year and store to results
            $sql3 = "SELECT sum(paymentAmount) as yearSales FROM payment_record WHERE YEAR(paymentDate) = YEAR(CURRENT_DATE())";
            $result3 = mysqli_query($con, $sql3);
        ?>

        <!--This is the month and total table-->
        <table class="month-table">
            <tr>
                <th>Month (<?php echo date("Y");?>)</th>
                <th>Total Revenue</th>
            </tr>

            <?php
                while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $row["mname"]?></td>
                <td>RM <?php echo $row["total"]?></td>
            </tr>
            <?php
                }
            ?>
            
        </table>

        <?php
            while ($row2 = mysqli_fetch_array($result2)) {
        ?>
        <!--This is total revenue-->
        <div class="totalSales">
            <p id="totals-heading"><b>Total Revenue</b></p>
            <p>RM <?php echo $row2["totalSales"]?></p>
        </div>
        <?php
            }
        ?>

        <?php
            while ($row3 = mysqli_fetch_array($result3)) {
        ?>
        <!--This is revenue in a year-->
        <div class="yearSales">
            <p id="totals-heading"><b><?php echo date("Y");?> Revenue</b></p>
            <p>RM <?php echo $row3["yearSales"]?></p>
        </div>
        
        <!--This is average revenue in a year-->
        <div class="averSales">
            <p id="totals-heading"><b>Average Revenue in <?php echo date("Y");?></b></p>
            <p>RM <?php echo round($row3["yearSales"] / 12, 2)?></p>
        </div>
        <?php
            }
        ?>

        <div class="generateReport">
            <h4>This Month Report Details</h4>
            <form method="post" action="salesReport.php">
                <input type="submit" id="generate" name="generate" value="Generate Report">
            </form>
        </div>
    </body>
</html>