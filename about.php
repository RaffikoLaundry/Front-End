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
            <li class="d-inline me-5"><a href="service.php" class="text-decoration-none text-white">Service</a></li>
            <li class="d-inline me-5"><a href="about.php" class="text-decoration-none text-white">About Us</a></li>
            <li class="d-inline me-5"><a href="profile.php" class="text-decoration-none text-white">Profile</a></li>
            <?php if(isset($_SESSION['user'])) : ?>
                <li class="d-inline me-5"><a href="config/proses.php?action=logout.php" class="text-decoration-none text-white">Logout</a></li>
            <?php else: ?>
                <li class="d-inline me-5"><a href="login.php" class="text-decoration-none text-white">Logout</a></li>
            <?php endif; ?>
        </ul>
        <div class="row bg-3 p-4">
            <div class="col-3 offset-1">
                <img src="assets/img/logo.png" alt="imgError" class="img-fluid">
            </div>
            <div class="col-4">
                <p class="display-4 text-white mt-5">About Us</p>
                <h3 class="text-white">Tempat Di Mana Cucian Menjadi Seni!</h3>
                <hr class="text-white">
            </div>
        </div>
    </section>

    <section class="container-fluid about p-5">
        <h1 class="font-3 text-center">WHO WE ARE.</h1>
        <hr class="font-3 mx-auto w-25">
        <h4 class="font-3 text-center">Kami adalah tim profesional dengan dedikasi tinggi untuk <br> memberikan pelayanan laundry terbaik bagi Anda.</h4>
    </section>


    <section class="container-fluid about-text font-3">
        <div class="row">
            <div class="col-5 offset-1 fw-bold">
                <p>kami bukan hanya sekadar jasa laundry biasa. Kami adalah komunitas yang peduli dan berkomitmen untuk memberikan layanan tanpa kompromi. Dengan peralatan modern dan bahan pembersih berkualitas tinggi, setiap potongan pakaian Anda diperlakukan dengan cermat dan profesional.</p>
                <p>Apa yang membedakan kami? Kami bukan hanya mencuci pakaian; kami merawatnya. Dengan sentuhan ahli dan perhatian terhadap detail, kami memastikan setiap cucian keluar dari pintu kami dalam kondisi terbaiknya. Layanan antar-jemput kami juga dirancang untuk memberi Anda kenyamanan ekstra, sehingga Anda dapat fokus pada hal-hal yang benar-benar penting dalam hidup Anda.</p>
                <p>kami percaya bahwa kebersihan adalah investasi dalam kesehatan dan kesejahteraan. Kami bangga menjadi bagian dari perjalanan Anda untuk menjaga pakaian Anda tetap bersih dan segar. Terima kasih telah memilih [Nama Perusahaan] sebagai mitra laundry Anda. Mari bersama-sama menciptakan pengalaman laundry yang tak terlupakan.</p>
            </div>
            <div class="col-5 text-center">
                <img src="assets/img/about.png" alt="imgError" class="img-fluid">
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