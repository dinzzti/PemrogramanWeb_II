<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Smartphone Samsung</title>
    <style>
        table {
            width: auto;
            border-collapse: separate;
            border-spacing: 2px; 
            border: 1px solid black;
        }
        th, td {
            border: 1px solid black;
            padding: 0px;
            text-align: left;
        }
        th {
            font-weight: bold;
            text-align: center;
            background-color: red;
            font-size: 1.5em;
            padding: 10px;
            line-height: 1;
            display: table-cell;
            width: auto;
        }
    </style>
</head>
<body>
<table>
<?php
    $daftarHP = [
        "s22" => "Samsung Galaxy S22",
        "s22plus" => "Samsung Galaxy S22+",
        "a03" => "Samsung Galaxy A03",
        "xcover5" => "Samsung Galaxy Xcover 5"
        ];
    ?>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>
        <tr>
            <td><?= $daftarHP["s22"]; ?></td>
        </tr>
        <tr>
            <td><?= $daftarHP["s22plus"]; ?></td>
        </tr>
        <tr>
            <td><?= $daftarHP["a03"]; ?></td>
        </tr>
        <tr>
            <td><?= $daftarHP["xcover5"]; ?></td>
        </tr>
    </table>
</body>
</html>