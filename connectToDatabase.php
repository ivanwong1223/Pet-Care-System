<?php

	$con = mysqli_connect("localhost","root","","purrfect_care");

	if (mysqli_connect_errno())
	{
		echo "Failed to connect to DB. Error number: ".mysqli_connect_errno();
	}
	
	// else 
	// {
	// 	echo "Database is successfully connected";
	// }
	
?>