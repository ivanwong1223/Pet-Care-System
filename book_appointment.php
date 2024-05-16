<?php
    session_start();
    if(isset($_SESSION["customerID"])){
        include("conn.php");

        if(isset($_POST["submit-btn"])){
            $selectedServiceID = $_POST["serviceID"];
            $customerID = $_SESSION["customerID"];
            $appt_date = $_POST["appointmentDate"];
            $appt_time = $_POST["appointmentTime"];
            $customer_address = $_POST["customerAddress"];
            $pet_name = $_POST["petName"];
            $pet_species = $_POST["petSpecies"];
            $pet_gender = $_POST["petGender"];
            $status = "Pending";
            $notes = $_POST["notes"];
            $bookingDate = date("Y-m-d");
            $hidden_number = $_POST['hidden_number'];

            $insert_sql= "INSERT INTO appointment_record(serviceID, customerID, appointmentDate, appointmentTime, customerAddress, petName, petSpecies, petGender, status, notes, bookingDate) 
            VALUES ('$selectedServiceID','$customerID','$appt_date','$appt_time','$customer_address','$pet_name','$pet_species','$pet_gender','$status','$notes','$bookingDate')";

            $result = mysqli_query($con, $insert_sql);
            $insert_id = mysqli_insert_id($con);
            if($result){
                echo '<script>alert("Appointment Request Sent!");window.location.href="customer_payment.php?appointmentID='.$insert_id.'";</script>';
            }else{
                echo '<script>alert("Please Try Again / Service currently unavailable!");window.location.href="book_appointment.php?hidden_number='.$hidden_number.'";</script>';
            }
        }
    }else {
        echo "<script>alert('Please Login!');window.location.href='CustomerLogin.php';</script>"; //Here change the file link to where
      }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Book Appointment | Purrfect Care</title>
        <link rel="icon" href="images/Dog_Cat_Logo.png" type="image/jpg" sizes="16x16">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900');
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
        .IVAN{
        font-family: 'Poppins', sans-serif;
        font-weight: 300;
        font-size: 15px;
        line-height: 1.7;
        color: black;
        background-color: #EBD8B2;
        overflow-x: hidden;
        }
        button {
        cursor: pointer;
        transition: all 200ms linear;
        }
        button:hover {
        text-decoration: none;
        }
        p {
        font-weight: 500;
        font-size: 14px;
        line-height: 1.7;
        }
        h4 {
        font-weight: 600;
        }
        h6 span{
        padding: 0 20px;
        text-transform: uppercase;
        font-weight: 700;
        font-size: 40px;
        letter-spacing: 2px;
        }
        .section1{
        position: relative;
        width: 100%;
        display: block;
        }
        .full-height{
        min-height: 100vh;
        }
        .card-3d-wrap {
        position: relative;
        width: 840px;
        max-width: 100%;
        height: 750px;
        transform-style: preserve-3d;
        perspective: 800px;
        margin-top: 60px;
        }
        .card-3d-wrapper {
        width: 100%;
        height: 100%;
        position:absolute;    
        top: 0;
        left: 0;  
        transform-style: preserve-3d;
        transition: all 600ms ease-out; 
        }
        .card-front {
        width: 100%;
        height: 100%;
        background-color: #F1F6F9;
        background-position: bottom center;
        background-repeat: no-repeat;
        background-size: 300%;
        position: absolute;
        left: 0;
        top: 0;
        transform-style: preserve-3d;
        border-radius: 20px;
        }
        .center-wrap{
        position: absolute;
        width: 100%;
        padding: 0 35px;
        top: 50%;
        left: 0;
        transform: translate3d(0, -50%, 35px) perspective(100px);
        z-index: 20;
        display: block;
        }
        .form-group{ 
        position: relative;
        display: block;
            margin: 0;
            padding: 0;
        }
        .form-style {
        padding: 13px 20px;
        height: 48px;
        width: 100%;
        font-weight: 500;
        border-radius: 4px;
        font-size: 14px;
        line-height: 22px;
        letter-spacing: 0.5px;
        outline: none;
        color: #6D5D6E;
        background-color: #F1F6F9;
        border: 1px solid black;
        -webkit-transition: all 200ms linear;
        transition: all 200ms linear;
        box-shadow: 0 4px 8px 0 rgba(21,21,21,.2);
        }
        .form-style:focus,
        .form-style:active {
        border: none;
        outline: none;
        box-shadow: 0 4px 8px 0 rgba(21,21,21,.2);
        }
        .btn1{  
        border-radius: 4px;
        height: 44px;
        font-size: 13px;
        font-weight: 600;
        text-transform: uppercase;
        transition: all 200ms linear;
        padding: 0 30px;
        letter-spacing: 1px;
        display: inline-flex;
        align-items: center;
        text-align: center;
        border: none;
        background-color: #ffeba7;
        color: #102770;
        box-shadow: 0 8px 24px 0 rgba(255,235,167,.2);
        text-decoration: none;
        }
        .btn1:active,
        .btn1:hover,
        .btn1:focus{  
        background-color: #102770;
        color: #ffeba7;
        box-shadow: 5px 5px 15px rgba(16,39,112,.2);
        }
        #date-set{
            width: 48%;
            float: left;
        }
        #time-set{
            width: 50%;
            float: right;
        }
        #customer-add{
            margin-top: 10px;
            height: 100px;
        }
        #customer-notes{
            height: 100px;
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
                            <a class="nav-link" aria-current="page" href="customer_view_appointment.php">View Appointment</a>
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
        <div class="IVAN">
            <div class="section1">
                <div class="container1">
                    <div class="row full-height justify-content-center">
                        <div class="col-12 text-center align-self-center py-5">
                            <div class="section pb-5 pt-5 pt-sm-2 text-center">
                                <?php
                                $hidden_number = $_GET['hidden_number'];
                                $display_sql= "SELECT serviceName from main_services WHERE mainServiceID = $hidden_number";
                                $result2 = mysqli_query($con, $display_sql);
                                if($result2){
                                $row = mysqli_fetch_assoc($result2);
                                $serviceName = $row['serviceName'];
                                ?>
                                <h6 class="mb-0 pb-3"><span><?php echo $serviceName ?> Reservation</span></h6>
                                <?php
                                }
                                ?>
                                <div class="card-3d-wrap mx-auto">
                                    <div class="card-3d-wrapper">
                                        <div class="card-front">
                                            <div class="center-wrap">
                                                <div class="section text-center">
                                                    <h4 class="mb-4 pb-3">Appointment Request</h4>
                                                    <form method="post" action="#">
                                                        <input type="hidden" name="hidden_number" value="<?php echo $hidden_number; ?>">
                                                        <div class="form-group">
                                                            <input type="text" name="petName" class="form-style" placeholder="Enter your pet's name" id="" autocomplete="off" required>
                                                        </div>  
                                                        <div class="form-group mt-2">
                                                            <div class="form-group">
                                                                <select name="petSpecies" id="" class="form-style" required>
                                                                    <option selected disabled>Choose your pet's species</option>
                                                                    <option value="Dog">Dog</option>
                                                                    <option value="Cat">Cat</option>
                                                                    <option value="Fury Pets">Fury Pets</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mt-2">
                                                            <div class="form-group">
                                                                <select name="petGender" id="" class="form-style" required>
                                                                    <option selected disabled>Choose your pet's gender</option>
                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mt-2">
                                                            <div class="form-group">
                                                                <select name="serviceID" id="" class="form-style" required>
                                                                    <option selected disabled>Choose the package</option>
                                                                    <?php
                                                                    $hidden_number2 = $_GET['hidden_number'];
                                                                    $display_sql= "SELECT serviceID, serviceType from service_record WHERE mainServiceID = $hidden_number2 AND service_status='Active'";
                                                                    $result3 = mysqli_query($con, $display_sql);

                                                                    if(mysqli_num_rows($result3) > 0){
                                                                        while($row = mysqli_fetch_assoc($result3)){
                                                                            $serviceID = $row['serviceID'];
                                                                            $serviceType = $row['serviceType'];
                                                                            echo '<option value="'.$serviceID.'">'.$serviceType.'</option>';
                                                                        }
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mt-2">
                                                            <div class="form-group">
                                                            <textarea name="customerAddress" id="customer-add" class="form-style" required placeholder="Enter your house address"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mt-2">
                                                            <div class="form-group">
                                                            <textarea name="notes" id="customer-notes" class="form-style" placeholder="State if you any special request for your pet (optional)"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mt-2">
                                                            <div class="form-group">
                                                                <input type="date" name="appointmentDate" class="form-style" autocomplete="off" id="date-set" placeholder="Select preferred date" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <select name="appointmentTime" id="time-set" class="form-style" required>
                                                                    <option selected disabled>Select preferred time</option>
                                                                    <option value="0800-1000">8am-10am</option>
                                                                    <option value="1000-1200">10am-12pm</option>
                                                                    <option value="1300-1500">1pm-3pm</option>
                                                                    <option value="1500-1700">3pm-5pm</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <button type="submit" name="submit-btn" class="btn1 mt-4">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script>
            flatpickr("input[type=date]", {
                minDate: "today"
            });
        </script>
    </body>
</html>
