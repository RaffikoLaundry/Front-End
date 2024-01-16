<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function setNotify($status, $message) {
    $_SESSION['notify']['status'] = $status;
    $_SESSION['notify']['message'] = $message;
}