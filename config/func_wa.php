<?php 

require_once 'func_setnotify.php';

function sendWA($nama_awal, $nama_akhir, $paket, $berat, $subtotal, $total, $alamat, $telepon, $metode_pembayaran, $tanggal_masuk, $tanggal_keluar) {
    $config = parse_ini_file('config.ini');
    $message = $config['NAME'] . '‏
‎' .
    "Nama Pemesan: $nama_awal $nama_akhir" . '‏
‎' .
    "Paket: $paket" . '‏
‎' .
    "Berat: $berat" . '‏
‎' .
    "Subtotal: $subtotal"  . '‏
‎' .
    "Total: $total"  . '‏
‎' .
    "Alamat: $alamat"  . '‏
‎' .
    "Telepon: $telepon"  . '‏
‎' .
    "Metode Pembayaran: $metode_pembayaran"  . '‏
‎' .
    "Tanggal Masuk: $tanggal_masuk"  . '‏
‎' .
    "Tanggal Keluar: $tanggal_keluar";
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.fonnte.com/send',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array(
    'target' => $config['NOWA'],
    'message' => $message, 
    'countryCode' => '62', //optional
    ),
    CURLOPT_HTTPHEADER => array(
        'Authorization: ' . $config['TOKEN'] //change TOKEN to your actual token
    ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
    
    setNotify(0, 'Berhasil Melakukan Pesanan.');
    header('Location: ../index.php');
}