<html>
<form method="post">
    Nilai : <input type="number" name="nilai" value="<?php if (isset($_POST['nilai'])) echo $_POST['nilai']; ?>"><br>
    <input type="submit" name="konversi" value="Konversi">
</form>

<?php
if (isset($_POST['konversi'])) {
    $angka = $_POST['nilai'];

    if (!is_numeric($angka)) {
        echo "<h3 style='color:red;'>Masukkan harus berupa angka.</h3>";
    } else {
        $hasil = "";

        if ($angka == 0) {
            $hasil = "Nol";
        } elseif ($angka > 0 && $angka < 10) {
            $hasil = "Satuan";
        } elseif ($angka >= 10 && $angka < 20) {
            $hasil = "Belasan";
        } elseif ($angka >= 20 && $angka < 100) {
            $hasil = "Puluhan";
        } elseif ($angka >= 100 && $angka < 1000) {
            $hasil = "Ratusan";
        } else {
            $hasil = "Anda Menginput Melebihi Limit Bilangan";
        }
        echo "<h2>Hasil: $hasil</h2>";
    }
}
?>
</body>
</html>
