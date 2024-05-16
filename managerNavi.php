<!DOCTYPE html>
<html>
    <head>
        <title>Manager Page</title>
        <link rel="icon" href="img/Dog_Cat_Logo.png" type="image/jpg" sizes="50x50">
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
                text-align: center;
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
                margin-left: 68%;
            }

            .container{
                width: 80px;
            }
            
        </style>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg bg-light">
            
            <div class="container">
                <a class="navbar-brand" href="ManagerDashboard.php">
                <img src="img/Dog_Cat_Logo.png" alt="" width="50" height="50">
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
                    <a class="nav-link" aria-current="page" href="ManagerDashboard.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Reports
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="sales.php">Sales</a></li>
                        <li><a class="dropdown-item" href="appointment.php">Appointment Volume</a></li>
                        <li><a class="dropdown-item" href="feedback.php">Feedback</a></li>

                    </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="monitorOperations.php">Monitor Operations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="managerLogout.php">Logout</a>
                    </li>
                        
                </ul>
                </div>
            </div>
            </div>
          </nav>

          <!--Here will be the content part-->
    </body>
</html>