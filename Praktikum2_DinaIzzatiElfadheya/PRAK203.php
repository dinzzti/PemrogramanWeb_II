<html>
<form method="post">
    Nilai: <input type="number" name="nilai" value="<?php echo $_POST['nilai'] ?? ''; ?>"><br><br>

    Dari: <br>
    <?php $suhu = ['C' => 'Celcius', 'F' => 'Fahrenheit', 'Re' => 'Rheamur', 'K' => 'Kelvin']; ?>
    <?php foreach ($suhu as $key => $value): ?>
        <input type="radio" name="dari" value="<?php echo $key; ?>" <?php echo ($_POST['dari'] ?? '') == $key ? 'checked' : ''; ?>> <?php echo $value; ?><br>
    <?php endforeach; ?><br>

    Ke: <br>
    <?php foreach ($suhu as $key => $value): ?>
        <input type="radio" name="ke" value="<?php echo $key; ?>" <?php echo ($_POST['ke'] ?? '') == $key ? 'checked' : ''; ?>> <?php echo $value; ?><br>
    <?php endforeach; ?><br>
    
    <input type="submit" name="konversi" value="Konversi">
</form>

<?php
if (isset($_POST['konversi'])) {
    if (empty($_POST['nilai']) || !isset($_POST['dari']) || !isset($_POST['ke'])) {
        echo "<p style='color: red;'>Semua kolom harus diisi dengan benar!</p>";
    } else {
        $nilai = floatval($_POST['nilai']);
        $dari = $_POST['dari'];
        $ke = $_POST['ke'];

        switch ($dari) {
            case "C": $celcius = $nilai; break;
            case "F": $celcius = ($nilai - 32) * 5 / 9; break;
            case "Re": $celcius = $nilai * 5 / 4; break;
            case "K": $celcius = $nilai - 273.15; break;
            default: $celcius = 0; break;
        }
        switch ($ke) {
            case "C": $hasil = $celcius; $satuan = "°C"; break;
            case "F": $hasil = $celcius * 9 / 5 + 32; $satuan = "°F"; break;
            case "Re": $hasil = $celcius * 4 / 5; $satuan = "°Re"; break;
            case "K": $hasil = $celcius + 273.15; $satuan = "K"; break;
            default: $hasil = 0; $satuan = ""; break;
        }
        echo "<h3>Hasil Konversi: " . round($hasil, 1) . " $satuan</h3>";
    }
}
?>
</html>
