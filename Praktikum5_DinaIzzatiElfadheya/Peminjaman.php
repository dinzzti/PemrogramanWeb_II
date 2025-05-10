<?php
require("Model.php");
require("Style.php");
$peminjaman = getData("peminjaman");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Peminjaman</title>
</head>

<body>
    <div class="container1">
        <h1 class="card-panel" style="display: flex; justify-content: center; align-items: center; background-color: rgb(165, 59, 100); color: #FFF; padding: 12px 24px; border-radius: 8px; font-size: 50px; font-weight: bold; margin-bottom: 20px;"> DAFTAR PEMINJAMAN</h1>
        <table>
            <tr class="card-panel" style="background-color:rgb(240, 147, 186)">
                <th>No.</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Aksi</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($peminjaman as $row) : 
                $tgl_pinjam = date_create($row["tgl_pinjam"]);
                $tgl_kembali = date_create($row["tgl_kembali"]);
            ?>
                <tr class="card-panel red lighten-4">
                    <td><?= $i; ?></td>
                    <td><?= date_format($tgl_pinjam, 'd-m-Y') ?></td>
                    <td><?= date_format($tgl_kembali, 'd-m-Y') ?></td>
                    <td>
                        <div style='display: flex; gap: 8px;'>
                            <a href='FormPeminjaman.php?id_peminjaman=<?= $row["id_peminjaman"] ?>' class='btn-custom btn-green btn-small'>
                                <i class='material-icons left'>edit</i>Edit
                            </a>
                            <a href='HapusDataPeminjaman.php?id_peminjaman=<?= $row["id_peminjaman"] ?>' class='btn-custom btn-red btn-small' onclick='return confirm("Apakah yakin data akan dihapus?")'>
                                <i class='material-icons left'>delete</i>Delete
                            </a>
                        </div>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach ?>
        </table>

        <div class="buttonadd">
            <div style="display: flex; justify-content: center; gap: 12px; margin-top: 20px;">
                <a href="FormPeminjaman.php" class="btn-custom btn-blue btn-small">
                    <i class="material-icons left">add</i>Add Data Peminjaman
                </a>
                <a href="indeks.php" class="btn-custom btn-small" style="background-color: #FFF8C1; color: #FFB300;">
                    <i class="material-icons left">home</i>Kembali ke Dashboard
                </a>
            </div>
        </div>
    </div>
</body>
</html>
