<html>
    <title>Jumlah Bintang</title>
    <style>
        img {
            width: 80px;
            height: 80px;
        }
    </style>
<?php
$bintang = 0;
if (isset($_POST['bintang'])) {
    $bintang = $_POST['bintang'];
}

if (isset($_POST['tambah'])) {
    $bintang++;
} elseif (isset($_POST['kurang'])) {
    $bintang--;
}
?>

<?php if ($bintang == 0) : ?>
    <form action="" method="post">
        <label>Jumlah bintang</label>
        <input type="text" name="bintang"><br>
        <input type="submit" name="submit" value="Submit"><br><br>
    </form>
<?php endif; ?>

<?php if ($bintang != 0) : ?>
    <p>Jumlah bintang <?= $bintang; ?></p><br><br>
    <?php
    for ($i = 0; $i < $bintang; $i++) {
        echo "<img src='Bintang.png'>";
    }
    ?>
    <form action="" method="post">
        <input type="hidden" name="bintang" value="<?= $bintang; ?>">
        <button type="submit" name="tambah">Tambah</button>
        <button type="submit" name="kurang">Kurang</button>
    </form>
<?php 
  endif; ?>
</html>
