<html lang="en">
<body>
<style>
    .error {color:red;}
</style>
<?php
$nama = $nim = $gender = "";
$nama_error = $nim_error = $gender_error = "";

if (isset($_POST['submit'])) {
    if (empty($_POST['nama'])) {
        $nama_error = "nama tidak boleh kosong";
    } else {
        $nama = $_POST['nama'];
    }
    if (empty($_POST['nim'])) {
        $nim_error = "nim tidak boleh kosong";
    } else {
        $nim = $_POST['nim'];
    }
    if (empty($_POST['gender'])) {
        $gender_error = "jenis kelamin tidak boleh kosong";
    } else {
        $gender = $_POST['gender'];
    }
    if ($nama && $nim && $gender) {
        echo "<h3>Output:</h3>";
        echo "$nama<br>$nim<br>$gender";
        exit(); 
    }
}
?>
<form action="" method="post">
        Nama: <input type="text" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>">
        <span class="error">* <?php echo $nama_error;?></span><br> 

        Nim: <input type="text" name="nim" value="<?=isset($_POST['nim']) ? $_POST['nim'] : ''?>">
        <span class="error">* <?php echo $nim_error;?></span><br>

        Jenis Kelamin: <span class="error">* <?php echo $gender_error;?></span><br>
        <input type="radio" name="gender" value="Laki-laki" <?php if (isset($_POST["gender"]) and $_POST["gender"] == "Laki-laki") echo "checked";?>>Laki-laki<br>
        <input type="radio" name="gender" value="Perempuan" <?php if (isset($_POST["gender"]) and $_POST["gender"] == "Perempuan") echo "checked";?>>Perempuan<br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
