<?php
    session_start();
    if(isset($_SESSION["customerID"])){
        include("conn.php");
    }else {
        echo "<script>alert('Please Login!');window.location.href='CustomerLogin.php';</script>";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>My Appointment | Purrfect Care</title>
        <link rel="icon" href="images/Dog_Cat_Logo.png" type="image/jpg" sizes="50x50">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">

        <style>
            nav{
                box-shadow: 0 0.4rem 1.4rem rgb(0 0 0 / 11%);
            }
            .d-flex{
                width: 300px;
            }
            .nav-item{
                padding: 5px;
            }
            .flex-center{
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .navbar-brand{
                margin-left: 20px;
                padding: 0%;
                padding-bottom: 0%;
                margin-right: 0%;
            }
            .navbar-nav {
                margin-left: auto;
            }
            form[role="search"] {
                margin-right: auto;
            }
            .container{
                width: 80px;
            }

            body {
                margin: auto;
                background-image: url(images/background.png);
                background-color: #EDF1FF;
            }

            p{
                text-align: center;
                margin-top: 40px;
                font-family: 'Play', sans-serif;
                font-size: 24px;
                padding-top: 30px;
                padding-bottom: 30px;
            }
            
            table,th,td {
                border-collapse: collapse;
                margin: auto;
                font-size: 20px;
                text-align: left;
                padding: 15px;
                font-family:none;
            }
            th {
                border-bottom: solid black;
            }
            td {
                border-bottom: 1px solid #ddd;
            }
            
            .link a{
                color: red;
            }
            .link a:active{
                color: blue;
                box-shadow: 4px 4px 3px #171515;
                transition: 0s;
            }
            .link2 a{
                color: blue;
            }
            .link2 a:active{
                color: red;
                box-shadow: 4px 4px 3px #171515;
                transition: 0s;
            }
            a,a:hover{
                text-decoration: none;
            }
            .table_css{
                background-color: #CA955C;
                border-radius: 30px;
                margin-left: 47px;
                margin-right: 47px;
                padding-left: 20px;
                padding-right: 20px;
                padding-bottom: 50px;
                box-shadow: 0 1px 20px 0 rgba(69,90,100,0.08);
                height: 100%;
            }
            th{
                background: #e0b574;
            }
            tr{
                background: #fff;
            }
        </style>
    </head>
    <body>

    <?php
    include("conn.php");
    $con = mysqli_connect("localhost","root","","purrfect_care");
    $query = "SELECT serviceName FROM main_services WHERE mainServiceID > 6";
    $result5 = mysqli_query($con, $query);
    $hiddenNumber = 7;
    ?>

    <nav class="navbar navbar-expand-lg bg-light">
            
            <div class="container">
                <a class="navbar-brand" href="#">
                <img src="images/Dog_Cat_Logo.png" alt="logo" width="50" height="50">
                </a>
            </div>
            <span class="navbar-brand mb-0 h1">Purrfect Care</span>
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="customer_homepage.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="customer_view_appointment.php">View Appointment</a>
                            </li>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Additional Services
                            </a>
                            <ul class="dropdown-menu">
                                <?php
                                while ($row = mysqli_fetch_assoc($result5)) {
                                    $serviceName = $row['serviceName'];
                                    echo '<li><a class="dropdown-item" href="book_appointment.php?hidden_number=' . $hiddenNumber . '">' . $serviceName . '</a></li>';
                                    $hiddenNumber++; 
                                }
                                ?>
                            </ul>    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            My Profile
                            </a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Manage_Profile_Page.html">View & Edit My Profile</a></li>
                            
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="managerLogout.php">Logout</a></li>

                        </ul>
                    </ul>
                </div>
                <form class="d-flex" role="search" method="post" action="search_result.php">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <div class="table_css">
            <p>My Appointment</p>
            <div>
                <table style="width: 100%;">
                    <tr>
                        <th>APP ID</th>
                        <th>Service Type</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Pet Name</th>
                        <th>Pet Species</th>
                        <th>Pet Gender</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                    <?php 
                    if(isset($_SESSION["customerID"])){
                        include("conn.php");
                        $con = mysqli_connect("localhost","root","","purrfect_care");
                        $sql = "SELECT appointment_record.appointmentID, service_record.serviceType, appointment_record.appointmentDate, appointment_record.appointmentTime, appointment_record.petName, appointment_record.petSpecies, appointment_record.petGender, appointment_record.status 
                        FROM appointment_record INNER JOIN customer_record ON appointment_record.customerID = customer_record.customerID 
                        INNER JOIN service_record ON appointment_record.serviceID = service_record.serviceID 
                        WHERE appointment_record.customerID=".$_SESSION["customerID"]."";
                        $result = mysqli_query($con, $sql);

                        while ($row= mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>".$row['appointmentID']."</td>";
                            echo "<td>".$row['serviceType']."</td>";
                            echo "<td>".$row['appointmentDate']."</td>";
                            echo "<td>".$row['appointmentTime']."</td>";
                            echo "<td>".$row['petName']."</td>";
                            echo "<td>".$row['petSpecies']."</td>";
                            echo "<td>".$row['petGender']."</td>";
                            echo "<td>".$row['status']."</td>";
                            if ($row['status'] !== 'Request Cancel' && $row['status'] !== 'Completed' && $row['status'] !== 'Cancelled') {
                                echo '<td class="link"><a href="request_cancel.php?appointmentID='.$row['appointmentID'].'"onclick="return confirm(\'Request cancel AppointmentID =  '.$row['appointmentID'].' ?\');">Cancel</a></td>';
                            }
                            $feedbackQuery = "SELECT * FROM feedback_record WHERE appointmentID = ".$row['appointmentID']."";
                            $feedbackResult = mysqli_query($con, $feedbackQuery);

                            if ($row['status'] == 'Completed' && $feedbackResult->num_rows <= 0) {
                                echo '<td class="link2"><a href="cus_feedback.php?appointmentID='.$row['appointmentID'].'" onclick="return confirm(\'Provide feedback to AppointmentID = '.$row['appointmentID'].' ?\');">Feedback</a></td>';
                            }
                            else if ($row['status']=='Completed' && $feedbackResult->num_rows>0){
                                echo '<td>Feedback sent</td>';
                            }
                            else {
                                if ($row['status']!=='Pending' && $row['status']!=='Accepted'){
                                    echo '<td>-</td>';
                                }
                            }
                            echo "</tr>";
                        }
                        if($result->num_rows <= 0){
                            echo "<script>alert('No Appointment Booked')</script>";
                        }
                    }
                    ?>
                </table>
            </div>
        </div>        
    </body>
</html>
