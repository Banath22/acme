<?php include 'acmeconnect.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sicas webshop!</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="script.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
</head>
<body>
	<?php include 'login.php'; ?>
<div class="head">
	<header>
		<h1>Webshop SiCas</h1>
	</header>
</div>
	<div class="wrapper">

		<?php 
		for ($i=3; $i <= 14 ; $i++) { 
			echo "<a href='product.php?id=$i'><img src='img/tv$i/p1.png'></a>";
		}?>
		

	</div>
</body>
</html>

