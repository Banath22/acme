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
<!DOCTYPE html>
<html>
<head>
	<title>Sicas webshop!</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="script.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="head">
	<header><h1>Webshop SiCas</h1></header>
</div>
	<div class="wrapper">
				<!-- tv 1 -->
				<!-- tv2 -->
		<img src="getimage.php?id=1">

				<!-- tv3 -->
		<img src="img/tv3/p1.png">
				
				<!-- tv4 -->
		<img src="img/tv4/p1.png">
				
				<!-- tv5 -->
		<img src="img/tv5/p1.png">
	
				<!-- tv6 -->
		<img src="img/tv6/p1.png">

				<!-- tv7 -->
		<img src="img/tv7/01.png">

				<!-- tv8  -->
		<img src="img/tv8/01.png">

				<!-- tv9 -->
		<img src="img/tv9/01.png">

				<!-- tv10-->
		<img src="img/tv10/01.png">

				<!-- tv11 -->
		<img src="img/tv11/01.png">

				<!-- tv12--> 
		<img src="img/tv12/01.png">


	</div>
</body>
</html>

