<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;

        }
    </style>
</head>
<body>

<h1>Product </h1>

<?php
$air = [
    'nama' => 'Drinking Water ',
    'size' => '500 ml',
    'harga' => '70',
];
?>

<table>
    <tr>
        <td>Nama : </td>
        <td><?php echo $air['nama']; ?></td>
    </tr>

    <tr>
        <td>Size : </td>
        <td><?php echo $air['size']; ?></td>
    </tr>

    <tr>
        <td>Harga : </td>
        <td><?php echo $air['harga']; ?> sen </td>
    </tr>
</table>
[12:57, 10/11/2021] Qas Ptss: <h1>Transaksi </h1>


<?php
$transaksi = [

    'buat' =>[
    'tarikh' => ' 01 - 10 - 2021 ',
    'perkara' => 'terima barang dari pembekal',
    'masuk' => '100',
    'keluar' => '',
    'baki' => '100',
    ],

    'buat2' =>[
        'tarikh' => ' 03 - 10 - 2021 ',
        'perkara' => 'CBR Enterprice',
        'masuk' => '',
        'keluar' => '30',
        'baki' => '70',
    ]
];
?>

<table border="5" cellspacing="4">
    <tr>
        <th>Tarikh</th>
        <th>Perkara</th>
        <th>Masuk</th>
        <th>Keluar</th>
        <th>Baki</th>

    </tr>

    <?php
    foreach($transaksi as $done) {
     ?>
     <tr>
         <td><?php echo $done['tarikh']; ?></td>
         <td><?php echo $done['perkara']; ?></td>
         <td><?php echo $done['masuk']; ?></td>
         <td><?php echo $done['keluar']; ?></td>
         <td><?php echo $done['baki']; ?></td>
    </tr>
    <?php
    }
    ?>