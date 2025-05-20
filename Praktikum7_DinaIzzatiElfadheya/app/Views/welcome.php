<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Selamat Datang di Perpustakaan</title>
  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
  <style>
    .landing-box {
      text-align: center;
      padding: 40px;
      background: white;
      border-radius: 20px;
      box-shadow: 0 8px 30px rgba(0,0,0,0.1);
      max-width: 700px;
      margin: 100px auto;
    }
    .landing-box h1 {
      font-size: 28px;
      font-weight: bold;
    }
    .landing-box p {
      margin: 20px 0;
      font-size: 16px;
      color: #555;
    }
    .landing-buttons a {
      margin: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="landing-box">
      <h1>
        <span style="color: green;">Selamat Datang di</span> 
        <span style="color: orange;">dinzz's Library</span>
      </h1>
      <hr>
      <div class="landing-buttons">
        <a href="<?= base_url('/login') ?>" class="btn">🔐 Login</a>
        <a href="<?= base_url('/register') ?>" class="btn" style=>📝 Register</a>
      </div>
    </div>
  </div>
</body>
</html>
