
<!DOCTYPE html>
<html>
<head>
	<title>product</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="script.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
</head>
<body>
	<?php include 'login.php'; ?>
<div class="head">
	<header><h1>Webshop SiCas</h1></header>
</div>
	<div class="productwrap">
	<h1></h1>
	<?php
	include 'acmeconnect.php';
	$result = $mysqli->query("SELECT * FROM products WHERE id='".$_GET["id"]."'");
	while ($product = $result->fetch_assoc()){
	echo '<div class="product"><img src="'.$product['image_url'].'"id="productimage""><h3>'.$product['title'].'</h3><p> '.$product['longdescription'].'</p></div>';
	}

	?>
	<div class="buttonpos"><a href="index.php"><input type="submit" value="Terug!" class="button"></div></a>
	</div>
</body>
</html>