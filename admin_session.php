<?php
if(isset($_SESSION["staffID"])){

    #use to check is it manager, if wrong then return logout.php#
    if($_SESSION["staffType"] !="3") {
        echo "<script>alert('You are not the admin!');window.location.href='role-selection-page.html';</script>";
    }

}
#check is user login or not#
else {
    echo "Wrong Session";
    echo "<script>alert('Please go back and login!');window.location.href='role-selection-page.html';</script>";
}
?>
