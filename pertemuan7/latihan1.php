<?php
// $_GET
$mahasiswa = [
    [
    "nama" => "Noviani Saputri",
    "nrp" => "009876511",
    "email" => "saputrinovi@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "nopi.jpg" 
    ],
    [
        "nama" => "Caca",
        "nrp" => "009876739",
        "email" => "caca@gmail.com",
        "jurusan" => "Farmasi",
        "gambar" => "caca.jpg"
    ]
 ];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
      <title>GET</title>
 </head>
 <body>
     <h1>Daftar Mahasiswa</h1>
<ul>
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
        <?php endforeach; ?>
        </ul>
      
 </body>
 </html>
