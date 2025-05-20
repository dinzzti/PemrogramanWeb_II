<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <h2>Register</h2>

    <?php if (session()->getFlashdata('error')): ?>
    <div class="error-msg">
        <?= session()->getFlashdata('error') ?>
    </div>
    <?php endif; ?>

    <?php if (isset($validation)): ?>
        <div class="error-msg">
            <?= $validation->listErrors(); ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('/register/process') ?>" method="post" class="form-box">
    <?= csrf_field() ?>

    <label>Username</label>
    <input type="text" name="username" value="<?= old('username') ?>" required>

    <label>Email</label>
    <input type="email" name="email" value="<?= old('email') ?>" required>

    <label>Password</label>
    <input type="password" name="password" required>

    <label>Konfirmasi Password</label>
    <input type="password" name="password_confirm" required>

    <button type="submit">Register</button>
</form>


    <p>Sudah punya akun? <a href="/login">Login di sini</a></p>
</body>
</html>
