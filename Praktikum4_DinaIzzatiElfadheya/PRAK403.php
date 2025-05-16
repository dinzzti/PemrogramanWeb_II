<!DOCTYPE html>
<html lang="id">
    <style> 
        table, tr, td, th { 
            border: solid 1px black; 
            border-collapse: collapse; 
            padding: 5px; 
        } 
        tr { 
            text-align: left; 
        }
        th {
            background-color: #d0cece;
        }
    </style> 
<body>
<?php
$mahasiswa = [
    [
        "nama" => "Ridho",
        "matkul" => [
            ["nama" => "Pemrograman I", "sks" => 2],
            ["nama" => "Praktikum Pemrograman I", "sks" => 1],
            ["nama" => "Pengantar Lingkungan Lahan Basah", "sks" => 2],
            ["nama" => "Arsitektur Komputer", "sks" => 3],
        ]
    ],
    [
        "nama" => "Ratna",
        "matkul" => [
            ["nama" => "Basis Data I", "sks" => 2],
            ["nama" => "Praktikum Basis Data I", "sks" => 1],
            ["nama" => "Kalkulus", "sks" => 3],
        ]
    ],
    [
        "nama" => "Tono",
        "matkul" => [
            ["nama" => "Rekayasa Perangkat Lunak", "sks" => 3],
            ["nama" => "Analisis dan Perancangan Sistem", "sks" => 3],
            ["nama" => "Komputasi Awan", "sks" => 3],
            ["nama" => "Kecerdasan Bisnis", "sks" => 3],
        ]
    ]
];
for ($i = 0; $i < count($mahasiswa); $i++) {
    $jmlSks = 0;
    for ($j = 0; $j < count($mahasiswa[$i]["matkul"]); $j++) {
        $jmlSks += $mahasiswa[$i]["matkul"][$j]["sks"];
    }
    $mahasiswa[$i]["jmlSks"] = $jmlSks;
    $mahasiswa[$i]["keterangan"] = ($jmlSks < 7) ? "Revisi KRS" : "Tidak Revisi";
}
?>
<table style="width:700px;">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Mata Kuliah diambil</th>
        <th>SKS</th>
        <th>Total SKS</th>
        <th>Keterangan</th>
    </tr>
<?php 
$no = 1;
for ($i = 0; $i < count($mahasiswa); $i++) {
    for ($j = 0; $j < count($mahasiswa[$i]["matkul"]); $j++) {
        echo "<tr>";
        if ($j == 0) {
            echo "<td>{$no}</td>";
            echo "<td>{$mahasiswa[$i]['nama']}</td>";
            echo "<td>{$mahasiswa[$i]['matkul'][$j]['nama']}</td>";
            echo "<td>{$mahasiswa[$i]['matkul'][$j]['sks']}</td>";
            echo "<td>{$mahasiswa[$i]['jmlSks']}</td>";
            
            if ($mahasiswa[$i]["keterangan"] == "Revisi KRS") {
                echo "<td style='background-color:#ea3322'>{$mahasiswa[$i]['keterangan']}</td>";
            } else {
                echo "<td style='background-color:#4ead5b'>{$mahasiswa[$i]['keterangan']}</td>";
            }
            $no++;
        } else {
            echo "<td></td>";
            echo "<td></td>";
            echo "<td>{$mahasiswa[$i]['matkul'][$j]['nama']}</td>";
            echo "<td>{$mahasiswa[$i]['matkul'][$j]['sks']}</td>";
            echo "<td></td>";
            echo "<td></td>";
        }
        echo "</tr>";
    }
}
?>
</table>
</body>
</html>
