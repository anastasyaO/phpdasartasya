<?php 
// $mahasiswa = [
//  ["anastasya", "0403050023", "anastasyaokvitasari@gnail.com", "Rekayasa Perangkat Lunak"],
//  ["imelda", "0403050023", "imeldajennyangelika@gnail.com", "Rekayasa Perangkat Lunak"],
// ];

//Array associative
//key-nya adalah string yang kita buat sendiri
//definisinya sama seperti array numerik, kecuali

$mahasiswa = [
    [
    "nama" => "candra",
    "nrp" => "0403050023",
    "email" => "candraadikurniawan@gmail.com",
    "jurusan" => "TKR",
    "gambar" => "DIA.jpg"
    ],
    [
        "nama" => "robert",
        "nrp" => "0403050555",
        "email" => "robertadicahyono@gmail.com",
        "jurusan" => "TKR",
        "gambar" => "DIA.jpg"
        ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
   <h1>Data Mahasiswa</h1>

   <?php foreach($mahasiswa as $mhs ) : ?>
   
   <ul>
    <li>
        <img src="img/jpg">
    </li>
    <li>Nama :<?= $mhs["nama"]; ?></li>
    <li>NRP :<?= $mhs["nrp"]; ?></li>
    <li>Email:<?= $mhs["email"]; ?></li>
    <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
   </ul>
   <?php endforeach; ?>

   
</body>
</html>