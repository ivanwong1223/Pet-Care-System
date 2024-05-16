<?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['appointmentID']) && isset($_POST['feedback'])) {
            $customerID = $_SESSION["customerID"];
            $appointmentID = $_POST['appointmentID'];
            $rating = $_POST['rating'];
            $feedback = $_POST['feedback'];
            $feedbackDate = date("Y-m-d");

            include("conn.php");
            $con = mysqli_connect("localhost","root","","purrfect_care");

            $insertSql = "INSERT INTO feedback_record (customerID, appointmentID, rating, comment, feedbackDate) VALUES ('$customerID','$appointmentID','$rating','$feedback','$feedbackDate')";
            $insertResult = mysqli_query($con, $insertSql);

            if ($insertResult) {
                echo "<script>alert('Feedback Submited Successfully!');window.location.href='customer_view_appointment.php';</script>";
            } else {
                echo "Failed to submit feedback.";
            }
        } else {
            echo "Missing required form fields.";
        }
    } else {
        echo "Invalid request method.";
    }
?>
