<?php
    session_start();
    if(isset($_SESSION["customerID"])){
        include("conn.php");
        $searchText = $_POST['search'];
        $sql = "SELECT * FROM main_services WHERE LOWER(main_services.serviceName) LIKE LOWER('%".$searchText."%')";
        $q = mysqli_query($con, $sql);
        $result = mysqli_fetch_assoc($q);
        
    }else {
        echo "<script>alert('Please Login!');window.location.href='CustomerLogin.php';</script>";
    }
?>

<!DOCTYPE html>
    <html>
        <head>
            <link rel="icon" href="images/Dog_Cat_Logo.png" type="image/jpg" sizes="50x50">
            <title>Search</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
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
                h1{
                    font-weight: normal;
                }
                a{
                    text-decoration: none;
                }
                body{
                    background-image: url(images/home.png);
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: fixed;
                    
                }
                .search_result{
                    text-align: justify;
                    margin: 30px;
                    padding: 10px;
                    padding-left: 20px;
                    background-color: rgba(255,255,255,0.85);
                    font-family: 'Playfair Display', serif;
                }
                .service_boarder{
                    border-bottom: 1px solid black;
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

            <div class="search_result">
            <?php
                echo "<div class='service_boarder'><h1>Search Result for <b>'".$searchText."'</b>: </h1></div>";
                do{
                ?>
                <p>
                <?php
                    if ($result != null){
                    $num = $result['mainServiceID'];
                    if($num != 6){
                        if ($num == 1){
                            echo "<div class='service_boarder'><h2>".$result['serviceName']." Service</h2>";
                            echo "<p><a href='grooming_services.php'>Go to ".$result['serviceName']." Service page</a></p>";
                            echo "<p><a class='button' href='book_appointment.php?hidden_number=".$num."'>Book Appointment</a></p></div>";
                        }elseif($num == 2){
                            echo "<div class='service_boarder'><h2>".$result['serviceName']." Service</h2>";
                            echo "<p><a href='veterinary_services.php'>Go to ".$result['serviceName']." Service page</a></p>";
                            echo "<p><a class='button' href='book_appointment.php?hidden_number=".$num."'>Book Appointment</a></p></div>";
                        }elseif($num == 3){
                            echo "<div class='service_boarder'><h2>".$result['serviceName']." Service</h2>";
                            echo "<p><a href='boarding_services.php'>Go to ".$result['serviceName']." Service page</a></p>";
                            echo "<p><a class='button' href='book_appointment.php?hidden_number=".$num."'>Book Appointment</a></p></div>";
                        }elseif($num == 7){
                            echo "<div class='service_boarder'><h2>".$result['serviceName']." Service</h2>";
                            echo "<p><a class='button' href='book_appointment.php?hidden_number=".$num."'>Book Appointment</a></p></div>";
                        }elseif($num == 8){
                            echo "<div class='service_boarder'><h2>".$result['serviceName']." Service</h2>";
                            echo "<p><a class='button' href='book_appointment.php?hidden_number=".$num."'>Book Appointment</a></p></div>";
                        }
                    }
                }else{
                    echo "<p>No Result Found.</p>";
                }
                ?>
                </p>
                <?php
                }while($result = mysqli_fetch_assoc($q));
                ?>
            </div>
        </body>
    </html>