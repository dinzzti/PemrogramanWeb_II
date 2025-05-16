<html>
    <title>Angka dan Gambar</title>
    <style>
        img {
            width: 15px;
            height: 15px;
        }
    </style>

<form action="" method="post">
    Batas Bawah: <input type="text" name="bawah"> <br>
    Batas Atas: <input type="text" name="atas"> <br>
    <input type="submit" name="cetak" value="Cetak">
</form>

<?php
if (isset($_POST["cetak"])) :
    $bawah = $_POST["bawah"];
    $atas = $_POST["atas"];
    do {
        if ((($bawah + 7) % 5) == 0) {
            echo "<img src='Bintang.png'>";
        } else {
            echo $bawah;
        }
        echo " ";
        $bawah++;
    } while ($bawah <= $atas);
endif;
?>
</html>
