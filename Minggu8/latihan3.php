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
    "gambar" => "gajah.jpg"

];
?>
<!DOCTYPE html>
<html_lang="en">

<head>
    <meta charset= "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Data Hewan</title>
</head>

<body>
    <h1>Katalog Data Hewan</h1>
    <?php foreach($hewan as $hwn) : ?>
    <ul>
        <li>
            <img src= "img/<?= $hwn["gambar"] ;?>">
        </li>
        <li>Kode Hewan : <?= $hwn["kode"]; ?></li>
        <li>Nama Hewan : <?= $hwn["nama"]; ?></li>
        <li>Kelas      : <?= $hwn["kelas"]; ?></li>
        <li>Ordo       : <?= $hwn["ordo"]; ?></li>
        <li>Makanan    : <?= $hwn["makanan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>


</html>