<?php
    $con = mysqli_connect("localhost","root","","purrfect_care");
    if($con === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>