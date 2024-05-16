<?php
    session_start();
    if(isset($_GET['appointmentID'])) {
        $con = mysqli_connect("localhost","root","","purrfect_care");
        $appointmentID = $_GET['appointmentID'];

        $updateSql = "UPDATE appointment_record SET status = 'Request Cancel' WHERE appointmentID = '$appointmentID'";
        $updateResult = mysqli_query($con, $updateSql);
        mysqli_close($con);

        if($updateResult) {
            echo "<script>alert('Request successful. Please anticipated confirmation by our Providers');window.location.href='customer_view_appointment.php';</script>";
        } else {
            echo "<script>alert('Failed to update status.')</script>";
        }
    }
?>