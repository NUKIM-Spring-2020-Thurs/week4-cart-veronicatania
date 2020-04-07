<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cart</title>
	<style>
		body{
			font-family: sans-serif;
			background-color: #33e6ff;
		}
		.back{
			color: inherit;
			text-decoration: none;
			}
		.back:hover{
			background-color: #e3ff33;
			color: black;
		}
	</style>
</head>
<body>
	<h2>your shopping cart</h2>
	<table border="0">
		<tr bgcolor="#e3ff33">
			<td>number</td>
			<td>product name</td>
			<td>price</td>
			<td>quantity</td>
		</tr>

<?php
$flag = false;  $total = 0;
while ( list($arr, $value) = each($_COOKIE) ) {
  if ( isset($_COOKIE[$arr]) && is_array($_COOKIE[$arr]) ) {
     if ($flag) {   
        $flag = false;
        $color="#FF99CC";
     } else {
        $flag = true;
        $color="#99FFC";
     }
     echo "<tr bgcolor='".$color."'><td>";
     echo "<a href='delete.php?Id=".$arr."'>";
     echo "delete</a></td>";
     $price = 0;
     $quantity = 0;
     while ( list($name, $value)=each($_COOKIE[$arr])) {
        echo "<td>" . $value . "</td>";
        if ($name == "Price")  $price = $value;
        if ($name == "Quantity") $quantity = $value;
     }
     $total += $price * $quantity;
     echo "</tr>";
  }
}
if ($total != 0) { 
   echo "<tr bgcolor=#FFFFB9><td colspan=5 align=right>";
   echo "total = NT$".$total."元</td></tr>";
}
?>
</table></br>
<a href="catalog.php" class="back">back to catalog</a>&nbsp;&nbsp;<a href="cart.php" class="back">view shopping cart</a>&nbsp;&nbsp;
<a href="logout.php" class="back">logout</a>
</body>
</html>