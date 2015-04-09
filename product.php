
<!DOCTYPE html>
<html>
<head>
	<title>product</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="script.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="wrapper">
	<h1></h1>
	<?php
	include 'acmeconnect.php';
	$result = $mysqli->query("SELECT * FROM products WHERE id='".$_GET["id"]."'");
	while ($product = $result->fetch_assoc()){
	echo '<img src="'.$product['image_url'].'"id="productimage"">';
	}
	?>
	</div>
</body>
</html>