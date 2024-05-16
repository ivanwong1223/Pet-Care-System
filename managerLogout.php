<?php
session_start();
echo "<script>alert('Logout Successfully');window.location.href='role-selection-page.html';</script>";
session_destroy();
?>