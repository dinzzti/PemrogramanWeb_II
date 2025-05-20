<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <style>
        .bottom-buttons {
            text-align: center;
            margin-top: 60px;
            margin-bottom: 30px;
        }

        .bottom-buttons a {
            display: inline-block;
            padding: 12px 28px;
            margin: 10px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            text-transform: uppercase;
            border-radius: 30px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease-in-out;
        }

        .btn-kelola {
            background: linear-gradient(45deg, #ec407a, #d81b60);
            color: white;
        }

        .btn-kelola:hover {
            background: linear-gradient(45deg, #f06292, #ec407a);
            transform: scale(1.05);
        }

        .btn-logout {
            background-color: #999;
            color: white;
        }

        .btn-logout:hover {
            background-color: #666;
            transform: scale(1.05);
        }

        /* Tombol edit & hapus */
        .action-buttons a {
            display: inline-block;
            padding: 6px 14px;
            font-size: 13px;
            font-weight: bold;
            color: white;
            border-radius: 20px;
            text-decoration: none;
            margin: 2px;
            transition: all 0.3s ease;
        }

        .btn-edit {
            background-color: #ec407a;
        }

        .btn-edit:hover {
            background-color: #d81b60;
        }

        .btn-hapus {
            background-color: #9e9e9e;
        }

        .btn-hapus:hover {
            background-color: #616161;
        }
    </style>
</head>
<body>
    <h2>Daftar Buku</h2>

    <table border="1" cellpadding="5">
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($books as $book): ?>
        <tr>
            <td><?= esc($book['judul']) ?></td>
            <td><?= esc($book['penulis']) ?></td>
            <td><?= esc($book['penerbit']) ?></td>
            <td><?= esc($book['tahun_terbit']) ?></td>
            <td class="action-buttons">
                <a href="/books/edit/<?= $book['id'] ?>" class="btn-edit">Edit</a>
                <a href="/books/delete/<?= $book['id'] ?>" class="btn-hapus" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>

    <!-- Tombol di tengah bawah -->
    <div class="bottom-buttons">
        <a href="/books/create" class="btn-kelola">➕ Tambah Buku</a>
        <a href="/logout" class="btn-logout">📚 Logout</a>
    </div>
</body>
</html>
