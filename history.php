<?php session_start() ?>
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
                <li class="d-flex align-items-center p-2 mb-3"><a href="profile.php" class="text-decoration-none"><img src="assets/img/profile.png" alt="imgError" class="img-fluid ms-5"> <p class="d-inline ms-2 text-white">Personal Info</p></a></li>
                    <li class="d-flex align-items-center bg-3 p-2"><a href="history.php" class="text-decoration-none"><img src="assets/img/history.png" alt="imgError" class="img-fluid ms-5"> <p class="d-inline ms-2 text-white">Riwayat</p></a></li>
                </ul>
                <div class="text-center logout bg-3 p-3">
                    <a href="config/proses.php?action=logout">
                        <img src="assets/img/logout.png" alt="imgError" class="img-fluid"><h5 class="d-inline text-white">Logout</h5>
                    </a>
                </div>
            <!-- endsidebar -->
            
        </div>
        <div class="col-9 p-5">
            <div class="container border border-1 rounded p-3 shadow shadow-lg bg-1">
                <h3>Riwayat</h3>
                <table class="table table-striped table-hover table-warning">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Paket</th>
                    <th scope="col">Berat</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col">Total</th>
                    <th scope="col">Nama Awal</th>
                    <th scope="col">Nama Akhir</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Metode Pembayaran</th>
                    <th scope="col">Tanggal Masuk</th>
                    <th scope="col">Tanggal Keluar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        require_once 'config/koneksi.php';
                        $no = 1;
                        $sql = $pdo->prepare('SELECT * FROM pesan WHERE user_id = :user_id');
                        $sql->bindParam(':user_id', $_SESSION['user']['user_id']);
                        $sql->execute();
                        while($row = $sql->fetch()) :
                    ?>
                        <tr>
                            <td scope="row"><?= $no++ ?></td>
                            <td><?= $row['paket'] ?></td>
                            <td><?= $row['berat'] ?></td>
                            <td><?= $row['subtotal'] ?></td>
                            <td><?= $row['total'] ?></td>
                            <td><?= $row['nama_awal'] ?></td>
                            <td><?= $row['nama_akhir'] ?></td>
                            <td><?= $row['alamat'] ?></td>
                            <td><?= $row['metode_pembayaran'] ?></td>
                            <td><?= $row['tanggal_masuk'] ?></td>
                            <td><?= $row['tanggal_keluar'] ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>