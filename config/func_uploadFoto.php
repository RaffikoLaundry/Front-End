<?php

function uploadFoto($lokasi)
{
    // Pastikan direktori tujuan sudah ada, atau buat jika belum
    if (!file_exists($lokasi)) {
        mkdir($lokasi, 0777, true);
    }

    // Mendapatkan informasi file
    $namaFile = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $tmpFile = $_FILES['foto']['tmp_name'];
    $error = $_FILES['foto']['error'];

    // Mendapatkan ekstensi file
    $ekstensiValid = ['jpg', 'jpeg', 'png', 'gif'];
    $ekstensiFile = strtolower(pathinfo($namaFile, PATHINFO_EXTENSION));

    // Generate nama unik untuk file
    $namaFileBaru = uniqid() . '.' . $ekstensiFile;

    // Set path lengkap untuk menyimpan file
    $pathFileBaru = $lokasi . '/' . $namaFileBaru;

    // Validasi ekstensi file
    if (!in_array($ekstensiFile, $ekstensiValid)) {
        return "Ekstensi file tidak diizinkan. Gunakan file dengan ekstensi: " . implode(', ', $ekstensiValid);
    }

    // Validasi ukuran file (misalnya, maksimum 2MB)
    $ukuranMaksimal = 2 * 1024 * 1024; // 2MB
    if ($ukuranFile > $ukuranMaksimal) {
        return "Ukuran file terlalu besar. Maksimum 2MB.";
    }

    // Cek apakah ada error saat upload
    if ($error > 0) {
        return "Error saat upload file. Kode error: $error";
    }

    // Pindahkan file ke lokasi tujuan
    if (move_uploaded_file($tmpFile, $pathFileBaru)) {
        return substr($pathFileBaru, 3); // Mengembalikan path lengkap file yang diupload
    } else {
        return "Gagal upload file.";
    }
}
?>