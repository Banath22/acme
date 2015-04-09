<?php
	include 'acmeconnect.php';

	$id = $_GET['id'];

	$sql = "SELECT image_url FROM products WHERE id=$id";
	$result = mysql_query("$sql");
	$row = mysql_fetch_assoc($result);
	mysql_close($link);

	header("Content-type: image/jpeg");
	echo $row['image_url'];
?>