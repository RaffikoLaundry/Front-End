<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require 'koneksi.php';
require 'func_setnotify.php';
require 'func_user_session.php';
require 'func_uploadFoto.php';
require 'func_wa.php';
require 'func_cart.php';

$action = $_GET['action'];

if($action == 'logout') {
    session_destroy();
    header('Location: ../index.php');
}else if($action == 'register') {
    try{
        $sql = $pdo->prepare('INSERT INTO users VALUES (NULL, NULL, :username, :password, :nama_awal, :nama_akhir, :email, :telepon, :alamat, NULL)');
        $sql->bindParam(':username', $_POST['username']);
        $sql->bindParam(':password', $_POST['password']);
        $sql->bindParam(':nama_awal', $_POST['nama_awal']);
        $sql->bindParam(':nama_akhir', $_POST['nama_akhir']);
        $sql->bindParam(':email', $_POST['email']);
        $sql->bindParam(':alamat', $_POST['alamat']);
        $sql->bindParam(':telepon', $_POST['telepon']);
        $sql->execute();
        setNotify(0, 'Berhasil Melakukan Registrasi.');
        header('Location: ../login.php');
    }catch(PDOException $err) {
        var_dump($err); die;
    }
}else if($action == 'login') {
    try{
        $sql = $pdo->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
        $sql->bindParam(':username', $_POST['username']);
        $sql->bindParam(':password', $_POST['password']);
        $sql->execute();
        $result = $sql->fetch();

        if ($result) {
            user_session($result);
            setNotify(0, 'Selamat Datang, ' . $result['nama_awal'] . '!');
            header('Location: ../index.php');
        } else {
            setNotify(1, 'Login gagal. Periksa kembali username dan password Anda.');
            header('Location: ../login.php');
        }
    } catch(PDOException $err) {
        var_dump($err);
        die;
    }

}else if($action == 'ubah-profile') {
    try{
        $sql = $pdo->prepare('UPDATE users SET nama_awal = :nama_awal, nama_akhir = :nama_akhir, telepon = :telepon WHERE user_id = :user_id');
        $sql->bindParam(':nama_awal', $_POST['nama_awal']);
        $sql->bindParam(':nama_akhir', $_POST['nama_akhir']);
        $sql->bindParam(':telepon', $_POST['telepon']);
        $sql->bindParam(':user_id', $_SESSION['user']['user_id']);
        $sql->execute();
        $_SESSION['user']['nama_awal'] = $_POST['nama_awal'];
        $_SESSION['user']['nama_akhir'] = $_POST['nama_akhir'];
        $_SESSION['user']['telepon'] = $_POST['telepon'];
        setNotify(0, 'Berhasil Mengubah Profile.');
        header('Location: ../profile.php');
    }catch(PDOException $err) {
        var_dump($err); die;
    }
}else if($action == 'ubah-foto') {
    if(isset($_SESSION['user']['foto'])) {
        unlink('../' . $_SESSION['user']['foto']);
    }

    $foto = uploadFoto('../assets/img/foto-users');

    try{
        $sql = $pdo->prepare('UPDATE users SET foto = :foto WHERE user_id = :user_id');
        $sql->bindParam(':foto', $foto);
        $sql->bindParam(':user_id', $_SESSION['user']['user_id']);
        $sql->execute();
        $_SESSION['user']['foto'] = $foto;
        setNotify(0, 'Berhasil Mengubah Foto.');
        header('Location: ../profile.php');
    }catch(PDOException $err) {
        var_dump($err); die;
    }
}else if($action == 'ubah-alamat') {
    try{
        $sql = $pdo->prepare('UPDATE users SET alamat1 = :alamat1, alamat2 = :alamat2 WHERE user_id = :user_id');
        $sql->bindParam(':alamat1', $_POST['alamat1']);
        $sql->bindParam(':alamat2', $_POST['alamat2']);
        $sql->bindParam(':user_id', $_SESSION['user']['user_id']);
        $sql->execute();
        $_SESSION['user']['alamat1'] = $_POST['alamat1'];
        $_SESSION['user']['alamat2'] = $_POST['alamat2'];
        setNotify(0, 'Berhasil Mengubah Alamat.');
        header('Location: ../profile.php');
    }catch(PDOException $err) {
        var_dump($err); die;
    }
}else if($action == 'pesan') {
    try{
        $sql1 = $pdo->prepare('SELECT * FROM cart WHERE user_id = :user_id');
        $sql1->bindParam(':user_id', $_SESSION['user']['user_id']);
        $sql1->execute();
        $totalSemua = 0;
        if($sql1->rowCount() != 0) {
            while($row = $sql1->fetch()) {
                $total = $row['harga'] * $row['jumlah'];
                $totalSemua += $total;
                $sql = $pdo->prepare('INSERT INTO pesan VALUES (NULL, :user_id, :paket, :berat, :subtotal, :total, :nama_awal, :nama_akhir, :alamat, :telepon, :metode_pembayaran, :tanggal_masuk, :tanggal_keluar)');
                $sql->bindParam(':user_id', $_SESSION['user']['user_id']);
                $sql->bindParam(':paket', $row['paket']);
                $sql->bindParam(':berat', $row['jumlah']);
                $sql->bindParam(':subtotal', $row['harga']);
                $sql->bindParam(':total', $total);
                $sql->bindParam(':nama_awal', $_POST['nama_awal']);
                $sql->bindParam(':nama_akhir', $_POST['nama_akhir']);
                $sql->bindParam(':alamat', $_POST['alamat']);
                $sql->bindParam(':telepon', $_POST['telepon']);
                $sql->bindParam(':metode_pembayaran', $_POST['metode_pembayaran']);
                $sql->bindParam(':tanggal_masuk', $_POST['tanggal_masuk']);
                $sql->bindParam(':tanggal_keluar', $_POST['tanggal_keluar']);
                $sql->execute();
            }
    
            $sql2 = $pdo->prepare('DELETE FROM cart WHERE user_id = :user_id');
            $sql2->bindParam(':user_id', $_SESSION['user']['user_id']);
            $sql2->execute();
            
            sendWA($_POST['nama_awal'], $_POST['nama_akhir'], $totalSemua, $_POST['alamat'], $_POST['telepon'], $_POST['metode_pembayaran'], $_POST['tanggal_masuk'], $_POST['tanggal_keluar']);
        }else {
            setNotify(1, 'Pesanan Kosong!, mungkin anda ingin memesan?');
            header('Location: ../pakaian.php');
        }
        
    }catch(PDOException $err) {
        var_dump($err->getMessage()); die;
    }
}else if($action == 'order') {
    require 'func_isLogin.php';
    try{
        $sql1 = $pdo->prepare('SELECT * FROM cart WHERE user_id = :user_id AND paket = :paket');
        $sql1->bindParam(':user_id', $_SESSION['user']['user_id']);
        $sql1->bindParam(':paket', $_GET['paket']);
        $sql1->execute();

        if($sql1->rowCount() == 0) {
            $sql2 = $pdo->prepare('INSERT INTO cart VALUES (NULL, :user_id, :paket, 1, :harga)');
            $sql2->bindParam(':user_id', $_SESSION['user']['user_id']);
            $sql2->bindParam(':paket', $_GET['paket']);
            $sql2->bindParam(':harga', $_GET['harga']);
            $sql2->execute();
            setNotify(0, 'Dimasukan Ke Cart.');
        }else {
            setNotify(1, 'Sudah Ada Didalam Cart!');
        }
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }catch(PDOException $err) {
        var_dump($err->getMessage()); die;
    }
}else if($action == 'set-jumlah') {
    try{
        $sql = $pdo->prepare('UPDATE cart SET jumlah = :jumlah, harga = :subtotal WHERE user_id = :user_id AND paket = :paket');
        $sql->bindParam(':jumlah', $_GET['jml']);
        $sql->bindParam(':subtotal', $_GET['subtotal']);
        $sql->bindParam(':user_id', $_SESSION['user']['user_id']);
        $sql->bindParam(':paket', $_GET['paket']);
        $sql->execute();
        die;
    }catch(PDOException $err) {
        echo json_encode(array(
            'error' => array(
                'code' => $err->getCode(),
                'message' => $err->getMessage()
            )
        ));
    }
    
    echo json_encode(array('ok'));
}else if($action == 'hapus-cart') {
    try{
        $sql = $pdo->prepare('DELETE FROM cart WHERE user_id = :user_id AND paket = :paket');
        $sql->bindParam(':user_id', $_SESSION['user']['user_id']);
        $sql->bindParam(':paket', $_GET['paket']);
        $sql->execute();
    }catch(PDOException $err) {
        echo json_encode(array(
            'error' => array(
                'code' => $err->getCode(),
                'message' => $err->getMessage()
            )
        ));
    }
    
    echo json_encode(array('ok'));
}