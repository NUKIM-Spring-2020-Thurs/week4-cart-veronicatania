<?php
session_start();

if(isset($_SESSION["login"])){
	echo "Login Success!<br><br>";

	$date = strtotime("+7 days",time());
	$uName=$_SESSION["ID"];

	setcookie("ID",$uName,$date);

echo "<a href='logout.php'>Logout系統</a>";

}else{
	echo "Unable to login<br/>";
	echo "<a href='login.php'>Back to login page</a>";
}


?>