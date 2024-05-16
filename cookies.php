<?php
$cookie_name = "PurrfectCareCookie";
$cookie_value = "123";
//setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
// 86400 seconds = 1 day
//The cookie will expire after 30 days
//The "/" means that the cookie is available in entire website (otherwise, select the directory you prefer).

//unset cookie
 if (isset($_COOKIE[$cookie_name])) {
	unset($_COOKIE[$cookie_name]); 
	setcookie($cookie_name, null, -1, '/'); 
	return true;
} else {
	return false;
} 
 

?>
<html>
<body>
	<?php
 	if(!isset($_COOKIE[$cookie_name])) {
		echo "Cookie named '" . $cookie_name . "' is not set!";
	} else {
		echo "Cookie '" . $cookie_name . "' is set!<br>";
		echo "Value is: " . $_COOKIE[$cookie_name];
	}	
	?>
</body>