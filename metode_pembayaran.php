<?php session_start(); ?>
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
    <section class="container-fluid nav2 bg-1 p-4">
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
        </div>
    </section>

    <section class="container-fluid register-form p-5">
        <h1 class="text-center font-3 mb-5">Metode Pembayaran</h1>
        <div class="row">
            <div class="col-5 offset-1">
                <form action="config/proses.php?action=pesan" method="post" id="pesanForm">
                    <input type="hidden" name="paket" id="paket" value="<?= $_GET['paket'] ?>">
                    <input type="hidden" name="subtotal" id="subtotalInput">
                    <input type="hidden" name="total" id="total">
                    <div class="row mb-3">
                        <div class="col-6">
                            <label>Nama Awal</label>
                            <input type="text" name="nama_awal" class="form-control" value="<?= $_SESSION['user']['nama_awal'] ?>" required>
                        </div>
                        <div class="col-6">
                            <label>Nama Akhir</label>
                            <input type="text" name="nama_akhir" class="form-control" value="<?= $_SESSION['user']['nama_akhir'] ?>" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" cols="30" rows="10" required><?= (isset($_SESSION['user']['alamat1'])) ? $_SESSION['user']['alamat1'] : '' ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label>Telepon</label>
                        <input type="number" name="telepon" class="form-control" value="<?= (isset($_SESSION['user']['telepon'])) ? $_SESSION['user']['telepon'] : '' ?>" required>
                    </div>
                    <div class="mb-3">
                        <label>Metode Pembayaran</label>
                        <select name="metode_pembayaran" class="form-control" required>
                            <option>Dana</option>
                            <option>Ovo</option>
                            <option>Transfer Bank</option>
                        </select>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label>Tanggal Masuk</label>
                            <input type="date" name="tanggal_masuk" class="form-control" required>
                        </div>
                        <div class="col-6">
                            <label>Tanggal Keluar</label>
                            <input type="date" name="tanggal_keluar" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="checkbox" required> <p class="font-3 d-inline"><span class="fw-bold">Agree</span> with terms and conditions</p>
                    </div>
                </form>
            </div>
            <div class="col-5">
                <div class="container w-75 bg-1 p-5 rounded text-white">
                <!-- paket -->
                    <!-- <div class="bg-white font-1 p-3 rounded">
                        <h3>Normal</h3>
                        <p class="fw-bold m-0">Rp. 8.000/2Kg</p>
                    </div>
                    <p class="my-3">Masukkan berat Pakaian</p>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="0" min="1" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">/Kg</span>
                    </div> -->
                <!-- end paket -->
                <!-- bebas -->
                    <!-- <div class="row">
                        <div class="col-4">
                            <img src="assets/img/bedcover.png" alt="imgError" class="img-fluid" style="height: 100px;">
                        </div>
                        <div class="col-6">
                            <h3 class="">Bedcover</h3>
                            <p class="fw-bold m-0">Rp. 30.000/pcs</p>
                            <input type="number" class="form-control" min="1" placeholder="0">
                        </div>
                    </div> -->
                <!-- end bebas -->
                <?php if($_GET['paket'] == 'express') : ?>
                    <div class="bg-white font-1 p-3 rounded">
                        <h3>Express</h3>
                        <p class="fw-bold m-0">Rp. 25.000/5Kg</p>
                    </div>
                    <p class="my-3">Masukkan berat Pakaian</p>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="0" min="1" aria-label="Recipient's username" aria-describedby="basic-addon2"
                            onchange="setData(5000)" id="jml" name="berat" form="pesanForm" required>
                        <span class="input-group-text" id="basic-addon2">/Kg</span>
                    </div>
                <?php elseif($_GET['paket'] == 'normal') : ?>
                    <div class="bg-white font-1 p-3 rounded">
                        <h3>Normal</h3>
                        <p class="fw-bold m-0">Rp. 8.000/2Kg</p>
                    </div>
                    <p class="my-3">Masukkan berat Pakaian</p>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="0" min="1" aria-label="Recipient's username" aria-describedby="basic-addon2"
                        onchange="setData(4000)" id="jml" name="berat" form="pesanForm" required>
                        <span class="input-group-text" id="basic-addon2">/Kg</span>
                    </div>
                <?php elseif($_GET['paket'] == 'relax') : ?>
                    <div class="bg-white font-1 p-3 rounded">
                        <h3>Relax</h3>
                        <p class="fw-bold m-0">Rp. 7.000/2Kg</p>
                    </div>
                    <p class="my-3">Masukkan berat Pakaian</p>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="0" min="1" aria-label="Recipient's username" aria-describedby="basic-addon2"
                            onchange="setData(3500)" id="jml" name="berat" form="pesanForm" required>
                        <span class="input-group-text" id="basic-addon2">/Kg</span>
                    </div>
                <?php elseif($_GET['paket'] == 'bedcover') : ?>
                    <div class="row">
                        <div class="col-4">
                            <img src="assets/img/bedcover.png" alt="imgError" class="img-fluid" style="height: 100px;">
                        </div>
                        <div class="col-6">
                            <h3 class="">Bedcover</h3>
                            <p class="fw-bold m-0">Rp. 30.000/pcs</p>
                            <input type="number" class="form-control" min="1" placeholder="0"
                                onchange="setData2(30000)" id="jml" name="berat" form="pesanForm" required>
                        </div>
                    </div>
                <?php elseif($_GET['paket'] == 'sprei') : ?>
                    <div class="row">
                        <div class="col-4">
                            <img src="assets/img/sprei.png" alt="imgError" class="img-fluid" style="height: 100px;">
                        </div>
                        <div class="col-6">
                            <h3 class="">Sprei</h3>
                            <p class="fw-bold m-0">Rp. 15.000/pcs</p>
                            <input type="number" class="form-control" min="1" placeholder="0"
                                onchange="setData2(15000)" id="jml" name="berat" form="pesanForm" required>
                        </div>
                    </div>
                <?php elseif($_GET['paket'] == 'selimut') : ?>
                    <div class="row">
                        <div class="col-4">
                            <img src="assets/img/selimut.png" alt="imgError" class="img-fluid" style="height: 100px;">
                        </div>
                        <div class="col-6">
                            <h3 class="">Selimut</h3>
                            <p class="fw-bold m-0">Rp. 15.000/pcs</p>
                            <input type="number" class="form-control" min="1" placeholder="0"
                                onchange="setData2(150000)" id="jml" name="berat" form="pesanForm" required>
                        </div>
                    </div>
                <?php elseif($_GET['paket'] == 'boneka') : ?>
                    <div class="row">
                        <div class="col-4">
                            <img src="assets/img/boneka.png" alt="imgError" class="img-fluid" style="height: 100px;">
                        </div>
                        <div class="col-6">
                            <h3 class="">Boneka</h3>
                            <p class="fw-bold m-0">Rp. 10.000/pcs</p>
                            <input type="number" class="form-control" min="1" placeholder="0"
                                onchange="setData2(10000)" id="jml" name="berat" form="pesanForm" required>
                        </div>
                    </div>
                <?php endif; ?>
                    <div class="row mt-4">
                        <div class="col-4">
                            <p class="m-0">Total Berat</p>
                        </div>
                        <div class="col-8 text-end">
                            <p class="m-0" id="totalBerat">-</p>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <p class="m-0">Subtotal</p>
                        </div>
                        <div class="col-8 text-end">
                            <p class="m-0" id="subtotal">-</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-4">
                        <div class="col-4">
                            <p class="m-0">Total Pembayaran</p>
                        </div>
                        <div class="col-8 text-end">
                            <p class="m-0" id="totalPembayaran">-</p>
                        </div>
                    </div>
                    <div class="mt-3 text-center">
                        <button type="button" class="btn bg-3 w-75 text-white" data-bs-toggle="modal" data-bs-target="#orderModal">
                            Order Pesanan
                        </button>
                    </div>
                </div>
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

    <!-- Modal -->
        <div class="modal fade" id="orderModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header bg-1">
                <h1 class="modal-title fs-5 text-white" id="orderModalLabel">Konfirmasi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-3">
                <h5 class="text-white">Apakah anda ingin melanjutkan pesanan?</h5>
            </div>
            <div class="modal-footer bg-1">
                <button type="button" class="btn btn-outline bg-3 text-white" style="border-color: #A64208;" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="pesanForm" class="btn btn-outline bg-3 text-white" style="border-color: #A64208;">Pesan</button>
            </div>
            </div>
        </div>
        </div>
    <!-- end modal -->

    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
    <script>
        function setData(harga) {
            totalBerat.innerHTML = jml.value + ' Kg';
            subtotal.innerHTML = 'Rp. ' + harga + ' /Kg';
            totalPembayaran.innerHTML = 'Rp. ' + jml.value * harga;
            subtotalInput.value = harga;
            total.value = jml.value * harga;
        }
        function setData2(harga) {
            totalBerat.innerHTML = jml.value + ' Pcs';
            subtotal.innerHTML = 'Rp. ' + harga + ' /Pcs';
            totalPembayaran.innerHTML = 'Rp. ' + jml.value * harga;
            subtotalInput.value = harga;
            total.value = jml.value * harga;
        }
    </script>
</body>
</html>