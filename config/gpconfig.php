<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Include Librari Google Client (API)
include_once '../assets/libraries/google-client/Google_Client.php';
include_once '../assets/libraries/google-client/contrib/Google_Oauth2Service.php';
$client_id = '777251452532-j7vh2nfm50964678birfbgv9t2pcct52.apps.googleusercontent.com'; // Google client ID
$client_secret = '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'; // Google Client Secret
$redirect_url = 'http://localhost/Laundry/config/google.php'; // Callback URL
// Call Google API
$gclient = new Google_Client();
$gclient->setApplicationName('Google Login'); // Set dengan Nama Aplikasi Kalian
$gclient->setClientId($client_id); // Set dengan Client ID
$gclient->setClientSecret($client_secret); // Set dengan Client Secret
$gclient->setRedirectUri($redirect_url); // Set URL untuk Redirect setelah berhasil login
$google_oauthv2 = new Google_Oauth2Service($gclient);
?>