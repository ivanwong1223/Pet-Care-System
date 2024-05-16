<!DOCTYPE html>
<html>
    <head>
        <title>Boarding | Purrfect Care</title>
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
            .main-image{
                position: relative;
                background-size: cover;
                overflow: hidden;
            }
            .container1{
                position: absolute;
                top: 52%;
                left: 50%;
                text-align: center;
                transform: translate(-50%, -50%);
                color: #fff;
                font-weight: 700;
                text-transform: uppercase;
            }
            .container1 h1{
                letter-spacing: 2px;
                font-size: 70px;
                font-weight: 900;
                margin-bottom: 70px;
            }
            .groom-text{
                margin-bottom: 20px;
                display: block;
                font-size: 20px;
                font-weight: 500;
                display: none;
            }
            .groom-text.text-in{
                display: block;
                animation: textIn .5s ease;
            }
            .groom-text.text-out{
                animation: textOut .5s ease;
            }
            @keyframes textIn{
                0%{
                    transform: translateY(100%);
                }
                100%{
                    transform: translateY(0%);
                }
            }
            @keyframes textOut{
                0%{
                    transform: translateY(0%);
                }
                100%{
                    transform: translateY(-100%);
                }
            }
            .button{
                position: relative;
                display: inline-block;
                color: #fff;
                outline: 2px solid #EDD59E;
                overflow: hidden;
                transition: color 1s;
                padding: 20px 40px;
                text-decoration: none;
            }
            .button:hover{
                color: #090909;
            }
            .button::before{
                content: '';
                top: 0;
                left: -50px;
                position: absolute;
                z-index: -1;
                width: 150%;
                height: 100%;
                background-color: #EDD59E;
                transform: scaleX(0) skewX(35deg);
                transform-origin: left;
                transition: transform 1s;
            }
            .button:hover::before{
                transform: scaleX(1) skewX(35deg);
            }
            .animated-text{
                height: 75px;
            }
            .about-section{
                background: url(images/boarding-3.png) no-repeat 70px;
                background-size: 700px;
                background-color: #F5D6C6;
                overflow: hidden;
            }
            .inner-container1{
                width: 65%;
                float: right;
                padding: 120px;
            }
            .inner-color{
                background-color: #F3E0BE;
                padding: 70px;
            }
            .inner-container1 h1{
                margin-bottom: 30px;
                font-size: 30px;
                font-weight: 900;
            }
            .text1{
                font-size: 13px;
                line-height: 30px;
                text-align: justify;
                margin-bottom: 40px;
            }
            .skills{
                display: flex;
                justify-content: space-between;
                font-weight: 700;
                font-size: 13px;
            }
            .parent-element0{
                background-image: url(images/pawfinal.jpeg);
                background-size: cover;
                background-repeat: no-repeat;
                width: 100%;
                position: relative;
            }
            .DESCRIP h1{
                letter-spacing: 2px;
                font-weight: 900;
                text-transform: uppercase;
                position: absolute;
                top: 10%;
                left: 50%;
                text-align: center;
                transform: translate(-50%, -50%);
            }
            .card1 {
                display: inline-block;
            }
            .card1 img{ 
                height: 300px;
                width: 450px;
                border-radius: 3px;
            }
            .top-section{
                height: 500px;
                margin: 50px;
                box-shadow: 5px 5px 20x black;
                overflow: hidden;
            }
            .intro{
                height: 200px;
                width: 450px;
                padding: 6px;
                box-sizing: border-box;
                position: absolute;
                background: #F3E0BE;
                color: black;
                font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
            .intro h1{
                margin: 10px;
                font-size: 30px;
            }
            .intro p{
                font-size: 20px;
                margin: 20px;
            }
            #hidden-number {
                display: none;
                opacity: 0;
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
        <div class="main-image">
            <img src="images/boarding-main.png" alt="board" height="550px" width="100%" style="filter: brightness(0.4)">
            <div class="container1">
                <h1><span>Pet Boarding</span></h1>
                <div class="animated-text">
                    <div class="groom-text">Overnight dog boarding. Where you stay with friends!</div>
                    <div class="groom-text">We board cats and pocket pets too!</div>
                    <div class="groom-text">Dog Boarding, Plus Dog Daycare Fun!</div>
                    <div class="groom-text">Scroll down to explore more.</div>
                </div>
                <div>
                    <span id="hidden-number" hidden> <p>Here's the hidden number: 3</p></span>
                </div> 
                <a class="button" href="book_appointment.php?hidden_number=3">Book Appointment</a>
            </div>
        </div>
        <div class="about-section">
            <div class="inner-container1">
                <div class="inner-color">
                    <h1>Our Boarding Services</h1>
                    <p class="text1">
                        Your pets stay overnight in your sitter's home. They'll be treated like part of the family in a comfortable environment. <strong>Purrfect Care</strong> boarding services
                        It is designed so that our <strong>Best Friends</strong> enjoy luxe, spacious suites, daily housekeeping, room service and customized activities including plenty of playtime and always crate-free boarding.
                        Your pet spends the day at your sitter's home. Drop them off in the morning and pick up a happy pup in the evening!
                    </p>
                    <div class="skills">
                        <span>Air-Conditioned</span>
                        <span>Soothing Piped-in Music</span>
                        <span>Spacious Suites</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="parent-element0">
            <div class="parent-element1" style="text-align: center; padding-top: 250px; padding-bottom: 200px">
            <div class="DESCRIP"><h1><span>Pet Boarding Package</span></h1></div>
                <div class="card1"> <!--container-->
                    <div class="top-section"> <!--card-->
                        <img src="images/dog-deluxe01.png" alt="">
                        <div class="intro">
                            <h1>Standard Suite</h1>
                            <p>RM 60 (per day) for one S/M sized dog.<br>RM 80 (per day) for one L sized dog.<br>(Up to 11 sq ft)</p>
                        </div>
                    </div>
                </div>
                <div class="card1"> <!--container-->
                    <div class="top-section"> <!--card-->
                        <img src="images/dog-suite02.png" alt="">
                        <div class="intro">
                            <h1>Luxury Suite</h1>
                            <p>RM 125 (per day) for one dog.<br>(Up to 30 sq ft)</p>
                        </div>
                    </div>
                </div>
                <div class="card1"> <!--container-->
                    <div class="top-section"> <!--card-->
                        <img src="images/dog-suite03.png" alt="">
                        <div class="intro">
                            <h1>Royal Suite</h1>
                            <p>RM 150 (per day) for one dog.<br>(Up to 66 sq ft)</p>
                        </div>
                    </div>
                </div>
                <div class="card1"> <!--container-->
                    <div class="top-section"> <!--card-->
                        <img src="images/cat-deluxe01.jpg" alt="">
                        <div class="intro">
                            <h1>Cats & Pocket Pets Rooms</h1>
                            <p>RM 50 (per day) for one cat.<br>RM 40 (per day) for one pocket pets.<br>(Up to 13-16 sq ft)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            const txts=document.querySelector(".animated-text").children,
                    txtsLen=txts.length;
                let index=0;
                const textInTimer=3000, textOutTimer=2800;
            function animatedText(){
                for(let i=0; i<txtsLen; i++){
                    txts[i].classList.remove("text-in","text-out");
                }
                txts[index].classList.add("text-in");
                
                setTimeout(function(){
                    txts[index].classList.add("text-out");
                },textOutTimer)
                if(index==txtsLen-1){
                    index=0;
                }
                else{
                    index++;
                }
                setTimeout(animatedText,3000);
            }
            window.onload=animatedText;
        </script>
    </body>
</html>
    </head>
</html>