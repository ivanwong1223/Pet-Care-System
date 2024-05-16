<?php
session_start();
include 'admin_session.php';
include("conn.php");
$sql= "UPDATE customer_record SET customer_status='Active' WHERE customerID=$_POST[customerID];";
if (mysqli_query($con, $sql)) {
    mysqli_close($con);
    echo '<script>alert("Record updated!");window.location.href="admin_manage_customer.php";</script>';
    }else{
        echo '<script>alert("Unable to update record!");window.location.href="admin_manage_customer.php";</script>';
    }


?>