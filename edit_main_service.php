<?php
session_start();
include 'admin_session.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page</title>
        <link rel="icon" href="images/purrfect_logo_nav.png" type="image/jpg" sizes="50x50">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Carlito&display=swap" rel="stylesheet"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <style>
            nav{
                box-shadow: 0 0.4rem 1.4rem rgb(0 0 0 / 11%);
            }

            .d-flex{
                width: 500px;
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

            .container{
                width: 80px;
            }

            
            p{
                width: 100%;
                font-family: 'Poppins', sans-serif;
                color: rgba(0, 0, 0, 0.711);
                font-size: 40px;
                text-shadow: .3rem .3rem 0 rgba(0, 0, 0, .2);
                text-align: center;
                margin-top: 20px;
                margin-bottom: px;
                
                
            }

            form {
                max-width: 80%;
                margin: 0 auto;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
                background-color: #f8f8f8;
                font-family: 'Carlito', sans-serif;
                font-size: 18px;
                
            }

            label {
                display: block;
                margin-bottom: 10px;
            }

            input[type="text"],
            input[type="email"],
            input[type="password"],
            input[type="tel"],
            input[type="number"]
             {
                width: 100%;
                padding: 10px;
                margin-bottom: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
                
            }

            input[type="file"]{
                width: 100%;
                padding: 10px;
                margin-bottom: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            select {
                width: 100%;
                padding: 10px;
                margin-bottom: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
              
                background-color: #fff;
            }

            input[type="radio"] {
                display: inline-block;
                margin-bottom: 20px;
                margin-right: 10px;
              
            }

            button[type="submit"] {
                display: block;
                width: 100%;
                padding: 10px;
                border: none;
                border-radius: 5px;
                background-color: #4CAF50;
                color: #fff;
               
                cursor: pointer;
            }

            button[type="submit"]:hover {
                background-color: #3e8e41;
            }

            
            input[type=text], textarea {
                transition: 0.35s;
                outline: none;
                border: 2px solid #DDDDDD;
            }
            
            input[type=text]:focus, textarea:focus {
                box-shadow: 0 0 4px rgb(102, 194, 220);
                border: 2px solid rgb(92, 203, 234);
            }

            input[type=email], textarea {
                transition: 0.35s;
                outline: none;
                border: 2px solid #DDDDDD;
            }
            
            input[type=email]:focus, textarea:focus {
                box-shadow: 0 0 4px rgb(102, 194, 220);
                border: 2px solid rgb(92, 203, 234);
            }

            input[type=password], textarea {
                transition: 0.35s;
                outline: none;
                border: 2px solid #DDDDDD;
            }
            
            input[type=password]:focus, textarea:focus {
                box-shadow: 0 0 4px rgb(102, 194, 220);
                border: 2px solid rgb(92, 203, 234);
            }

            input[type=tel], textarea {
                transition: 0.35s;
                outline: none;
                border: 2px solid #DDDDDD;
            }
            
            input[type=tel]:focus, textarea:focus {
                box-shadow: 0 0 4px rgb(102, 194, 220);
                border: 2px solid rgb(92, 203, 234);
            }

            input[type=email], textarea {
                transition: 0.35s;
                outline: none;
                border: 2px solid #DDDDDD;
            }
            
            input[type=email]:focus, textarea:focus {
                box-shadow: 0 0 4px rgb(102, 194, 220);
                border: 2px solid rgb(92, 203, 234);
            }

            
            input[type=file], textarea {
                transition: 0.35s;
                outline: none;
                border: 2px solid #DDDDDD;
            }
            
            input[type=file]:focus, textarea:focus {
                box-shadow: 0 0 4px rgb(102, 194, 220);
                border: 2px solid rgb(92, 203, 234);
            }

            input[type=number], textarea {
                transition: 0.35s;
                outline: none;
                border: 2px solid #DDDDDD;
            }
            
            input[type=number]:focus, textarea:focus {
                box-shadow: 0 0 4px rgb(102, 194, 220);
                border: 2px solid rgb(92, 203, 234);
            }

            .note{
                font-size:15px;
                color:grey;
                display:block;
                margin-bottom:20px;
            }


    
        </style>
    </head>
    <body>

    <nav class="navbar navbar-expand-lg bg-light">
            
            <div class="container">
                <a class="navbar-brand" href="admin_homepage.php">
                <img src="images/purrfect_logo_nav.png" alt="" width="50" height="50">
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
                    <a class="nav-link" href="admin_homepage.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="admin_manage_customer.php">Manage Customers</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link"   href="admin_manage_staff.php">Manage Staff</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="admin_manage_services.php">Manage Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="managerLogout.php">Logout</a>
                    </li>
                </ul>
                </div>
            </div>
            </div>
          </nav>

          <?php
           $con = mysqli_connect("localhost","root","","purrfect_care");
           $mainServiceID = intval($_GET['mainServiceID']);
           $sql = "SELECT * FROM main_services WHERE mainServiceID=$mainServiceID";
           $result = mysqli_query($con, $sql);
           $row = mysqli_fetch_array($result);

           $serviceName = $row['serviceName'];
           $serviceLocation = $row['serviceLocation'];
            $serviceStartTime = $row['serviceStartTime'];
            $serviceEndTime = $row['serviceEndTime'];

           

          ?>
          
        <p>Edit Main Service<p>
       
        
            <form method="POST" enctype="multipart/form-data">
                <label>Service Name:</label>
                <input type="text" name="serviceName" value="<?php echo $serviceName ?>" required="required" placeholder="Enter service name">

                <label>Service Location:</label>
                <input type="text" name="serviceLocation" value="<?php echo $serviceLocation ?>" required="required" placeholder="Enter service location">

                <label>Service Start Time:</label>
                <input type="text" name="serviceStartTime" value="<?php echo $serviceStartTime ?>" required="required" pattern="^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$" placeholder="Enter service start time in 24hour format (exp:10:30)">

                <label>Service End Time:</label>
                <input type="text" name="serviceEndTime" value="<?php echo $serviceEndTime ?>" required="required" pattern="^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$" placeholder="Enter service end time in 24hour format (exp:10:30)">
                <button type="submit" name="submitBTN">Submit</button>
            </form>
              
            <?php

                if (isset($_POST['submitBTN'])){
                $serviceName =  $_POST['serviceName'];
                $serviceLocation = $_POST['serviceLocation'];
                $serviceStartTime = $_POST['serviceStartTime'];
                $serviceEndTime =  $_POST['serviceEndTime'];

                $insert = "UPDATE main_services SET serviceName = '$serviceName', serviceLocation = '$serviceLocation', serviceStartTime = '$serviceStartTime', serviceEndTime ='$serviceEndTIme' WHERE mainServiceID=$mainServiceID";
                            

                $confirm = mysqli_query($con,$insert);
                if($confirm == true){
                    echo '<script>alert("Record updated!");window.location.href="view_main_service.php?";</script>';
                  
                }else {
                    echo "Error: " . mysqli_error($con);
                }
                }
            ?>
        
    </body>
</html>
