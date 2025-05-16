<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profil Dina</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <h1>Selamat Datang di Halaman Profil!</h1>

    <nav>
        <a href="<?= base_url('/') ?>">Beranda</a> |
        <a href="<?= base_url('home/profil') ?>">Profil</a>
    </nav>

    <img class="profil" src="<?= base_url('assets/foto_dina.jpg') ?>" alt="Foto Dina">

<div class="biodata-box">
    <p><strong>Nama:</strong> <?= $mahasiswa['nama'] ?></p>
    <p><strong>NIM:</strong> <?= $mahasiswa['nim'] ?></p>
    <p><strong>Asal Prodi:</strong> <?= $mahasiswa['asal_prodi'] ?></p>
    <p><strong>Hobi:</strong> <?= $mahasiswa['hobi'] ?></p>
    <p><strong>Skill:</strong> <?= $mahasiswa['skill'] ?></p>
    <p><em><?= $mahasiswa['bio'] ?></em></p>
</div>

    <h3 style="text-align:center;">Galeri Dina</h3>
    <div class="gallery">
        <img src="<?= base_url('assets/keluarga.jpg') ?>" alt="Kegiatan 1">
        <img src="<?= base_url('assets/teman.jpg') ?>" alt="Kegiatan 2">
        <img src="<?= base_url('assets/organisasi.jpg') ?>" alt="Kegiatan 3">
    </div>

    <div style="text-align:center; margin: 20px;">
        <a href="<?= base_url('/') ?>">← Kembali ke Beranda</a>
    </div>
</body>
</html>
