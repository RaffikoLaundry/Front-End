<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require 'func_setnotify.php';

if(isset($_SESSION['user'])) {
    setNotify(1, 'Anda Sudah Login!');
    header('Location: ./index.php');
}