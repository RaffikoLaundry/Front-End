<?php
// Include file gpconfig
include_once 'gpconfig.php';
include_once 'koneksi.php';
require 'func_setnotify.php';
include_once 'func_user_session.php';
if(isset($_GET['code'])){
  $gclient->authenticate($_GET['code']);
  $_SESSION['token'] = $gclient->getAccessToken();
  header('Location: ' . filter_var($redirect_url, FILTER_SANITIZE_URL));
}
if (isset($_SESSION['token'])) {
  $gclient->setAccessToken($_SESSION['token']);
}
if ($gclient->getAccessToken()) {
  include 'koneksi.php';
  // Get user profile data from google
  $gpuserprofile = $google_oauthv2->userinfo->get();
  // Ambil nama dari Akun Google
  $nama_awal = $gpuserprofile['given_name'];
  $nama_akhir = $gpuserprofile['family_name'];
  $email = $gpuserprofile['email']; // Ambil email Akun Google nya
  // Buat query untuk mengecek apakah data user dengan email tersebut sudah ada atau belum
  // Jika ada, ambil id, username, dan nama dari user tersebut
  $sql = $pdo->prepare("SELECT * FROM users WHERE email=:a");
  $sql->bindParam(':a', $email);
  $sql->execute(); // Eksekusi querynya
  $user = $sql->fetch(); // Ambil datanya dari hasil query tadi
  if(empty($user)){ // Jika User dengan email tersebut belum ada
    // Ambil username dari kata sebelum simbol @ pada email
    $ex = explode('@', $email); // Pisahkan berdasarkan "@"
    $username = $ex[0]; // Ambil kata pertama
    // Lakukan insert data user baru tanpa password
    $sql = $pdo->prepare("INSERT INTO users VALUES(NULL, NULL, :username, NULL, :nama_awal, :nama_akhir, :email, NULL, NULL, NULL)");
    $sql->bindParam(':username', $username);
    $sql->bindParam(':nama_awal', $nama_awal);
    $sql->bindParam(':nama_akhir', $nama_akhir);
    $sql->bindParam(':email', $email);
    $sql->execute(); // Eksekusi query insert
    $user['user_id'] = $pdo->lastInsertId(); // Ambil id user yang baru saja di insert
    $user['username'] = $username;
    $user['nama_awal'] = $nama_awal;
    $user['nama_akhir'] = $nama_akhir;
    $user['email'] = $email;
  }
  user_session($user);
  setNotify(0, 'Selamat Datang, ' . $user['nama_awal'] . '!');
  header("location: ../index.php");
} else {
  $authUrl = $gclient->createAuthUrl();
  header("location: ".$authUrl);
}
?>