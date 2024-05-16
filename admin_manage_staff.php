<?php
session_start();
include 'admin_session.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Manage Staff Page</title>
        <link rel="icon" href="images/purrfect_logo_nav.png" type="image/jpg" sizes="50x50">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <style>
            * {
                -webkit-box-sizing: content-box;
                -moz-box-sizing: content-box;
                box-sizing: content-box;
            }

            *:before,
            *:after {
                -webkit-box-sizing: content-box;
                -moz-box-sizing: content-box;
                box-sizing: content-box;
            }

            body {
                
                background-image: url('images/dashboardBackground');
                background-repeat: no-repeat;
                background-size: cover;
                
            }

            

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
                margin-top: 30px;
                margin-bottom: px;
                
                
            }

            .card-container {
                width: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-wrap: wrap;
                margin: auto;
                
            
            }
            
            .card {
                font-size: 30px;
                background-color: #f1f1f1;
                border-radius: 10px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
                padding: 5%;
                width: 200px;
                height: 100px;
                margin-left: 60px;
                margin-top: 60px;
                
            }
            
            .card-name {
                display: flex;
                justify-content: center;
                align-items: center;
                font-family: 'Oswald', sans-serif;
            }
            


            .book{
                margin-top: 30px;
                display: flex;
                justify-content: center;
                align-items: center;
                
            }

            .staff-button {
                font-family: 'Oswald', sans-serif;
                background-color: rgb(157, 149, 149);
                border: none;
                color: rgb(0, 0, 0);
                padding: 5px 13px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 17px;
                margin:5px;
                cursor: pointer;
                border-radius: 8px;
                transition: all 0.3s ease;
                
            }

            .staff-button:hover{
                background-color: yellowgreen;
                transform: scale(1.1);
                cursor: pointer;
            }
                    




            




    
        </style>
    </head>
    <body>

    <nav class="navbar navbar-expand-lg bg-light">
            
            <div class="container">
                <a class="navbar-brand" href="admin_homepage.html">
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
          
        <p>Purrfect Care Staff<p>
        <?php
        $con = mysqli_connect("localhost","root","","purrfect_care");
        $sql = "SELECT main_services.mainServiceID, serviceName, COUNT(staff_record.staffID) AS staffCount 
        FROM main_services LEFT JOIN staff_record ON 
        main_services.mainServiceID = staff_record.mainServiceID 
        GROUP BY main_services.mainServiceID";
        $result = mysqli_query($con, $sql);
        ?>
            <div class="card-container">
                <?php
                while($row = mysqli_fetch_array($result)){
                echo 
                '<div class="card">
                  <div class="card-name">'.$row['serviceName'].'</div>

                  <div class="book">
                  <a href="staff_list.php?mainServiceID='.$row['mainServiceID'].'" class="staff-button">View Staff</a>
                  <a href="admin_add_staff.php?mainServiceID='.$row['mainServiceID'].'" class="staff-button">Add Staff</a>
                  </div>
                </div>';
                }
                ?>
            </div>
    </body>
</html>
