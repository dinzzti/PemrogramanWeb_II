<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <h2>Edit Buku</h2>
    <a href="/">Kembali</a><br><br>

    <?php if (isset($validation)): ?>
        <div class="error-msg"><?= $validation->listErrors() ?></div>
    <?php endif ?>

    <form method="post" action="/books/update/<?= $book['id'] ?>" class="form-box">
        Judul: <input type="text" name="judul" value="<?= esc($book['judul']) ?>">
        Penulis: <input type="text" name="penulis" value="<?= esc($book['penulis']) ?>">
        Penerbit: <input type="text" name="penerbit" value="<?= esc($book['penerbit']) ?>">
        Tahun Terbit: <input type="number" name="tahun_terbit" value="<?= esc($book['tahun_terbit']) ?>">
        <button type="submit">Update</button>
    </form>
</body>
</html>