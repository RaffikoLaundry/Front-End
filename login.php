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
    <div class="login-form w-25 rounded bg-3 p-3 mx-auto">
        <h1 class="text-center text-white my-3">Login</h1>
        <a href="config/google.php" class="btn bg-white d-block w-75 mx-auto"><img src="assets/img/google.png" alt="imgError" class="img-fluid"> <p class="font-3 d-inline">Sign in with google</p></a>
        <hr class="text-white w-75 mx-auto">
        <form action="config/proses.php?action=login" method="post">
            <div class="mb-3">
                <input type="text" name="username" class="form-control w-75 mx-auto" placeholder="Username">
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control w-75 mx-auto" placeholder="Password">
            </div>
            <hr class="text-white w-75 mx-auto">
            <!-- <div class="mb-3">
                <input type="checkbox" id="remember"> <label for="remember">Ingat saya</label>
            </div> -->
            <div class="mb-3 text-center">
                <button type="submit" class="btn bg-white font-3 rounded-pill fw-bold w-75">Login</button>
            </div>
        </form>
        <p class="font-2 text-center">Tidak Punya Akun? <a href="register.php" class="text-white">Daftar Disini</a></p>
    </div>
    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
    <?php require 'config/func_notify.php' ?>
    <?php require 'config/func_isNotLogin.php' ?>
</body>
</html>