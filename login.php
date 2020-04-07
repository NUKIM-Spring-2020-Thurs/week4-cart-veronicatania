<html>
<h2>User Login</h2>

<?php
if(isset($_COOKIE["ID"])){
	$user=$_COOKIE["ID"];
	echo "Welcome Guys!".$_COOKIE["ID"];
	//setcookie("ID","",time()-3600);
}else{
	echo "Welcome friend";
}



?>




<form action="check.php" method="post">

Your username :<input type="text" name="id" value="<?php $_COOKIE["ID"]?>" required><br/>
Your password :<input type="password" name="password" required><br/>
<input type="submit" name="submit">

</form>

</html>