<?php
    session_start();
    if(isset($_SESSION["staffID"])){
        include("conn.php");
        $sql = "UPDATE appointment_record SET 
        appointmentID='$_POST[appointmentID]', 
        serviceID='$_POST[serviceID]', 
        customerID='$_POST[customerID]', 
        appointmentDate='$_POST[appointmentDate]', 
        appointmentTime='$_POST[appointmentTime]',
        status='$_POST[status]'
        WHERE appointmentID=$_POST[appointmentID];";

        if (mysqli_query($con, $sql)) {
        mysqli_close($con);
        echo '<script>alert("Record updated!");window.location.href="provider_view_appointment.php";</script>';
        }else{
            echo '<script>alert("Invalid Input!");window.location.href="edit_customerappointment.php";</script>';
        }
    }else{
        echo "<script>alert('Please Login!');window.location.href='TESTLOGIN.php';</script>"; //Here change the file link to where
    }
?>