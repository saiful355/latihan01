<?php
$mahasiswa = ["SAIFUL BAHRI","19510029", "S1-SISTEM IMFORMASI", "bahrisaiful40@gmail.com"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"
	content="width=device-width, initial-scale=1.0">
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<ul>
		<?php foreach ($mahasiswa as $mhs) : ?>
			<li>
				<?php echo $mhs; ?>
			</li>
		<?php endforeach; ?>
	</ul>
</body>
</html>