<?php
// array multidimensi
$hewan = [
    ["kode" => "001", 
     "nama" => "Burung", 
     "kelas" => "Amphibia", 
     "ordo" => "Anura",
     "makanan" => "Serangga",
     "gambar" => "Burung.jpg"
],

    ["kode" => "002", 
     "nama" => "Kucing",
     "kelas" => "Chondrichthyes",
     "ordo" => "Selachimorpha",
     "makanan" => "Ikan dan daging",
     "gambar" => "Kucing.jpg"
],
    ["kode" => "003", 
    "nama" => "Singa",
    "kelas" => "Mamalia",
    "ordo" => "Chondrichthyes",
    "makanan" => "daging",
    "gambar" => "singa.jpg"
 ]
 ];
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Latihan GET</title>
</head>

<body>
     <h1>Daftar Hewan</h1>
<ul>
     <?php foreach ($hewan as $hwn): ?>
          <li>
          <a 
          href="latihan2.php?nama=<?= $hwn["nama"]; ?>&kode= <?= $hwn["kode"]; ?>&
          kelas=<?= $hwn["kelas"]; ?>&ordo=<?= $hwn["ordo"]; ?>&makanan=<?= $hwn["makanan"]; ?>&gambar=<?=
          $hwn["gambar"]; ?>"><?= $hwn["nama"]; ?></a> 

          </li> <?php endforeach; ?></ul>
</body>
</html>