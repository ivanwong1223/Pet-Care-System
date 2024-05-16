<?php
session_start();
include 'admin_session.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Add New Staff</title>
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
            input[type="tel"]
             {
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
                    <a class="nav-link active" aria-current="page"  href="admin_manage_staff.php">Manage Staff</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin_manage_services.php">Manage Services</a>
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
           $mainServiceID = $_GET['mainServiceID'];

           if (isset($_POST['submitBTN'])){
            $staffFullName =  $_POST['staffFullName'];
            $staffEmail =  $_POST['staffEmail'];
            $staffPass = $_POST['staffPass'];
            $staffPhoneNumber =  $_POST['staffPhoneNumber'];
            $staffAvailability = $_POST['staffAvailability'];
            $staffGender = $_POST['staffGender'];
            $staffType = "1";
            $staff_status = "Active";
            $insert = "INSERT INTO staff_record(mainServiceID, staffFullName, staffEmail, staffPass, staffPhoneNumber, staffAvailability, staffGender, staffType, staff_status) 
                        VALUES('$mainServiceID', '$staffFullName' , '$staffEmail' ,'$staffPass', '$staffPhoneNumber', '$staffAvailability' , '$staffGender' , '$staffType', '$staff_status')";

            $confirm = mysqli_query($con,$insert);
            if($confirm == true){
                echo "<script>alert('Staff added.');window.location.href='admin_manage_staff.php';</script>";
            
            }else {
                echo "Please try again";
            }
           }

          ?>
          
        <p>Add Staff<p>
        
            <form method="POST" action="" enctype="multipart/form-data">
                <label>Staff Name:</label>
                <input type="text" name="staffFullName" required maxlength="50" pattern="[A-Za-z ]+" placeholder="Enter full name">
              
                <label for="staffEmail">Email:</label>
                <input type="email" name="staffEmail" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Enter email">
              
                <label for="staffPass">Password:</label>
                <input type="password" name="staffPass" required minlength="6" placeholder="Enter password (min length 6 characters)">
              
                <label for="staffPhoneNumber">Phone Number:</label>
                <input type="tel"  name="staffPhoneNumber" required maxlength="20"  placeholder="Enter phone number (exp:01XXXXXXXX)">
                
                <label>Availability:</label>
                <select name="staffAvailability" required>
                  <option value="">Select Availability</option>
                  <option value="Available">Available</option>
                  <option value="Unavailable">Unavailable</option>
                </select>

                <label>Gender:</label>
                <select name="staffGender" required>
                  <option value="">Select Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>               
              
                <button type="submit" name="submitBTN">Submit</button>
            </form>
              
        
    </body>
</html>
