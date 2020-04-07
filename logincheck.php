<?php
ob_start();
session_strt();
$uid="veronica"
$upwd="20000820";
$id=$_POST["id"];
$pwd=$_POST["pwd"];

if($uid==$id && $upwd==$pwd){
	$_SESSION["login"]="S";
	$_session["ID"]=$id;
	header('Location:success.php');
}else{
	$_SESSION["login"]
	header('Location:fail.php');
}

?>