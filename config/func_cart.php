c:\Users\ACER\Music\Laundry\config\func_cart.phpconfig/func_cart.php<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

class Cart {
    
    function addCart($paket) {
        if(!isset($_SESSION[$paket])) {
            $_SESSION[$paket]['nama'] = $paket;
            $_SESSION[$paket]['jumlah'] = 0;
        }
    }

    function setJumlah($paket, $jumlah) {
        $_SESSION[$paket]['jumlah'] = $jumlah;
    }

    function deleteCart($paket) {
        unset($_SESSION[$paket]);
    }
}

?>