<?php
session_start();
include 'admin_session.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Add New Subservice</title>
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
           
           $mainServiceID = $_GET['mainServiceID'];

           if (isset($_POST['submitBTN'])){
            $serviceType =  $_POST['serviceType'];
            $serviceDescription = $_POST['serviceDescription'];
            $serviceDuration = $_POST['serviceDuration'];
            $servicePrice =  $_POST['servicePrice'];
            $petType = $_POST['petType'];
            $serviceAverageRating = "0";
            $status = "Active";
            $serviceImage = $_FILES['serviceImage']['name'];
            $temp_name = $_FILES['serviceImage']['tmp_name'];

            $insert = "INSERT INTO service_record(mainServiceID, serviceImage, serviceType, serviceDescription, serviceDuration, servicePrice, petType,  serviceAverageRating, service_status) 
                        VALUES('$mainServiceID', '$serviceImage' , '$serviceType' , '$serviceDescription', '$serviceDuration', '$servicePrice', '$petType' , '$serviceAverageRating', '$status')";

            $confirm = mysqli_query($con,$insert);
            if($confirm == true){
                echo '<script>alert("Record updated!");window.location.href="view_edit_service.php?mainServiceID='.$mainServiceID.'";</script>';
                move_uploaded_file($temp_name,"images/$serviceImage");
            
            }else {
                echo "Error: " . mysqli_error($con);
            }
           }

          ?>
          
        <p>Add New Service<p>
       
        
            <form method="POST" enctype="multipart/form-data">
               
              
                <label>Service Type:</label>
                <input type="text" name="serviceType"  placeholder="Enter a service type">
                <span class="note">Note: You can only add 1 sub-service in this form. To add more subservices, go to manage services page and click "Add Service Type".</span>
                
                <label>Service Description:</label>
                <input type="text" name="serviceDescription" required="required" placeholder="Enter service description">

                <label>Service Image:</label> <br>
                <input type="file" placeholder="Upload Image" name="serviceImage">
                <span class="note">Note: For illustration purposes.</span>


                <label>Service Duration:</label>
                <input type="text" name="serviceDuration" required="required"  placeholder="Enter service duration in hours format(exp:1 Hour, 2 Hours, 5 Hours)">
              
                <label>Service Price:</label>
                <input type="number" step="0.01" min="0.00" name="servicePrice" required="required"  placeholder="Enter service price (RM)">
                
                <label>Pet Type:</label>
                <select name="petType" required>
                  <option value="">Select Pet Type</option>
                  <option value="Dog/Cat">Dog/Cat</option>
                  <option value="Furry Pets">Furry Pets</option>
                  <option value="All">All</option>
                </select>

               

                <button type="submit" name="submitBTN">Submit</button>
            </form>
              
        
    </body>
</html>
