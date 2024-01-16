<?php require 'config/func_isNotLogin.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="gradient-body">
    <div class="register-form w-25 rounded bg-white p-4 mx-auto mb-5">
        <h1 class="text-center font-3 my-3">Pendaftaran</h1>
        <form action="config/proses.php?action=register" method="post">
            <div class="mb-3">
                <label class="font-3">Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="font-3">password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="row mb-3">
                <div class="col-6">
                    <label class="font-3">Nama Awal</label>
                    <input type="text" name="nama_awal" class="form-control" required>
                </div>
                <div class="col-6">
                    <label class="font-3">Nama Akhir</label>
                    <input type="text" name="nama_akhir" class="form-control" required>
                </div>
            </div>
            <div class="mb-3">
                <label class="font-3">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="font-3">Alamat</label>
                <textarea name="alamat" class="form-control" required cols="30" rows="10"></textarea>
            </div>
            <div class="mb-3">
                <label class="font-3">Nomer Telepon</label>
                <input type="number" name="telepon" class="form-control" required>
            </div>
            <div class="mb-3">
                <input type="checkbox" required> <p class="font-3 d-inline"><span class="fw-bold">Agree</span> with terms and conditions</p>
            </div>
            <div class="mb-3">
                <button type="submit" class="bg-3 text-white form-control">Daftar</button>
            </div>
        </form>
        <p class="font-3 text-center">Sudah punya akun? <a href="login.php" class="font-2">Login Disini</a></p>
    </div>
    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>