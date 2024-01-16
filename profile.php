<?php require 'config/func_isLogin.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="container-fluid sidebar row min-vh-100">
        <div class="col-3 bg-1 p-0">
            <div class="text-center p-4">
                <img src="<?= (isset($_SESSION['user']['foto']) ? $_SESSION['user']['foto'] : 'assets/img/user.png') ?>" alt="" class="img-fluid rounded-circle mt-5" style="max-width: 150px; max-height: 150px;">
                <h3><?= $_SESSION['user']['nama_awal'] .' ' . $_SESSION['user']['nama_akhir'] ?></h3>
            </div>
            <!-- sidebar -->
                <ul class="list-style-none mt-4 p-0">
                    <li class="d-flex align-items-center bg-3 p-2 mb-3"><a href="profile.php" class="text-decoration-none"><img src="assets/img/profile.png" alt="imgError" class="img-fluid ms-5"> <p class="d-inline ms-2 text-white">Personal Info</p></a></li>
                    <li class="d-flex align-items-center p-2"><a href="history.php" class="text-decoration-none"><img src="assets/img/history.png" alt="imgError" class="img-fluid ms-5"> <p class="d-inline ms-2 text-white">Riwayat</p></a></li>
                </ul>
                <div class="text-center logout bg-3 p-3">
                    <a href="config/proses.php?action=logout">
                        <img src="assets/img/logout.png" alt="imgError" class="img-fluid"><h5 class="d-inline text-white">Logout</h5>
                    </a>
                </div>
            <!-- endsidebar -->
            
        </div>
        <div class="col-9 p-5">
            <div class="container border border-1 rounded p-3">
                <h3>Detail Info</h3>
                <p>Detail informasi bisa diatur. Anda bisa mengubah beberapa informasi dibawah ini. Anda juga bisa melengkapi profile anda disini.</p>
                <div class="text-center">
                    <img src="<?= (isset($_SESSION['user']['foto']) ? $_SESSION['user']['foto'] : 'assets/img/user.png') ?>" alt="" class="img-fluid" style="max-width: 150px; max-height: 150px;"><h3 class="d-inline ms-3"><?= $_SESSION['user']['nama_awal'] .' ' . $_SESSION['user']['nama_akhir'] ?></h3>
                    <form action="config/proses.php?action=ubah-foto" method="post" enctype="multipart/form-data" id="ubahFoto">
                        <input type="file" name="foto" class="form-control w-25 my-2 mx-auto" accept="image/*" onchange="javascript:this.form.submit();">
                    </form>
                </div>
                <form action="config/proses.php?action=ubah-profile" method="post">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label>Nama Awal</label>
                                <input type="text" class="form-control" name="nama_awal" value="<?= $_SESSION['user']['nama_awal'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" class="form-control" value="<?= $_SESSION['user']['email'] ?>" readonly>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label>Nama Akhir</label>
                                <input type="text" class="form-control" name="nama_akhir" value="<?= $_SESSION['user']['nama_akhir'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label>Telepon</label>
                                <input type="number" class="form-control" name="telepon" value="<?= $_SESSION['user']['telepon'] ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
            <div class="container border border-1 rounded p-3 mt-3">
                <h3>Alamat</h3>
                <p>Alamat rumah anda atau tempat kerja anda, alamat ini yang akan digunakan oleh Raffiko laundry sebagai tujuan penjemputan atau pengiriman barang. Anda bisa mengubah alamat sesuai kebutuhan.</p>
                <form action="config/proses.php?action=ubah-alamat" method="post">
                    <div class="mb-3">
                        <label>Alamat</label>
                        <textarea name="alamat1" class="form-control" required><?= $_SESSION['user']['alamat1']; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label>Alamat Kedua</label>
                        <textarea name="alamat2" class="form-control" required><?= $_SESSION['user']['alamat2']; ?></textarea>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
    <?php require 'config/func_notify.php' ?>
</body>
</html>