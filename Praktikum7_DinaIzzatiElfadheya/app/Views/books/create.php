<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <h2>Tambah Buku</h2>
   

    <?php if (isset($validation)): ?>
        <div class="error-msg"><?= $validation->listErrors() ?></div>
    <?php endif ?>

    <form method="post" action="/books/store" class="form-box">
        Judul: <input type="text" name="judul">
        Penulis: <input type="text" name="penulis">
        Penerbit: <input type="text" name="penerbit">
        Tahun Terbit: <input type="number" name="tahun_terbit">
        <button type="submit">Simpan</button>
        <a href="/" class="btn-kembali">Kembali</a><br><br>
    </form>
</body>
</html>