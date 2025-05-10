<?php
require("Model.php");
require("Style.php");
$member = getData("member");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Member</title>
</head>

<body>
    <div class="container1">
        <h1 class="card-panel" style="display: flex; justify-content: center; align-items: center; background-color: rgb(77, 129, 185); color: #FFF; padding: 12px 24px; border-radius: 8px; font-size: 50px; font-weight: bold; margin-bottom: 20px;"> DAFTAR MEMBER</h1> 
        <table>
            <tr class="card-panel" style="background-color:rgb(123, 168, 216)">
                <th>No.</th>
                <th>Nama Member</th>
                <th>Nomor Member</th>
                <th>Alamat</th>
                <th>Tanggal Mendaftar</th>
                <th>Tanggal Terakhir Bayar</th>
                <th>Aksi</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($member as $row) :
                $tgl_mendaftar = date_create($row["tgl_mendaftar"]);
                $tgl_terakhir_bayar = date_create($row["tgl_terakhir_bayar"]);
            ?>
                <tr class="card-panel blue lighten-4">
                    <td><?= $i; ?></td>
                    <td><?= $row["nama_member"] ?></td>
                    <td><?= $row["nomor_member"] ?></td>
                    <td><?= $row["alamat"] ?></td>
                    <td><?= date_format($tgl_mendaftar, 'd-m-Y H:i:s') ?></td>
                    <td><?= date_format($tgl_terakhir_bayar, 'd-m-Y') ?></td>
                    <td>
                        <div style='display: flex; gap: 8px;'>
                            <a href='FormMember.php?id_member=<?= $row["id_member"] ?>' class='btn-custom btn-green btn-small'>
                                <i class='material-icons left'>edit</i>Edit
                            </a>
                            <a href='HapusDataMember.php?id_member=<?= $row["id_member"] ?>' class='btn-custom btn-red btn-small' onclick='return confirm("Apakah yakin data akan dihapus?")'>
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
                <a href="FormMember.php" class="btn-custom btn-blue btn-small">
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
