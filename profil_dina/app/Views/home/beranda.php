<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Beranda</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <h1>Halo Selamat Datang!</h1>

    <nav>
        <a href="<?= base_url('/') ?>">Beranda</a> |
        <a href="<?= base_url('home/profil') ?>">Profil</a>
    </nav>

    <h2>Silakan menuju 'Profil' Untuk Melihat Lebih Detail</h2>
<div class="biodata-box">
    <p><strong>Nama:</strong> <?= $mahasiswa['nama'] ?></p>
    <p><strong>NIM:</strong> <?= $mahasiswa['nim'] ?></p>
</div>
</body>
</html>
