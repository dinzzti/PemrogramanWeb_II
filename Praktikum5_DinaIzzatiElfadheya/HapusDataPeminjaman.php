<?php
require_once("Model.php");

$id_peminjaman = isset($_GET["id_peminjaman"]) ? $_GET["id_peminjaman"] : '';

if (hapusDataPeminjaman($id_peminjaman) > 0) {
    echo "<script>
            alert('Data berhasil dihapus');
            window.location.href = 'Peminjaman.php';
          </script>";
} else {
    echo "<script>
            alert('Data gagal dihapus');
            window.location.href = 'Peminjaman.php';
          </script>";
}
?>
