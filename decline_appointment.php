<?php
    session_start();
    if(isset($_SESSION["staffID"])){
        include("conn.php");
        $id = intval($_GET["appointmentID"]);
        $sql = "UPDATE appointment_record SET status='Cancelled' WHERE appointmentID=".$id;
        if (mysqli_query($con, $sql)) {
            mysqli_close($con);
            echo '<script>alert("Appointment '.$id.' cancelled.");window.location.href="pet_manage_appointment.php";</script>';
        }
    }else {
        echo "<script>alert('Please Login!');window.location.href='staffLogin.php';</script>";
    }
?>