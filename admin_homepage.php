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

            .header{
                height: 100px;
                width: 100%;
                margin: 0 auto;
                
            }

            

            .picture{
                display: flex;
                justify-content: center;
                align-items: center;
                float: left;
                background-image: url(images/test.webp);
                width: 40%;
                height: 540px;
                background-size: cover;
                
            }
            
            .selection{
                display: flex;
                justify-content: center;
                align-items: center;
                float: right;
                width: 60%;
                height: 300px;
               
    
            }

            .welcome{
                display: flex;
                margin-bottom: 300px;
                align-items: center;
                justify-content: center;
            }

            .card{
                margin-top: 10px;
                width: 280px;
                height: 220px;
                padding: 1rem 1rem;
                background: #fff;
                position: relative;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0px 7px 10px rgba(0,0,0,0.5);
                transition: 0.5s ease-in-out;
                margin-left: 40px;
            }

            .card:hover{
                transform: translateY(20px);
            }

            .card:before{
                content:"";
                position:absolute;
                top: 0%;
                left: 0%;
                display: block;
                width: 100%;
                height: 100%;
                background-color: rgba(10, 217, 72, 0.425);
                z-index: 2;
                transition: 0.3s all;
                opacity: 0;
            }

            .card:hover:before{
                opacity: 10;
            }
            
            .card img{
                width: 100%;
                height: 100%;
                object-fit: cover;
                position: absolute;
                top:0%;
                left: 0%;
            }

            .card .info{
                position: relative;
                z-index: 3;
                color:#fff;
                opacity: 0;
                transform: translateY(30px);
                transition: 0.25s;
                display: inline-block;

            }

            .card:hover .info{
                opacity:1;
                transform: translateY(0px);
            }
            
            .button-text{
                cursor: grab;
                font-size:larger;
                padding: 15px;
                border-radius: 8px;
                background-color: #dbdbdb

            }

            .title1{
                width: 100%;
                margin-top: 10px;
                font-family: 'Poppins', sans-serif;
                color: rgba(0, 0, 0, 0.711);
                font-size: 50px;
                text-shadow: .3rem .3rem 0 rgba(0, 0, 0, .2);
                line-height: 1.8;
                padding: 1rem 0;

            }
            .subject{
                width: 100%;
                text-align: center;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .instruct{
                font-family: 'Poppins', sans-serif;
                color: rgba(0, 0, 0, 0.711);
                font-size: 30px;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-top: 50px;
            }

            

    
        </style>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg bg-light">
            
            <div class="container">
                <a class="navbar-brand" href="#">
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
                    <a class="nav-link active" aria-current="page" href="admin_homepage.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="admin_manage_customer.php">Manage Customers</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="admin_manage_staff.php">Manage Staff</a>
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
        
        <div class="title1">
            <div class="subject">
                <b><p>Welcome, Admin!</p></b>
            </div>
        </div>

        
            <div class="picture"></div>
            
                <div class="instruct"><p><i>Please Select:</i><p></div>
                <div class="selection">
                    
                    <div class="card">
                        <img src="images/dog-training.png">
                        <div class="info"><a href="admin_manage_customer.php"><button class="button-text">Manage Customers</button></a></div>
                        
                    </div>
                    <div class="card">
                        <img src="images/business-people.png">
                        <div class="info"><a href="admin_manage_staff.php"><button class="button-text">Manage Staff</button></a></div>
                        
                    </div>
                    <div class="card">
                        <img src="images/customer-service.png">
                        <div class="info"><a href="admin_manage_services.php"><button class="button-text">Manage Services</button></a></div>
                    </div>
                </div>
            
    </body>
</html>
