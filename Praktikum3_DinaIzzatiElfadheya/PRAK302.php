<html> 
    <style> 
        .alamat{ 
            width: 20px; 
            height: 20px; 
        } 
    </style> 
<form action="" method="post"> 
    Tinggi : <input type="text" name="jumlah"> <br> 
    Alamat Gambar : <input type="text" name="alamat"> 
<br> 
    <input type="submit" name="submit" value="Cetak"> 
</form> 
<?php 
if(isset($_POST["submit"])) : 
    $nilai = $_POST["jumlah"]; 
    $alamat = $_POST["alamat"]; 
    $awal = 1; 
    while ($awal <= $nilai) { 
        $awal2 = 1; 
        while ($awal2 < $awal) { 
            echo "<img src='' width='20px' style='opacity: 0'>"; 
            $awal2++; 
        } 
        $awal3 = $nilai; 
        while ($awal3 >= $awal) { 
                echo '<img src="'.$alamat.'" class="alamat">'; 
            $awal3--; 
        } 
        echo "<br>"; 
        $awal++; 
    } 
  endif; 
?> 
</html> 
