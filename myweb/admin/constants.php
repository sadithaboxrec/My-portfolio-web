<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

    define('SITEURL', 'http://localhost/myweb/');
    
$conn = mysqli_connect("localhost", "root", "", "saditha_portfolio");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
