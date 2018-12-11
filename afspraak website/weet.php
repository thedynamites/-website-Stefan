<!DOCTYPE html>
<html>
<head>
	<title>Project opdracht</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br>
	<div class="a">
			<h2>Titel</h2>
			<h3>Naam: tahaa</h3>
	</div>
<br>
	<div class="b">
		<h1>Tabel met afspraken:</h1>
			<?php include 'afspraak.php'; ?>
	</div>
<br>
	<h2>Afspraak maken:</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	  Datum:<INPUT TYPE="date" NAME="Datum">
	  <br><br>
	  Naam:<INPUT TYPE="text" NAME="Naam">
	  <br><br>
	  Afspraak: <input type="text" name="Afspraak">
	  <br><br>
	  <input type="submit" name="submit" value="Submit">
	</form>
</div>
</form>
	</div>
<br>
	<div class="d">
		<h1>Contact</h1>
			<a href="mailto:taha@hotmail.com">Vragen stellen via de mail</a> <br>
			<a href="tel:+31 6 36 00 21 43">Telefonische vragen stellen</a>
	</div>


</body>
</html>
