<?php
session_start();

if(isset($_SESSION["login"])){
	echo "Login failed!<br/>";
}else{
	echo "Unable to login<br/>";
	echo "<a href='login.php'>Back to login page</a>";
}

?>