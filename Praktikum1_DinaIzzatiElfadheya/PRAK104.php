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
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>
        <?php 
            $daftarHP = ["Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5"];
            foreach ($daftarHP as $hp) { 
                echo "<tr><td>$hp</td></tr>";
            } 
        ?>
    </table>
</body>
</html>
