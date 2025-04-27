<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Cetak Matriks</title>
</head>
<body>
    <form action="" method="post">
        <label>Panjang : </label>
        <input type="text" name="panjang" required><br>

        <label>Lebar : </label>
        <input type="text" name="lebar" required><br>

        <label>Nilai : </label>
        <input type="text" name="nilai" required><br>

        <input type="submit" value="Cetak">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $panjang = (int)$_POST['panjang'];
        $lebar = (int)$_POST['lebar'];
        $nilai = explode(" ", $_POST['nilai']);
        $x = 0;

        if ($panjang * $lebar == count($nilai)) {
            echo "<table border='1' cellpadding='10' cellspacing='0'>";
            for ($i = 0; $i < $panjang; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $lebar; $j++) {
                    echo "<td>".$nilai[$x]."</td>";
                    $x++;
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "Panjang nilai tidak sesuai dengan ukuran matriks";
        }
    }
    ?>
</body>
</html>
