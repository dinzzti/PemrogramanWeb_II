<?php
require("Style.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        .button{
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="dashboard">
            <h1 class="card-panel pink lighten-3">Halo, Selamat Datang!</h1>
        </div>

        <div class="button-container">
            <a href="Member.php" class="btn btn-custom btn-blue">
                <i class="material-icons">group</i> DATA MEMBER
            </a>
            <a href="Peminjaman.php" class="btn btn-custom btn-red">
                <i class="material-icons">pan_tool</i> DATA PEMINJAMAN
            </a>
            <a href="Buku.php" class="btn btn-custom btn-green">
                <i class="material-icons">book</i> DATA BUKU
            </a>
        </div>
    </body>
</html>
