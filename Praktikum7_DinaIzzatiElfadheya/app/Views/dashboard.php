<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
  <style>
    body {
      font-family: sans-serif;
      background: #ffe6f0;
      padding: 20px;
    }
    h1 {
      text-align: center;
      color: #e91e63;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      background: #fff;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    th, td {
      padding: 12px;
      border: 1px solid #eee;
    }
    th {
      background: #f06292;
      color: white;
    }
    .btn {
      display: inline-block;
      padding: 10px 20px;
      margin: 10px 5px;
      background: #e91e63;
      color: white;
      text-decoration: none;
      border-radius: 8px;
    }
    .btn:hover {
      background: #d81b60;
    }
    .actions {
      margin-top: 20px;
      text-align: center;
    }
  </style>
</head>
<body>

  <h1>Daftar Buku</h1>

  <table>
    <tr>
      <th>No</th>
      <th>Judul</th>
      <th>Penulis</th>
      <th>Penerbit</th>
      <th>Tahun Terbit</th>
    </tr>
    <?php foreach ($books as $i => $book): ?>
    <tr>
      <td><?= $i + 1 ?></td>
      <td><?= esc($book['judul']) ?></td>
      <td><?= esc($book['penulis']) ?></td>
      <td><?= esc($book['penerbit']) ?></td>
      <td><?= esc($book['tahun_terbit']) ?></td>
    </tr>
    <?php endforeach; ?>
  </table>

  <div class="actions">
    <a href="<?= base_url('/books/create') ?>" class="btn">➕ Kelola Buku</a>
    <a href="<?= base_url('/logout') ?>" class="btn" style="background-color: #9e9e9e;">🚪Logout</a>
  </div>

</body>
</html>
