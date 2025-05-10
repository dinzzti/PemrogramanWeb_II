<?php
require_once("Model.php");

$id_member = isset($_GET["id_member"]) ? $_GET["id_member"] : '';

if (hapusDataMember($id_member) > 0) {
    echo "<script>
            alert('Data berhasil dihapus');
            window.location.href = 'Member.php';
          </script>";
} else {
    echo "<script>
            alert('Data gagal dihapus');
            window.location.href = 'Member.php';
          </script>";
}
?>
