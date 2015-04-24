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
		<form>
			<tbody>
				<table class="tablepos">
				<tr><td>Uw voor en achternaam</td><td><input type="text" name="naam" placeholder="Uw volledige naam hier"></td></tr>
				<tr><td>Uw eigen e-mail</td><td><input type="text" name="mail" placeholder="Uw mail hier"></td></tr>
				<tr><td colspan="2"><hr></td></tr>
				<tr><td colspan="2"><textarea placeholder="Uw bericht hier"></textarea></td></tr>
				<tr><td colspan="2"><input class="contsubmit" type="submit" value="Verstuur"></td></tr>
				</table>
			</tbody>
		</form>
		
	<div class="buttonpos"><a href="index.php"><input type="submit" value="Terug naar home" class="button"></div></a>

	</div>
</body>
</html>