<!DOCTYPE html>
<html>
    <head>
        <title>Grooming | Purrfect Care</title>
        <link rel="icon" href="images/Dog_Cat_Logo.png" type="image/jpg" sizes="16x16">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
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
                height: 700px;
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
            }
            .container3{
                position: absolute;
                top: 22%;
                left: 50%;
                text-align: center;
                transform: translate(-50%, -50%);
            }
            .container3 h1{
                letter-spacing: 2px;
                font-weight: 900;
                margin-bottom: 60px;
                text-transform: uppercase;
            }
			.swiper {
				width: 940px;
                height: 560px;
			}
			.swiper-slide {
				position: relative;
				background-color: #000;
			}
			.swiper-slide img {
				display: block;
				width: 100%;
				height: 100%;
				object-fit: cover;
			}
			.swiper button {
				width: 50px;
				height: 50px;
				color: #fff;
				background: transparent;
				border: none;
				outline: none;
				transition: opacity 0.25s;
			}
			.swiper button:hover {
				opacity: 0.8;
			}
			.swiper button::before,
			.swiper button::after {
				font-size: 24px;
			}
			.swiper-pagination-bullet {
				background-color: #fff;
			}
			.swiper-description {
				position: absolute;
				left: 0;
				bottom: 0;
				isolation: isolate;
				padding: 50px 25px 25px;
				color: #fff;
			}
			.swiper-description::before {
				content: '';
				position: absolute;
				left: 0;
				bottom: 0;
				z-index: -1;
				width: 120%;
				height: 100%;
				background-image: linear-gradient(transparent, rgba(0, 0, 0, 0.8) 50%);
			}
			.swiper-description h2 {
				font-size: 42px;
				letter-spacing: 2px;
				text-transform: uppercase;
			}
			.swiper-description p {
				font-size: 14px;
				max-width: 50%;
				margin-bottom: 15px;
			}
            .section3{
                background-color: #EADEDB;
                width: 100%;
                background-size: cover;
                background-repeat: no-repeat;
                background-image: url(images/pawfinal.jpeg);
                height: 100%;
            }
            .container4 {
                display: flex;
                flex-direction: column;
                align-items: center;
                padding-top: 150px;
            }
            .container4 h1{
                letter-spacing: 2px;
                margin-bottom: 50px;
                text-transform: uppercase;
                font-weight: 900;
            }
            .description span{
                font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                font-size: 22px;
                text-align: center;
                color: #5d5d5d;
                text-transform: uppercase;
            }
            .description {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .IVAN1 {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
                gap: 70px;
                margin-top: 50px;
            }
            .IVAN1 > div {
                text-align: center;
            }
            .IVAN1 img {
                display: block;
                margin: 0 auto;
            }
            .IVAN2 {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
                gap: 70px;
                margin-top: 50px;
                margin-bottom: 100px;
            }
            .IVAN2 > div {
                text-align: center;
            }
            .IVAN2 img {
                display: block;
                margin: 0 auto;
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
            <img src="images/groom2extra.jpg" alt="grooming" height="550px" width="100%" style="filter: brightness(0.4)">
            <div class="container1">
                <h1><span>Pet Grooming</span></h1>
                <div class="animated-text">
                    <div class="groom-text">Your pet's go-to groomers. We pamper and style the prettiest pets around!</div>
                    <div class="groom-text">Come find out why our clients choose us for treatments.</div>
                    <div class="groom-text">Get them ready for their close-up!</div>
                    <div class="groom-text">Scroll down to explore more.</div>
                </div>
                <div>
                    <span id="hidden-number" hidden> <p>Here's the hidden number: 1</p></span>
                </div> 
                <a class="button" href="book_appointment.php?hidden_number=1">Book Appointment</a>
            </div>
        </div>
        <div class="section">
            <div class="container2">
                <div class="content-section">
                    <div class="title1">
                        <h1>Our Grooming Services</h1> 
                    </div>
                    <div class="content">
                        <h4>Providing quality of life to our beloved pets!</h4>
                        <p>
                            A well-groomed, good looking pet is certainly the pride and joy of all owners. Whether your pet needs a quick shampoo or <strong>“the works,”</strong> our expert groomers, 
                            at <strong>Purffect Care</strong>, will make your furry friend fabulous. Our Grooming Services are well-preserved in maintaining a healthy code and skins. 
                            That's why pet grooming service is what you need always to ensure the number of bacteria stay less vulnerable to everyone. 
                            If you find it is the right time for a grooming service, <strong>Purffect Care</strong> is here ready to serve you!
                        </p>
                        <div class="button1">
                            <a href="#ButtontoHere">What services do we offer?</a>
                        </div>
                    </div>
                </div>
                <div class="image-section">
                    <img src="images/groomingtools.png">
                </div>
            </div>
        </div>
        <div class="section2">
            <img src="images/petprint(final).jpeg" alt="paw" height="230px" width="100%" style="opacity: 0.0;">
            <div class="container3" id="ButtontoHere">
                <h1><span>Basic Services</span></h1>
            </div>
            <div class="swiper carousel">
                <div class="swiper-wrapper">
                    <figure class="swiper-slide">
                        <img src="images/shampoo-dog.png" alt="shampoo" />
                        <figcaption class="swiper-description">
                            <h2>Shampoo & Conditioner</h2>
                            <p>
                                Make your pet clean & fresh! Essential for maintaining the health and appearance of your pet's coat to keep clean and healthy. &nbsp&nbsp
                            </p>
                        </figcaption>
                    </figure>
                    <figure class="swiper-slide">
                        <img src="images/haircut.jpg" alt="haircut" />
                        <figcaption class="swiper-description">
                            <h2>Bath, Brush & Haircut</h2>
                            <p>
                                Haircut or hair clipping and styling to your preference! You just run a curry brush over them, get the excess hair out, and it’s bath time!
                            </p>
                        </figcaption>
                    </figure>
                    <figure class="swiper-slide">
                        <img src="images/catscleanup.jpg" alt="ear_cleaning" />
                        <figcaption class="swiper-description">
                            <h2>Ear Cleaning & In-Ear Hair Removal</h2>
                            <p>
                                Cleaning your pet's ears and removing in-ear hair is an important aspect of pet care, as it helps prevent infections and discomfort.
                            </p>
                        </figcaption>
                    </figure>
                    <figure class="swiper-slide">
                        <img src="images/nailtrim.jpg" alt="nail_trim" />
                        <figcaption class="swiper-description">
                            <h2>Nail Trimming with Buffing</h2>
                            <p>
                                Professional clipping of pet’s nails and smoothing out the nail’s edges. Trimming your dog's nails is an essential part of care!
                            </p>
                        </figcaption>
                    </figure>
                </div>
                <button type="button" class="swiper-button-next"></button>
                <button type="button" class="swiper-button-prev"></button>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="section3">
            <div class="container4">
                <h1>Full Package</h1>
                <div class="description">
                    <span>Basic Services<br>+</span>
                    <div class="IVAN1">
                        <div>
                            <img src="images/nail-polish.png" alt="" height="80" width="80">
                            <div>
                                <h5>Nail Polish</h5>
                                <p>Finished coat to your pup's nails</p>
                            </div>
                        </div>
                        <div>
                            <img src="images/anal-gland.png" alt="" height="80" width="80">
                            <div>
                                <h5>Express Anal Glands</h5>
                                <p>For pets that are scooting, licking rear,<br>or have unpleasant odor</p>
                            </div>
                        </div>
                        <div>
                            <img src="images/extra_coat_scissor.png" alt="" height="80" width="80">
                            <div>
                                <h5>Extra Coat Scissoring / Clipping</h5>
                                <p>Removing any mats or tangles in the process.</p>
                            </div>
                        </div>
                    </div>
                    <div class="IVAN2">
                        <div>
                            <img src="images/Shedicure.png" alt="" height="80" width="80">
                            <div>
                                <h5>Shedicure</h5>
                                <p>The shedding control system that reduces shedding up to 80%!</p>
                            </div>
                        </div>
                        <div>
                            <img src="images/facial-scrub.png" alt="" height="80" width="80">
                            <div>
                                <h5>Facial Scrub</h5>
                                <p>Scrubs your pet's face fur to exfoliate and remove dirt</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
		<script>
			const swiper = new Swiper('.carousel', {
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev'
				},
				pagination: {
					el: '.swiper-pagination'
				}
			})
		</script>
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

