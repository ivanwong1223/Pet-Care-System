<?php
session_start();
include 'admin_session.php';
include("conn.php");
$sql= "UPDATE service_record SET service_status='Active' WHERE serviceID=$_POST[serviceID];";
if (mysqli_query($con, $sql)) {
    mysqli_close($con);
    echo '<script>alert("Service Activated!");window.location.href="view_edit_service.php?mainServiceID='.$_POST['mainServiceID'].'";</script>';
    }else{
        echo '<script>alert("Unable to activate service!");window.location.href="view_edit_service.php?mainServiceID='.$_POST['mainServiceID'].'";</script>';
    }


?>