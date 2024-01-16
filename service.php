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
    <section class="container-fluid nav2 bg-1 p-0">
        <ul class="pt-3 text-end">
            <li class="d-inline me-5"><a href="pakaian.php" class="text-decoration-none text-white">Location</a></li>
            <li class="d-inline me-5"><a href="service.php" class="text-decoration-none text-white">Service</a></li>
            <li class="d-inline me-5"><a href="about.php" class="text-decoration-none text-white">About Us</a></li>
            <li class="d-inline me-5"><a href="profile.php" class="text-decoration-none text-white">Profile</a></li>
            <?php if(isset($_SESSION['user'])) : ?>
                <li class="d-inline me-5"><a href="config/proses.php?action=logout.php" class="text-decoration-none text-white">Logout</a></li>
            <?php else: ?>
                <li class="d-inline me-5"><a href="login.php" class="text-decoration-none text-white">Logout</a></li>
            <?php endif; ?>
        </ul>
        <div class="text-center bg-3 p-4">
            <p class="display-4 text-white">Service</p>
            <h3 class="text-white">Kami berkomitmen untuk memberikan hasil terbaik <br> untuk setiap cucian Anda</h3>
        </div>
    </section>

    <section class="container-fluid service-text font-3">
        <div class="row">
            <div class="col-3 offset-2">
                <h3>1. Cucian Reguler</h3>
                <p>Cucian reguler kami melibatkan proses pencucian berkualitas tinggi menggunakan deterjen ramah lingkungan. Pakaian Anda akan dirawat dengan cermat untuk memastikan kebersihan maksimal dan pemeliharaan kualitas kain.</p>
            </div>
            <div class="col-3 offset-2">
                <h3>2. Cucian Khusus</h3>
                <p>Untuk pakaian yang memerlukan perlakuan khusus, kami menyediakan layanan cucian khusus. Mulai dari dry cleaning hingga treatment khusus untuk bahan-bahan tertentu, kami hadir untuk menjaga pakaian berharga Anda tetap terjaga dengan baik.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-3 offset-2">
                <h3>3. Layanan Antar-Jemput</h3>
                <p>Kami mengerti bahwa waktu Anda berharga. Oleh karena itu, kami menawarkan layanan antar-jemput untuk memberikan kenyamanan ekstra bagi Anda. Tinggal hubungi kami, dan tim kami akan menjemput cucian Anda di lokasi yang Anda tentukan.</p>
            </div>
            <div class="col-3 offset-2">
                <h3>4. Express Service</h3>
                <p>Jika Anda membutuhkan pakaian bersih dengan segera, manfaatkan layanan Express kami. Cucian Anda akan diproses dengan cepat tanpa mengorbankan kualitas, sehingga Anda dapat kembali ke aktivitas Anda dengan pakaian yang segar.</p>
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