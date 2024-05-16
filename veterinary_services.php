<!DOCTYPE html>
<html>
    <head>
        <title>Veterinary | Purrfect Care</title>
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
            .section {
                width: 100%;
                height: 650px;
                background-color: #EAE6DA;
            }
            .container2{
                width: 87%;
                display: block;
                margin: auto;
                padding-top: 100px;
            }
            .content-section{
                float: left;
                width: 55%;
            }
            .image-section{
                float: right;
                width: 40%;
            }
            .image-section img{
                width: 85%;
                height: auto;
                margin-left: 60px;
            }
            .content-section .title1{
                text-transform: uppercase;
                font-size: 28px;
                font-family: Rockwell;
            }
            .title1 h1{
                font-weight: 700;
                letter-spacing: 1.5px;
            }
            .content-section .content h4{
                margin-top: 50px;
                color: #5d5d5d;
                font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            }
            .content-section .content p{
                margin-top: 30px;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                font-size: 18px;
                line-height: 1.8;
            }
            .content-section .content .button1{
                margin-top: 50px;
            }
            .content-section .content .button1 a{
                background-color: #3d3d3d;
                padding: 12px 40px;
                text-decoration: none;
                color: #fff;
                font-size: 25px;
                letter-spacing: 1.5px;
            }
            .content-section .content .button1 a:hover{
                background-color: #a52a2a;
                color: #fff;
            }
            @media screen and (max-width: 768px){
                .container2{
                    width: 80%;
                    display: block;
                    margin: auto;
                    padding-top: 50px;
                }
            }
            .section2{
                background-color: #EADEDB;
                position: relative;
                width: 100%;
                background-size: cover;
                background-repeat: no-repeat;
                background-image: url(images/pawfinal.jpeg);
                padding-bottom: 100px;
            }
            .container3{
                position: absolute;
                top: 14%;
                left: 50%;
                text-align: center;
                transform: translate(-50%, -50%);
            }
            .container3 h1{
                letter-spacing: 2px;
                font-weight: 900;
                text-transform: uppercase;
            }
            :root{
				--surface-color: #fff;
				--curve: 40;
			}
            .cards{
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 2rem;
                margin: 3rem 5vw;
                padding: 0;
                list-style-type: none;
            }
            .card{
                position: relative;
                display: block;
                height: 100%;
                border-radius: calc(var(--curve) * 1px);
                overflow: hidden;
                text-decoration: none;
            }
            .card_image{
                width: 100%;
                height: 300px;
            }
            .card_overlay{
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                z-index: 1;
                border-radius: calc(var(--curve) * 1px);
                background-color: var(--surface-color);
                transform: translateY(100%);
                transition: .2s ease-in-out;
            }
            .card:hover .card_overlay{
                transform: translateY(0);
            }
            .card_header{
                position: relative;
                display: flex;
                align-items: center;
                gap: 2em;
                padding: 2em;
                border-radius: calc(var(--curve) * 1px) 0 0 0;
                background-color: var(--surface-color);
                transform: translateY(-100%);
                transition: .2s ease-in-out;
            }
            .card_arc{
                width: 80px;
                height: 80px;
                position: absolute;
                bottom: 100%;
                right: 0;
                z-index: 1;
            }
            .card_arc path{
                fill: var(--surface);
            }
            .card:hover .card_header{
                transform: translateY(0);
            }
            .card_thumb{
                flex-shrink: 0;
                width: 50px;
                height: 50px;
                border-radius: 50%;
            }
            .card_title{
                font-size: 1em;
                margin: 0 0 .3em;
                color: #6A515E;
                text-transform: uppercase;
            }
            .card_description{
                margin: 17px;
                color: black;
                font-family: "MockFlowFont";
                display: -webkit-box;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 3;
                overflow: hidden;
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
            <img src="images/veterinary-main.jpg" alt="Veterinary" height="550px" width="100%" style="filter: brightness(0.4)">
            <div class="container1">
                <h1><span>Pet Veterinary</span></h1>
                <div class="animated-text">
                    <div class="groom-text">Limited Essential Services During Emergency Hour</div>
                    <div class="groom-text">Come find out why our clients choose us for veterinary.</div>
                    <div class="groom-text">Keeps your pet healthier</div>
                    <div class="groom-text">Scroll down to explore more.</div>
                </div>
                <div>
                    <span id="hidden-number" hidden> <p>Here's the hidden number: 2</p></span>
                </div> 
                <a class="button" href="book_appointment.php?hidden_number=2">Book Appointment</a>
            </div>
        </div>
        <div class="section">
            <div class="container2">
                <div class="content-section">
                    <div class="title1">
                        <h1>Our Veterinary Services</h1> 
                    </div>
                    <div class="content">
                        <h4>Provide range of veterinary care to keep your pet healthy!</h4>
                        <p>
                            Our focus is on delivering high-quality veterinary services that prioritize animal health and well-being, and we strive to identify and address any medical conditions. 
                            Veterinary services in <strong>Purrfect Care</strong> are vital for ensuring the health and well-being of animals, and play a crucial role in supporting the bond 
                            between pets and their owners. <strong>Purrfect Care</strong> are also responsible in educating customers to help them better understand the care of their pets.
                        </p>
                        <div class="button1">
                            <a href="#ButtontoHere">What services do we offer?</a>
                        </div>
                    </div>
                </div>
                <div class="image-section">
                    <img src="images/veterinary2.png">
                </div>
            </div>
        </div>
        <div class="section2">
            <img src="images/petprint(final).jpeg" alt="paw" height="230px" width="100%" style="opacity: 0.0;">
            <div class="container3" id="ButtontoHere">
                <h1><span>Veterinary Services</span></h1>
            </div>
            <ul class="cards">
                <li>
                    <a href="" class="card">
                        <img src="images/Endoscopy.jpg" alt="endoscopy" class="card_image">
                        <div class="card_overlay">
                            <div class="card-header">
                                <svg class="card_arc" xmLns="http://www.w3.org/2000/svg"><path /></svg>
                                <img src="images/vet_logo.png" alt="" class="card_thumb">
                                <div class="card_header-text">
                                    <h3 class="card_title">Endoscopy</h3>
                                </div>
                            </div>
                            <p class="card_description">A long, thin and flexible or rigid instrument used to perform investigations in difficult to access cavities or compartments.</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="card">
                        <img src="images/Ophthalmologist.jpg" alt="opht" class="card_image">
                        <div class="card_overlay">
                            <div class="card-header">
                                <svg class="card_arc" xmLns="http://www.w3.org/2000/svg"><path /></svg>
                                <img src="images/vet_logo.png" alt="" class="card_thumb">
                                <div class="card_header-text">
                                    <h3 class="card_title">Ophthalmologist</h3>
                                </div>
                            </div>
                            <p class="card_description">Specializes exclusively in treating eye disorders in animals. This is not a comprehensive ocular health examination, but rather an eye screening exam.</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="card">
                        <img src="images/dermatology.jpg" alt="derm" class="card_image">
                        <div class="card_overlay">
                            <div class="card-header">
                                <svg class="card_arc" xmLns="http://www.w3.org/2000/svg"><path /></svg>
                                <img src="images/vet_logo.png" alt="" class="card_thumb">
                                <div class="card_header-text">
                                    <h3 class="card_title">Dermatology</h3>
                                </div>
                            </div>
                            <p class="card_description">Experienced veterinary dermatologists are trained to recognise subtle variations in skin conditions and diseases that are often misinterpreted.</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="card">
                        <img src="images/Dentistry.jpg" alt="dent" class="card_image">
                        <div class="card_overlay">
                            <div class="card-header">
                                <svg class="card_arc" xmLns="http://www.w3.org/2000/svg"><path /></svg>
                                <img src="images/vet_logo.png" alt="" class="card_thumb">
                                <div class="card_header-text">
                                    <h3 class="card_title">Dentistry</h3>
                                </div>
                            </div>
                            <p class="card_description">Domesticated animals accumulate plaque and calculus on pet's teeth.</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="card">
                        <img src="images/Rehabilitation.png" alt="rehab" class="card_image">
                        <div class="card_overlay">
                            <div class="card-header">
                                <svg class="card_arc" xmLns="http://www.w3.org/2000/svg"><path /></svg>
                                <img src="images/vet_logo.png" alt="" class="card_thumb">
                                <div class="card_header-text">
                                    <h3 class="card_title">Physiotherapy</h3>
                                </div>
                            </div>
                            <p class="card_description">Relates to the treatment and management of conditions relating to the musculoskeletal, neuro-muscular, and cardiorespiratory systems of your pet.</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="card">
                        <img src="images/vaccination.jpg" alt="vaccine" class="card_image">
                        <div class="card_overlay">
                            <div class="card-header">
                                <svg class="card_arc" xmLns="http://www.w3.org/2000/svg"><path /></svg>
                                <img src="images/vet_logo.png" alt="" class="card_thumb">
                                <div class="card_header-text">
                                    <h3 class="card_title">Vaccination</h3>
                                </div>
                            </div>
                            <p class="card_description">Pet vaccinations, like those for humans, may sometimes require a booster to keep them effective.</p>
                        </div>
                    </a>
                </li>
            </ul>
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