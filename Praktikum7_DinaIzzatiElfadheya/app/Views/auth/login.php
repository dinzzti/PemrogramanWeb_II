<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <h2>Login</h2>

    <?php if (session()->getFlashdata('success')): ?>
        <p class="success-msg"><?= session()->getFlashdata('success') ?></p>
    <?php endif ?>

    <?php if (session()->getFlashdata('error')): ?>
        <p class="error-msg"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>

    <form action="/login" method="post" class="form-box">
        <label>Username</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <button type="submit">Login</button>

        <p>Belum punya akun? <a href="/register">Daftar di sini</a></p>
    </form>
</body>
</html>