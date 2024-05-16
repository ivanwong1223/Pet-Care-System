<?php
session_start();
include 'admin_session.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Staff List</title>
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

            
            p{
                width: 100%;
                font-family: 'Poppins', sans-serif;
                color: rgba(0, 0, 0, 0.711);
                font-size: 40px;
                text-shadow: .3rem .3rem 0 rgba(0, 0, 0, .2);
                text-align: center;
                margin-top: 10px;
                margin-bottom: px;
                
                
            }

            .tableDesign{
                margin: 10px 70px 70px;
                box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
            }

            .level1-table{
                border-radius: 5px;
                font-size: 15px;
                font-family: 'Roboto', sans-serif;
                font-weight: normal;
                border: none;
                border-collapse: collapse;
                width: 100%;
                max-width: 100%;
                white-space: nowrap;
                background-color: white;
            }

            .level1-table td, .level1-table th {
                text-align: center;
                padding: 8px;
            }

            .level1-table td {
                border-right: 1px solid #f8f8f8;
                
                font-size: 15px;
            }

            .level1-table thead th {
                color: #ffffff;
                background: #4FC3A1;
            }


            .level1-table thead th:nth-child(odd) {
                
                background: #324960;
            }

            .level1-table tr:nth-child(even) {

                background: #F8F8F8;
            }

            thead th:nth-child(10) {
                color: transparent;
            }

            thead th:nth-child(11) {
                color: transparent;
            }

            .wrap {
                width: auto;
                display: flex;
                justify-content: center;
                margin-left: 950px;
            }

            .search-bar {
                width: 100%;
                max-width: 330px;
                border: 2px solid rgba(0, 0, 0, 0.299);
                display: flex;
                align-items: center;
                padding: 2px 10px;
                border-radius: 50px;
                margin-right: 50px;
            
            }

            .search-bar input{
                padding: 2px 10px;
                flex: 1;
                background: transparent;
                font-size: 17px;
                border: 0;
                outline: none;
            }

            .search-bar button img{
                width: 25px;
            }

            .search-bar button {
                border: 0;
                border-radius: 50px;
                width: 40px;
                height: 40px;
                cursor: pointer;
            }

            .green-button {
                background-color: #4CAF50; /* Green */
                border: none;
                color: white;
                padding: 7px 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 2px 1px;
                cursor: pointer;
                border-radius: 8px;
                transition: all 0.3s ease;
            }

            .green-button:hover{
                background-color: yellowgreen;
                transform: scale(1.1);
                cursor: pointer;
            }

            .red-button {
                background-color: #db1b1b; /* Green */
                border: none;
                color: white;
                padding: 7px 10px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 2px 1px;
                cursor: pointer;
                border-radius: 8px;
                transition: all 0.3s ease;
            }

            .red-button:hover{
                background-color: orangered;
                transform: scale(1.1);
                cursor: pointer;
            }

            .text {
                color: transparent;
            }

            .links a{
                color: blue;
            }
            .links a:hover{
                color: red;
                
            }
            .links a:active{
                color: red;
                box-shadow: 4px 4px 3px #171515;
                transition: 0s;
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
          
        <p>Purrfect Care Staff<p>
        <?php
        $searchkeyword = "";
        if (isset($_GET["searchBtn"]))
        {
            $searchkeyword = $_GET['search_keyword'];
        }
        ?>
        <div class="wrap">
            <form class="search-bar" method="GET">
                <input type="hidden" name="mainServiceID" value="<?php echo $_GET['mainServiceID']; ?>">
                <input type="text"  name="search_keyword" placeholder="Search for staff">
                <button type="submit" name="searchBtn"><img src="images/search.png"></button>
            </form>
        </div>
        <?php
            $con = mysqli_connect("localhost","root","","purrfect_care");
            $mainServiceID = $_GET['mainServiceID'];
            $sql = "SELECT * FROM staff_record 
                    WHERE mainServiceID = $mainServiceID
                    AND (staffID LIKE '%".$searchkeyword."%' 
                    OR staffEmail LIKE '%".$searchkeyword."%' 
                    OR staffFullname LIKE '%".$searchkeyword."%' 
                    OR staffPhoneNumber LIKE '%".$searchkeyword."%' 
                    OR staffAvailability LIKE '%".$searchkeyword."%'
                    OR staffGender LIKE '%".$searchkeyword."%' 
                    OR staffType LIKE '%".$searchkeyword."%')";

            $result = mysqli_query($con, $sql);

        ?>
          <div class="tableDesign">
              <table class="level1-table">
                  <thead>
                  <tr>
                    <th>Staff ID</th>
                    <th>Main Service ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone No.</th>
                    <th>Availability</th>
                    <th>Gender</th>
                    <th>Staff Type</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th class="text">Edit</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    while($row=mysqli_fetch_array($result))
                {
                
                
                echo    '<tr>
                      <td>'.$row['staffID'].'</td>
                      <td>'.$row['mainServiceID'].'</td>
                      <td>'.$row['staffFullName'].'</td>
                      <td>'.$row['staffEmail'].'</td>
                      <td>'.$row['staffPhoneNumber'].'</td>
                      <td>'.$row['staffAvailability'].'</td>
                      <td>'.$row['staffGender'].'</td>
                      <td>'.$row['staffType'].'</td>
                      <td>';
                      if($row['staff_status']=='Active'){
                        echo '<img src="images/greendot.jpg" alt="" width="10px" height="10px">';
                      }else{
                        echo '<img src="images/reddot.png" alt="" width="17px" height="12px">';
                      }

                      echo '</td>
                            <td>';
                      
                        if($row['staff_status']=='Active'){
                            echo '<form action="deactivate_staff.php" method="post">
                                    <input type="hidden" name="mainServiceID" value="'.$row['mainServiceID'].'">
                                    <input type="hidden" name="staffID" value="'.$row['staffID'].'">
                                    <button type="submit" class="red-button"  onclick="return confirm(\'Deactivate '.$row['staffFullName'].'?\')">Deactivate</button>
                                </form>';
                        }else{
                            echo '<form action="activate_staff.php" method="post">
                                    <input type="hidden" name="mainServiceID" value="'.$row['mainServiceID'].'">
                                    <input type="hidden" name="staffID" value="'.$row['staffID'].'">
                                    <button type="submit" class="green-button" onclick="return confirm(\'Activate '.$row['staffFullName'].'?\')">Activate</button>
                                 </form>';
                        }
                      
                    echo '</td>

                    <td class="links"><a href="edit_staff.php?staffID='.$row['staffID'].'mainServiceID='.$row['mainServiceID'].'">Edit</a></td>
                    
                    </tr>';
                }
                mysqli_close($con);
                  ?>
                  <tbody>
              </table>
          </div>
        
    </body>
</html>
