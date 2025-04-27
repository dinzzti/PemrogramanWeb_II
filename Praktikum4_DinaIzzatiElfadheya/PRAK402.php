<!DOCTYPE html>
<html lang="id">
<style> 
        table{ 
            border-collapse: collapse; 
        } 
        td{ 
            border: 1px solid; 
            padding: 5px; 
        } 
        th{ 
            border: 1px solid; 
            background-color: #D3D3D3; 
            padding: 10px; 
        } 
    </style> 
<body>
    <?php
    $mahasiswa = [
        [
            "nama" => "Andi",
            "nim" => "2101001",
            "uts" => 87,
            "uas" => 65
        ],
        [
            "nama" => "Budi",
            "nim" => "2101002",
            "uts" => 76,
            "uas" => 79
        ],
        [
            "nama" => "Tono",
            "nim" => "2101003",
            "uts" => 50,
            "uas" => 41
        ],
        [
            "nama" => "Jessica",
            "nim" => "2101004",
            "uts" => 60,
            "uas" => 75
        ]
    ];
    foreach ($mahasiswa as $key => $mhs) {
        $nilai_akhir = (0.4 * $mhs["uts"]) + (0.6 * $mhs["uas"]);
        $mahasiswa[$key]["nilai_akhir"] = round($nilai_akhir, 1); // dibulatkan 1 angka di belakang koma

        if ($nilai_akhir >= 80) {
            $huruf = "A";
        } elseif ($nilai_akhir >= 70) {
            $huruf = "B";
        } elseif ($nilai_akhir >= 60) {
            $huruf = "C";
        } elseif ($nilai_akhir >= 50) {
            $huruf = "D";
        } else {
            $huruf = "E";
        }
        $mahasiswa[$key]["huruf"] = $huruf;
    }

    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Huruf</th>
          </tr>";

    foreach ($mahasiswa as $mhs) {
        echo "<tr>";
        echo "<td>{$mhs['nama']}</td>";
        echo "<td>{$mhs['nim']}</td>";
        echo "<td>{$mhs['uts']}</td>";
        echo "<td>{$mhs['uas']}</td>";
        echo "<td>{$mhs['nilai_akhir']}</td>";
        echo "<td>{$mhs['huruf']}</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>
