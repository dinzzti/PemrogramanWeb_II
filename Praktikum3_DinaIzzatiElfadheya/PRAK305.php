<html>
<form action="" method="post">
    <input type="text" name="masukan">
    <input type="submit" name="kalimat" value="Submit">
</form>

<?php 
if (isset($_POST['kalimat'])): 
    $masukan = $_POST["masukan"]; 
    $pemisah = str_split($masukan); 
    $hasil = "";

    for ($i = 1; $i <= count($pemisah); $i++) { 
        for ($j = 1; $j <= count($pemisah); $j++) { 
            if ($j == 1) { 
                $huruf = strtoupper($pemisah[$i - 1]); 
            } else { 
                $huruf = strtolower($pemisah[$i - 1]); 
            }       
            $hasil .= $huruf;  
        } 
    }

    echo "<p><strong>Input:</strong> <br> $masukan</p>";
    echo "<p><strong>Output:</strong> <br> $hasil</p>";
endif; 
?>
</html>
