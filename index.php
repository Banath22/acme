
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
<div class="head">
	<header><h1>Webshop SiCas</h1></header>
</div>
	<div class="wrapper">
				<!-- tv 1 -->
		<?php 
		for ($i=1; $i <= 12 ; $i++) { 
			echo "<a href='product.php?id=$i'><img src='img/tv$i/p1.png'></a>";
		}?>
		

	</div>
</body>
</html>

