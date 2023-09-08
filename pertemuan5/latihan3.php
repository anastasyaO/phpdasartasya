<?php
$mahasiswa =[ 
    ["anastasya", "043040023", "Rekayasa Perangkat Lunak", "anastasyaokvitasarii@gmail.com"],
    ["imelda", "043040032", "Rekayasa Perangkat Lunak", "imeldajennyangelika@gmail.com"],
    ["intan", "043040556", "Rekayasa Perangkat Lunak", "intannuraini@gmail.com"],


];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
<ul>
    <li>Nama :<?= $mhs[1]; ?></li>
    <li>NRP :<?= $mhs[2]; ?></li>
    <li>Jurusan :<?= $mhs[3]; ?></li>
    <li>Email :<?= $mhs[0]; ?></li>
</ul>
<?php endforeach; ?>

    </body>
    </html>