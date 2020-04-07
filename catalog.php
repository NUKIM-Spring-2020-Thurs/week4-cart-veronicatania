<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>shopping catalog</title>
	<style>
		body{
			font-family: sans-serif;
			background-color: #33e6ff;
		}
		a{
			color: inherit;
			text-decoration: none;
		}
		a:hover{
			background-color: #e3ff33;
			color: black;
		}
	</style>
	<?php
		session_start();
		if(isset($_POST["Item"])){
			$_SESSION["Quantity"] = $_POST["Quantity"];
			$id = $_POST["Item"];
			$_SESSION["ID"] = $id;
			switch (strtoupper($id)) {
				case "1":
					$_SESSION["Name"]="mango juice";
					$_SESSION["Price"]="90";
					break;
				case "2":
					$_SESSION["Name"]="melon juice";
					$_SESSION["Price"]="40";
					break;
				case "3":
					$_SESSION["Name"]="grape juice";
					$_SESSION["Price"]="80";
					break;
			}
			header("Location:addcart.php");
		}
	?>
</head>

<body>
	<h2>Product Catalog</h2>
	<form action="catalog.php" method="POST">
	select item：<select name="Item">
			 	<option value="1">mango juice-$90/glass</option>
			 	<option value="2">melon juice-$40/glass</option>
			 	<option value="3">grape juice-$80/glass</option>
		     </select> &nbsp;
	<input type="text" size="5" name="Quantity" value="1"></br></br>
	<input type="submit" value="buy">
	</form></br>
	<a href="catalog.php">shopping catalog</a>&nbsp;&nbsp;<a href="cart.php">view shopping cart</a>&nbsp;&nbsp;
	<a href="logout.php">logout		x</a>
</body>
</html>