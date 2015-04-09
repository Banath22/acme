<?php
include 'acmeconnect.php';
if(isset($_GET['id']))
{
	$id = mysql_real_escape_string($_GET['id']);
	$products = $mysqli->query("SELECT * FROM `products` WHERE `id` = '$id'");
	while($row = mysql_fetch_assoc($products))
	{		$imageData = $row["image"];
	}
	header("content-type: image/jpeg");
	echo "<img src='img/tv1/" . $imageData . "'>";

}
else
{
	echo "error";	
}

?>