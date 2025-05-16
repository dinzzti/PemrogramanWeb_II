<?php
require_once("Model.php");

$id_buku = isset($_GET["id_buku"]) ? $_GET["id_buku"] : '';

if (hapusDataBuku($id_buku) > 0) {
    echo "<script>
            alert('Data berhasil dihapus');
            window.location.href = 'Buku.php';
          </script>";
} else {
    echo "<script>
            alert('Data gagal dihapus');
            window.location.href = 'Buku.php';
          </script>";
}
?>
