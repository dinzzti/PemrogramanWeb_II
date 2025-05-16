<?php
require("Model.php");
require("Style.php");
$buku = getData("buku");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Buku</title>
</head>

<body>
    <div class="container1">
        <h1 class="card-panel" style="display: flex; justify-content: center; align-items: center; background-color: rgb(50, 100, 71); color: #FFF; padding: 12px 24px; border-radius: 8px; font-size: 50px; font-weight: bold; margin-bottom: 20px;"> DAFTAR BUKU</h1> 
        <table>
            <tr class="card-panel" style="background-color:rgb(72, 153, 89)">
                <th>No.</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($buku as $row) : ?>
                <tr class="card-panel green lighten-4">
                    <td><?= $i; ?></td>
                    <td><?= $row["judul_buku"] ?></td>
                    <td><?= $row["penulis"] ?></td>
                    <td><?= $row["penerbit"] ?></td>
                    <td><?= $row["tahun_terbit"] ?></td>
                    <td>
                        <div style='display: flex; gap: 8px;'>
                            <a href='FormBuku.php?id_buku=<?= $row["id_buku"] ?>' class='btn-custom btn-green btn-small'>
                                <i class='material-icons left'>edit</i>Edit
                            </a>
                            <a href='HapusDataBuku.php?id_buku=<?= $row["id_buku"] ?>' class='btn-custom btn-red btn-small' onclick='return confirm("Apakah yakin data akan dihapus?")'>
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
                <a href="FormBuku.php" class="btn-custom btn-blue btn-small">
                    <i class="material-icons left">add</i>Add Data Member
                </a>
                <a href="indeks.php" class="btn-custom btn-small" style="background-color: #FFF8C1; color: #FFB300;">
                    <i class="material-icons left">home</i>Kembali ke Dashboard
                </a>
            </div>
        </div>
    </div>
</body>
</html>
