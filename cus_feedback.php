<!DOCTYPE html>
<html>
    <head>
    <title>Feedback | Purffect Care</title>
        <link rel="icon" href="images/Dog_Cat_Logo.png" type="image/jpg" sizes="16x16">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <style>
            *,
			*::before,
			*::after {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
			}
            body{
                background-color: antiquewhite;
            }
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
            .tupperware1 .form h2 {
                text-align: center;
                color: #222;
                margin: 10px 0px 20px;
                font-size: 25px;
            }
            .tupperware1 .form .form-element {
                margin: 15px 0px;
            }
            .tupperware1 .form .form-element button {
                width: 100%;
                height: 40px;
                border: none;
                outline: none;
                font-size: 16px;
                background: #222;
                color: #f5f5f5;
                border-radius: 10px;
                cursor: pointer;
                margin-top: 30px;
            }
            .form-element {
                flex-basis: 40%;
                font-size: 19px;
            }
            .tupperware1 textarea {
                min-height: 200px;
                max-height: 400px;
                border-radius: 30px;
                box-shadow: 0 5px 5px rgba(0, 0, 0, 0,1);
                width: 100%;
                padding: 20px;
                box-shadow: 0 4px 8px 0 rgba(21,21,21,.2);
            }
            .tupperware1 {
                margin-left: auto;
                margin-right: auto;
                margin-top: 80px;
                width: 860px;
                padding: 20px 30px;
                background: #fff;
                box-shadow: 2px 2px 5px 5px rgba(0,0,0,0.15);
                border-radius: 10px;
            }
            .form-style1 {
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
                border: 1px solid black;
                margin-bottom: 50px;
                box-shadow: 0 4px 8px 0 rgba(21,21,21,.2);
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
        <?php
        if(isset($_GET['appointmentID'])) {
            $appointmentID = $_GET['appointmentID'];

            echo 
            "<div class='tupperware1'>
                <div class='form'>
                    <h2>Feedback for AppointmentID = ".$appointmentID."</h2>
                    <div class='form-element'>
                        <form action='process_feedback.php' method='POST'>
                        <p>Rating: </p>
                        <select name='rating' class='form-style1' required>
                        <option selected disabled>Choose your rating to the appointment</option>
                        <option value='1'>Bad</option>
                        <option value='2'>Not Good</option>
                        <option value='3'>Good</option>
                        <option value='4'>Very Good</option>
                        <option value='5'>Excellent</option>
                        </select>
                        <p>Message: </p>
                        <input type='hidden' name='appointmentID' value='".$appointmentID."'>
                        <textarea name='feedback' rows='5' placeholder='Write your feedback here' required></textarea>
                        <button type='submit' id='submitBtn' name='submitBtn'>Submit</button>
                        </form>
                    </div>
                </div>
            </div>";
        } else {
            echo "Invalid appointmentID.";
        }
        ?>
    </body>
</html>