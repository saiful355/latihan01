<?php
echo date("l", strtotime('30 August 2030'));
?> 
function salam($waktu, $nama)
{
	return "Selamat $waktu, $nama!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta  name="viewport"
	content="with=device-width, initial-scale=1.0">
	<title>Latihan Function</title>
</head>
<body>
	<h1><?=salam("Pagi", "Saiful") ?></h1>
</body>
</!DOCTYPE html>
<html> 