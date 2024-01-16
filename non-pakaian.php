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
    <section class="container-fluid nav2 bg-1">
        <ul class="pt-3 text-end">
            <li class="d-inline me-5"><a href="pakaian.php" class="text-decoration-none text-white">Location</a></li>
            <li class="d-inline me-5"><a href="profile.php" class="text-decoration-none text-white">Profile</a></li>
            <?php if(isset($_SESSION['user'])) : ?>
                <li class="d-inline me-5"><a href="config/proses.php?action=logout" class="text-decoration-none text-white">Logout</a></li>
            <?php else: ?>
                <li class="d-inline me-5"><a href="login.php" class="text-decoration-none text-white">Login</a></li>
            <?php endif; ?>
        </ul>
        <div class="container-fluid row bg-1">
            <div class="col-3 offset-1">
                <img src="assets/img/logo.png" alt="imgError" class="img-fluid">
            </div>
            <div class="col-4">
                <p class="display-6 text-center text-white mt-5">Pakaian berisi barang-barang didalam kategori pakaian yang tersedia pada layanan kami</p>
            </div>
        </div>
        <div class="container-fluid text-center p-4">
            <span class="me-3">
                <a href="pakaian.php" class="text-decoration-none"><h3 class="text-white d-inline">Pakaian</h3></a>
            </span>
            <span class="border-bottom border-2 border-white ms-3">
                <a href="non-pakaian.php" class="text-decoration-none"><h3 class="text-white d-inline">Non-Pakaian</h3></a>
            </span>
        </div>
    </section>

    <section class="container-fluid non-packet p-5">
        <h1 class="text-center font-3 my-3">Pilih layanan yang sesuai dengan kebutuhan anda</h1>
        <div class="container row mx-auto">
            <div class="col-4 offset-1 bedcover bg-light rounded p-4">
                <h3 class="text-white">Bedcover</h3>
                <div class="row">
                    <div class="col-6">
                        <p class="text-white">Rp. 30.000/pcs</p>
                    </div>
                    <div class="col-6 text-end">
                        <a href="metode_pembayaran.php?paket=bedcover" class="btn bg-white font-3 rounded-pill w-75 fw-bold">Order</a>
                    </div>
                </div>
                <!-- <div class="form-outline">
                    <input type="number" id="typeNumber" min="1" class="form-control w-25 bg-2 font-3" placeholder="0">
                </div> -->
            </div>
            <div class="col-4 offset-2 sprei bg-light rounded p-4">
                <h3 class="text-white">Sprei</h3>
                <div class="row">
                    <div class="col-6">
                        <p class="text-white">Rp. 15.000/pcs</p>
                    </div>
                    <div class="col-6 text-end">
                        <a href="metode_pembayaran.php?paket=sprei" class="btn bg-white font-3 rounded-pill w-75 fw-bold">Order</a>
                    </div>
                </div>
                <!-- <div class="form-outline">
                    <input type="number" id="typeNumber" min="1" class="form-control w-25 bg-2 font-3" placeholder="0">
                </div> -->
            </div>
        </div>
        <div class="container row mx-auto mt-4">
            <div class="col-4 offset-1 selimut bg-light rounded p-4">
                <h3 class="text-white">Selimut</h3>
                <div class="row">
                    <div class="col-6">
                        <p class="text-white">Rp. 15.000/pcs</p>
                    </div>
                    <div class="col-6 text-end">
                        <a href="metode_pembayaran.php?paket=selimut" class="btn bg-white font-3 rounded-pill w-75 fw-bold">Order</a>
                    </div>
                </div>
                <!-- <div class="form-outline">
                    <input type="number" id="typeNumber" min="1" class="form-control w-25 bg-2 font-3" placeholder="0">
                </div> -->
            </div>
            <div class="col-4 offset-2 boneka bg-light rounded p-4">
                <h3 class="text-white">Boneka</h3>
                <div class="row">
                    <div class="col-6">
                        <p class="text-white">Rp. 10.000/pcs</p>
                    </div>
                    <div class="col-6 text-end">
                        <a href="metode_pembayaran.php?paket=boneka" class="btn bg-white font-3 rounded-pill w-75 fw-bold">Order</a>
                    </div>
                </div>
                <!-- <div class="form-outline">
                    <input type="number" id="typeNumber" min="1" class="form-control w-25 bg-2 font-3" placeholder="0">
                </div> -->
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
                            <li class="mb-3"><a href="#" class="text-decoration-none text-white"><h5>Profile</a></h5></li>
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
</body>
</html>