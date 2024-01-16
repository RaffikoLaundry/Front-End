<?php session_start(); ?>
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
    
    <section class="container-fluid nav1">
        <ul class="pt-3 text-end">
            <li class="d-inline me-5"><a href="pakaian.php" class="text-decoration-none text-white">Location</a></li>
            <li class="d-inline me-5"><a href="service.php" class="text-decoration-none text-white">Service</a></li>
            <li class="d-inline me-5"><a href="about.php" class="text-decoration-none text-white">About Us</a></li>
            <li class="d-inline me-5"><a href="profile.php" class="text-decoration-none text-white">Profile</a></li>
            <?php if(isset($_SESSION['user'])) : ?>
                <li class="d-inline me-5"><a href="config/proses.php?action=logout" class="text-decoration-none text-white">Logout</a></li>
            <?php else: ?>
                <li class="d-inline me-5"><a href="login.php" class="text-decoration-none text-white">Login</a></li>
            <?php endif; ?>
        </ul>
        <div class="row">
            <div class="col-6 ps-5">
                <h1 class="text-white">Raffiko Laundry</h1>
                <p class="text-white">Selamat datang di Layanan Laundry Terbaik! Kami adalah solusi terpercaya untuk semua kebutuhan pakaian Anda. Dengan tenaga kerja ahli dan peralatan modern, kami siap memberikan hasil terbaik untuk pakaian Anda.</p>
                <a href="#" class="btn bg-3 text-white rounded-pill w-25">Order</a>
            </div>
            <div class="col-6 text-center p-0">
                <img src="assets/img/logo.png" alt="imgError" class="img-fluid">
            </div>
        </div>
    </section>

    <section class="container-fluid step bg-1">
        <div class="row">
            <div class="col-2 offset-1">
                <div class="row">
                    <div class="col-6">
                        <h1 class="d-inline text-white">Login</h1><br>
                        <p class="d-inline text-white">Login untuk melakukan order.</p>
                    </div>
                    <div class="col-6 bg-white rounded-circle text-center">
                        <img src="assets/img/step1.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-2">
                <img src="assets/img/arrow-right.png" class="img-fluid w-100" alt="">
            </div>
            <div class="col-2">
                <div class="row">
                    <div class="col-6">
                        <h1 class="d-inline text-white">Order</h1><br>
                        <p class="d-inline text-white">Pilih paket lalu order.</p>
                    </div>
                    <div class="col-6 bg-white rounded-circle text-center">
                        <img src="assets/img/step2.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-2">
                <img src="assets/img/arrow-right.png" class="img-fluid w-100" alt="">
            </div>
            <div class="col-2">
                <div class="row">
                    <div class="col-6">
                        <h1 class="d-inline text-white">Deliver</h1><br>
                        <p class="d-inline text-white">Pakaian anda siap kami proses.</p>
                    </div>
                    <div class="col-6 bg-white rounded-circle text-center">
                        <img src="assets/img/step2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid packet bg-2 p-5">
        <h1 class="text-center text-white">Jenis Paket</h1>
        <h3 class="text-center text-white">Pilih paket sesuai kebutuhan anda.</h3>

        <div class="row justify-content-evenly mt-4">
            <div class="col-3 bg-white py-3 px-5 text-center">
                <h1 class="font-3">Express</h1>
                <h4 class="font-3">Rp. 25.000/5kg</h4>
                <hr class="font-3">
                <div class="row mb-4">
                    <h5 class="col-6 text-start font-3">Antar/Jemput</h5>
                    <h5 class="col-6 text-end font-3">&#10004;</h5>
                </div>
                <div class="row mb-4">
                    <h5 class="col-6 text-start font-3 text-muted">Setrika</h5>
                    <h5 class="col-6 text-end font-3 text-muted">&#x2716;</h5>
                </div>
                <div class="row mb-4">
                    <h5 class="col-6 text-start font-3 text-muted">Softener</h5>
                    <h5 class="col-6 text-end font-3 text-muted">&#x2716;</h5>
                </div>
                <div class="row mb-4">
                    <h5 class="col-6 text-start font-3">Perfume</h5>
                    <h5 class="col-6 text-end font-3">&#10004;</h5>
                </div>
                <div class="row mb-4">
                    <h5 class="col-6 text-start font-3">Packing</h5>
                    <h5 class="col-6 text-end font-3">&#10004;</h5>
                </div>
                <div class="row mb-4">
                    <h5 class="col-6 text-start font-3">Detergent</h5>
                    <h5 class="col-6 text-end font-3">&#10004;</h5>
                </div>
                <div class="row mb-4">
                    <h5 class="col-6 text-start font-3">1 Hari</h5>
                    <h5 class="col-6 text-end font-3">&#10004;</h5>
                </div>
                <a href="metode_pembayaran.php?paket=express" class="btn bg-3 text-white rounded-pill w-50"><h5>Order</h5></a>
            </div>
            <div class="col-3 bg-white py-3 px-5 text-center">
                <h1 class="font-3">Normal</h1>
                <h4 class="font-3">Rp. 8.000/2kg</h4>
                <hr class="font-3">
                <div class="row mb-4">
                    <h5 class="col-6 text-start font-3">Antar/Jemput</h5>
                    <h5 class="col-6 text-end font-3">&#10004;</h5>
                </div>
                <div class="row mb-4">
                    <h5 class="col-6 text-start font-3">Setrika</h5>
                    <h5 class="col-6 text-end font-3">&#10004;</h5>
                </div>
                <div class="row mb-4">
                    <h5 class="col-6 text-start font-3">Softener</h5>
                    <h5 class="col-6 text-end font-3">&#10004;</h5>
                </div>
                <div class="row mb-4">
                    <h5 class="col-6 text-start font-3">Perfume</h5>
                    <h5 class="col-6 text-end font-3">&#10004;</h5>
                </div>
                <div class="row mb-4">
                    <h5 class="col-6 text-start font-3">Packing</h5>
                    <h5 class="col-6 text-end font-3">&#10004;</h5>
                </div>
                <div class="row mb-4">
                    <h5 class="col-6 text-start font-3">Detergent</h5>
                    <h5 class="col-6 text-end font-3">&#10004;</h5>
                </div>
                <div class="row mb-4">
                    <h5 class="col-6 text-start font-3">2 Hari</h5>
                    <h5 class="col-6 text-end font-3">&#10004;</h5>
                </div>
                <a href="metode_pembayaran.php?paket=normal" class="btn bg-3 text-white rounded-pill w-50"><h5>Order</h5></a>
            </div>
            <div class="col-3 bg-white py-3 px-5 text-center">
                <h1 class="font-3">Relax</h1>
                <h4 class="font-3">Rp. 7.000/2kg</h4>
                <hr class="font-3">
                <div class="row mb-4">
                    <h5 class="col-6 text-start font-3">Antar/Jemput</h5>
                    <h5 class="col-6 text-end font-3">&#10004;</h5>
                </div>
                <div class="row mb-4">
                    <h5 class="col-6 text-start font-3">Setrika</h5>
                    <h5 class="col-6 text-end font-3">&#10004;</h5>
                </div>
                <div class="row mb-4">
                    <h5 class="col-6 text-start font-3">Softener</h5>
                    <h5 class="col-6 text-end font-3">&#10004;</h5>
                </div>
                <div class="row mb-4">
                    <h5 class="col-6 text-start font-3">Perfume</h5>
                    <h5 class="col-6 text-end font-3">&#10004;</h5>
                </div>
                <div class="row mb-4">
                    <h5 class="col-6 text-start font-3">Packing</h5>
                    <h5 class="col-6 text-end font-3">&#10004;</h5>
                </div>
                <div class="row mb-4">
                    <h5 class="col-6 text-start font-3">Detergent</h5>
                    <h5 class="col-6 text-end font-3">&#10004;</h5>
                </div>
                <div class="row mb-4">
                    <h5 class="col-6 text-start font-3">3 Hari</h5>
                    <h5 class="col-6 text-end font-3">&#10004;</h5>
                </div>
                <a href="metode_pembayaran.php?paket=relax" class="btn bg-3 text-white rounded-pill w-50"><h5>Order</h5></a>
            </div>
        </div>
    </section>

    <section class="container-fluid footer bg-1 p-4">
        <div class="row">
            <div class="col-2 offset-1 text-center">
                <img src="assets/img/logo.png" alt="imgError" class="img-fluid">
                <h5 class="text-white">Kualitas Tak Tergantikan, Harga Terjangkau.</h5>
            </div>
            <div class="col-3 offset-5">
                <div class="row mt-5">
                    <div class="col-6">
                        <ul>
                            <li class="mb-3"><a href="#" class="text-decoration-none text-white"><h5>Contact Us</h5></a></li>
                            <li class="mb-3"><a href="profile.php" class="text-decoration-none text-white"><h5>Profile</a></h5></li>
                            <li class="mb-3"><a href="#" class="text-decoration-none text-white"><h5>Services</a></h5></li>
                            <li class="mb-3"><a href="#" class="text-decoration-none text-white"><h5>Location</a></h5></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul>
                            <li class="mb-3"><a href="#" class="text-decoration-none text-white"><h5>Email</h5></a></li>
                            <li class="mb-3"><a href="#" class="text-decoration-none text-white"><h5>WhatsApp</a></h5></li>
                            <li class="mb-3"><a href="#" class="text-decoration-none text-white"><h5>SignUp</a></h5></li>
                            <li class="mb-3"><a href="#" class="text-decoration-none text-white"><h5>Privacy Policy</a></h5></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
    <?php require_once 'config/func_notify.php' ?>
</body>
</html>