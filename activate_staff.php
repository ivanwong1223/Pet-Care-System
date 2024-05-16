<?php
session_start();
include 'admin_session.php';
include("conn.php");
$sql= "UPDATE staff_record SET staff_status='Active' WHERE staffID=$_POST[staffID];";
if (mysqli_query($con, $sql)) {
    mysqli_close($con);
    echo '<script>alert("Record updated!");window.location.href="staff_list.php?mainServiceID='.$_POST['mainServiceID'].'";</script>';
    }else{
        echo '<script>alert("Unable to update record!");window.location.href="staff_list.php?mainServiceID='.$_POST['mainServiceID'].'";</script>';
    }


?>